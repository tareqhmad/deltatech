<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenRouteService
{
    protected $apiKey;
    protected $timeout = 10;

    public function __construct()
    {
        $this->apiKey = config('services.ors.api_key');
    }

    // Convertir adresse -> coordonnées
    public function geocode($address)
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => $this->apiKey
            ])->get("https://api.openrouteservice.org/geocode/search", [
                'text' => $address,
                'size' => 1
            ]);

            // Log pour déboguer
            Log::info('Geocode response', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->failed()) {
                return [
                    'error' => true,
                    'reason' => 'API request failed',
                    'details' => $response->json()
                ];
            }

            $data = $response->json();

            // Vérification plus robuste
            if (empty($data['features'])) {
                return [
                    'error' => true,
                    'reason' => 'No results for this address',
                    'data' => $data
                ];
            }

            // Retourner les coordonnées [longitude, latitude]
            $coords = $data['features'][0]['geometry']['coordinates'] ?? null;

            if (!$coords) {
                return [
                    'error' => true,
                    'reason' => 'Invalid coordinates format',
                    'data' => $data
                ];
            }

            return $coords;
        } catch (\Exception $e) {
            return [
                'error' => true,
                'reason' => 'Geocoding exception: ' . $e->getMessage()
            ];
        }
    }


    // Calculer distance
    public function distance($start, $end)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => $this->apiKey,
                'Content-Type' => 'application/json'
            ])->post("https://api.openrouteservice.org/v2/directions/driving-car/json", [
                'coordinates' => [$start, $end]
            ]);

            // Log pour déboguer
            Log::info('Distance response', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->failed()) {
                throw new \Exception('Distance API failed: ' . $response->body());
            }

            $data = $response->json();

            // Vérification de la structure de réponse
            if (!isset($data['routes'][0]['summary']['distance'])) {
                throw new \Exception('Invalid response format from distance API');
            }

            return $data['routes'][0]['summary']['distance'] / 1000; // Convertir en km

        } catch (\Exception $e) {
            throw $e; // Relancer l'exception pour le contrôleur
        }
    }
}
