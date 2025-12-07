<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenRouteService;
use Illuminate\Support\Facades\Log;

class DeliveryController extends Controller
{
    public function showForm()
    {
        return view('delivery.calculator');
    }

    public function calculate(Request $request, OpenRouteService $ors)
    {
        try {
            $request->validate([
                'from' => 'required|string|min:5|max:255',
                'to' => 'required|string|min:5|max:255',
                'van_type' => 'required|in:small,large',
                'small_parcels' => 'required|integer|min:0|max:100',
                'medium_parcels' => 'required|integer|min:0|max:100',
                'large_parcels' => 'required|integer|min:0|max:100'
            ]);

            // Vérifier la clé API
            if (empty(config('services.ors.api_key'))) {
                return response()->json([
                    'error' => true,
                    'message' => 'Service temporairement indisponible'
                ], 500);
            }

            // Géocodage
            $start = $ors->geocode($request->from);
            $end = $ors->geocode($request->to);

            if (isset($start['error'])) {
                return response()->json([
                    'error' => true,
                    'message' => 'Adresse de départ invalide',
                    'details' => $start['reason']
                ], 400);
            }

            if (isset($end['error'])) {
                return response()->json([
                    'error' => true,
                    'message' => 'Adresse d\'arrivée invalide',
                    'details' => $end['reason']
                ], 400);
            }

            // Calcul de distance
            $distanceKm = $ors->distance($start, $end);

            // Calcul des volumes et vérification de capacité
            $parcelSummary = $this->calculateParcelSummary(
                $request->small_parcels,
                $request->medium_parcels,
                $request->large_parcels,
                $request->van_type
            );

            if ($parcelSummary['exceeds_capacity']) {
                return response()->json([
                    'error' => true,
                    'message' => 'Capacité dépassée',
                    'details' => 'La camionnette sélectionnée ne peut pas transporter tous les colis. Veuillez choisir une camionnette plus grande ou réduire le nombre de colis.'
                ], 400);
            }

            // Calcul du prix optimisé
            $price = $this->calculateOptimizedPrice(
                $distanceKm,
                $request->van_type,
                $parcelSummary['total_volume']
            );

            // Calcul du temps estimé
            $estimatedTime = $this->calculateEstimatedTime($distanceKm, $request->van_type);

            return response()->json([
                'success' => true,
                'distance' => round($distanceKm, 1),
                'price' => $price,
                'formatted_price' => number_format($price, 2, ',', ' ') . ' €',
                'estimated_time' => $estimatedTime,
                'van_type' => $request->van_type,
                'parcel_summary' => $parcelSummary,
                'volume_used_percent' => $parcelSummary['volume_used_percent'],
                'capacity_warning' => $parcelSummary['capacity_warning'],
                'start_coords' => $start,
                'end_coords' => $end
            ]);
        } catch (\Exception $e) {
            Log::error('Delivery calculation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'error' => true,
                'message' => 'Une erreur est survenue lors du calcul',
                'details' => env('APP_DEBUG') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Calcule le résumé des colis et vérifie la capacité
     */
    private function calculateParcelSummary($small, $medium, $large, $vanType)
    {
        // Dimensions des colis (en unités de volume)
        $parcelVolumes = [
            'small' => 1,   // Petit colis : 1 unité
            'medium' => 2,  // Colis moyen : 2 unités
            'large' => 4    // Grand colis : 4 unités
        ];

        // Capacités des camionnettes (en unités de volume)
        $vanCapacities = [
            'small' => 20,  // Petite camionnette : 20 unités
            'large' => 50   // Grande camionnette : 50 unités
        ];

        // Calcul du volume total
        $totalVolume = ($small * $parcelVolumes['small'])
            + ($medium * $parcelVolumes['medium'])
            + ($large * $parcelVolumes['large']);

        $capacity = $vanCapacities[$vanType];
        $volumeUsedPercent = ($totalVolume / $capacity) * 100;

        // Déterminer si la capacité est dépassée
        $exceedsCapacity = $totalVolume > $capacity;

        // Avertissement si plus de 80% de la capacité utilisée
        $capacityWarning = $volumeUsedPercent > 80;

        return [
            'small' => $small,
            'medium' => $medium,
            'large' => $large,
            'total_volume' => $totalVolume,
            'capacity' => $capacity,
            'volume_used_percent' => round($volumeUsedPercent, 1),
            'exceeds_capacity' => $exceedsCapacity,
            'capacity_warning' => $capacityWarning,
            'parcel_details' => [
                'small' => ['count' => $small, 'volume' => $parcelVolumes['small']],
                'medium' => ['count' => $medium, 'volume' => $parcelVolumes['medium']],
                'large' => ['count' => $large, 'volume' => $parcelVolumes['large']]
            ]
        ];
    }

    /**
     * Formule de prix optimisée pour camionnettes
     */
    private function calculateOptimizedPrice($distanceKm, $vanType, $totalVolume)
    {
        // Tarifs de base par type de camionnette
        $vanTariffs = [
            'small' => [
                'base' => 8,      // Frais de base
                'per_km_0_5' => 0.50,   // 0-5 km
                'per_km_5_20' => 0.65,  // 5-20 km
                'per_km_20+' => 0.50,   // 20+ km
                'volume_surcharge' => 0.5 // Surcharge par unité de volume
            ],
            'large' => [
                'base' => 12,
                'per_km_0_5' => 0.55,
                'per_km_5_20' => 0.85,
                'per_km_20+' => 0.65,
                'volume_surcharge' => 0.3
            ]
        ];

        $tariff = $vanTariffs[$vanType];

        // Calcul du prix selon la distance avec tarif dégressif
        if ($distanceKm <= 5) {
            $distancePrice = $distanceKm * $tariff['per_km_0_5'];
        } elseif ($distanceKm <= 20) {
            $distancePrice = (5 * $tariff['per_km_0_5'])
                + (($distanceKm - 5) * $tariff['per_km_5_20']);
        } else {
            $distancePrice = ($distanceKm * 0.43) * 2;
        }

        // Surcharge pour le volume
        $volumeSurcharge = $totalVolume * $tariff['volume_surcharge'];

        // Prix de base + distance + volume
        $price = $tariff['base'] + $distancePrice + $volumeSurcharge;

        // Réduction pour les longs trajets
        if ($distanceKm > 30) {
            $reduction = min(15, $price * 0.15); // 15% max, max 15€
            $price -= $reduction;
        }



        // Minimum de rentabilité


        return round($price, 2);
    }

    /**
     * Calcul du temps estimé en fonction de la distance et du type de camionnette
     */
    private function calculateEstimatedTime($distanceKm, $vanType)
    {
        // Vitesses moyennes selon le type de camionnette
        $speeds = [
            'small' => ['urban' => 35, 'rural' => 65],
            'large' => ['urban' => 30, 'rural' => 60]
        ];

        $speed = $speeds[$vanType];

        // Estimation du pourcentage urbain/rural
        if ($distanceKm <= 5) {
            $urbanPercentage = 1.0;
        } elseif ($distanceKm <= 20) {
            $urbanPercentage = 0.8;
        } elseif ($distanceKm <= 50) {
            $urbanPercentage = 0.6;
        } else {
            $urbanPercentage = 0.4;
        }

        $ruralPercentage = 1 - $urbanPercentage;

        // Calcul du temps en heures
        $timeHours = ($distanceKm * $urbanPercentage / $speed['urban'])
            + ($distanceKm * $ruralPercentage / $speed['rural']);

        $timeMinutes = round($timeHours * 60);

        // Ajouter un buffer pour le chargement/déchargement
        $loadingTime = $vanType === 'large' ? 20 : 15;

        // Buffer pour le trafic
        $trafficBuffer = min(45, $timeMinutes * 0.25);

        return $timeMinutes + $loadingTime + $trafficBuffer;
    }

    /**
     * Action pour confirmer la commande (à implémenter)
     */
    public function confirm(Request $request)
    {
        // À implémenter : sauvegarde de la commande, etc.
        return response()->json(['success' => true, 'message' => 'Commande confirmée']);
    }
}
