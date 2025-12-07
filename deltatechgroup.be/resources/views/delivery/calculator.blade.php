<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur de Livraison - Camionnette</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
        }

        .card-shadow {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .progress-bar {
            height: 10px;
            border-radius: 5px;
            transition: width 0.3s ease;
        }

        .capacity-low {
            background: #10b981;
        }

        .capacity-medium {
            background: #f59e0b;
        }

        .capacity-high {
            background: #ef4444;
        }

        .parcel-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-size: 18px;
        }

        .van-option.selected {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="py-8">
    <div class="container mx-auto px-4 max-w-6xl">
        <!-- En-tête -->
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                <i class="fas fa-truck-moving mr-3"></i>Calculateur de Livraison
            </h1>
            <p class="text-white text-xl opacity-90">Tarif pour camionnettes avec gestion des colis</p>
        </div>

        <!-- Carte principale -->
        <div class="bg-white rounded-2xl card-shadow overflow-hidden">
            <div class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white p-6">
                <h2 class="text-2xl font-bold">
                    <i class="fas fa-boxes mr-2"></i>Configuration de votre livraison
                </h2>
                <p class="opacity-90">Sélectionnez votre camionnette et vos colis</p>
            </div>

            <form id="deliveryForm" class="p-6 md:p-8">
                @csrf

                <!-- Type de camionnette -->
                <div class="mb-10">
                    <label class="block text-gray-700 text-xl font-bold mb-6">
                        <i class="fas fa-truck mr-2"></i>Type de camionnette
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Petite camionnette -->
                        <label class="van-option cursor-pointer">
                            <input type="radio" name="van_type" value="small" class="hidden" checked>
                            <div
                                class="bg-gray-50 border-2 border-gray-300 rounded-xl p-6 hover:border-blue-500 transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="bg-blue-100 text-blue-600 p-3 rounded-lg mr-4">
                                        <i class="fas fa-truck-pickup text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">Camionnette S</h3>
                                        <p class="text-gray-600 mt-1">Petite camionnette</p>
                                    </div>
                                    <div class="text-green-600 font-bold text-lg">À partir de 8.50€ HTVA</div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-box text-gray-400 mr-3"></i>
                                        <span>Capacité : <strong>20 unités</strong></span>
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-ruler-combined text-gray-400 mr-3"></i>
                                        <span>Dimensions : 3m × 1.5m × 1.5m</span>
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-weight text-gray-400 mr-3"></i>
                                        <span>Charge max : 800 kg</span>
                                    </div>
                                </div>
                            </div>
                        </label>

                        <!-- Grande camionnette -->
                        <label class="van-option cursor-pointer">
                            <input type="radio" name="van_type" value="large" class="hidden">
                            <div
                                class="bg-gray-50 border-2 border-gray-300 rounded-xl p-6 hover:border-blue-500 transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="bg-purple-100 text-purple-600 p-3 rounded-lg mr-4">
                                        <i class="fas fa-truck text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800">Camionnette L</h3>
                                        <p class="text-gray-600 mt-1">Grande camionnette</p>
                                    </div>
                                    <div class="text-green-600 font-bold text-lg">À partir de 12€ HTVA</div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-box text-gray-400 mr-3"></i>
                                        <span>Capacité : <strong>50 unités</strong></span>
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-ruler-combined text-gray-400 mr-3"></i>
                                        <span>Dimensions : 4m × 2m × 2m</span>
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-weight text-gray-400 mr-3"></i>
                                        <span>Charge max : 1500 kg</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Section Colis -->
                <div class="mb-10">
                    <div class="flex items-center justify-between mb-6">
                        <label class="block text-gray-700 text-xl font-bold">
                            <i class="fas fa-box-open mr-2"></i>Vos colis
                        </label>
                        <div id="totalParcels" class="text-lg font-bold text-blue-600">Total : 0 colis</div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <!-- Petit colis -->
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="parcel-icon bg-blue-100 text-blue-600 mr-4">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 text-lg">Petit colis</h4>
                                    <p class="text-gray-600 text-sm">Ex: carton 30×30×30 cm</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700">Volume : 1 unité</span>
                                    <span class="text-gray-700">Max 100</span>
                                </div>
                                <div class="flex items-center">
                                    <button type="button"
                                        class="minus-btn p-2 bg-gray-200 rounded-l-lg hover:bg-gray-300"
                                        data-type="small">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" name="small_parcels" id="small_parcels"
                                        class="w-16 text-center border-y border-gray-300 py-2" value="0"
                                        min="0" max="100" readonly>
                                    <button type="button"
                                        class="plus-btn p-2 bg-gray-200 rounded-r-lg hover:bg-gray-300"
                                        data-type="small">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Colis moyen -->
                        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="parcel-icon bg-yellow-100 text-yellow-600 mr-4">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 text-lg">Colis moyen</h4>
                                    <p class="text-gray-600 text-sm">Ex: carton 60×40×40 cm</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700">Volume : 2 unités</span>
                                    <span class="text-gray-700">Max 100</span>
                                </div>
                                <div class="flex items-center">
                                    <button type="button"
                                        class="minus-btn p-2 bg-gray-200 rounded-l-lg hover:bg-gray-300"
                                        data-type="medium">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" name="medium_parcels" id="medium_parcels"
                                        class="w-16 text-center border-y border-gray-300 py-2" value="0"
                                        min="0" max="100" readonly>
                                    <button type="button"
                                        class="plus-btn p-2 bg-gray-200 rounded-r-lg hover:bg-gray-300"
                                        data-type="medium">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Grand colis -->
                        <div class="bg-red-50 border border-red-200 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="parcel-icon bg-red-100 text-red-600 mr-4">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 text-lg">Grand colis</h4>
                                    <p class="text-gray-600 text-sm">Ex: meuble, électroménager</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700">Volume : 4 unités</span>
                                    <span class="text-gray-700">Max 100</span>
                                </div>
                                <div class="flex items-center">
                                    <button type="button"
                                        class="minus-btn p-2 bg-gray-200 rounded-l-lg hover:bg-gray-300"
                                        data-type="large">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" name="large_parcels" id="large_parcels"
                                        class="w-16 text-center border-y border-gray-300 py-2" value="0"
                                        min="0" max="100" readonly>
                                    <button type="button"
                                        class="plus-btn p-2 bg-gray-200 rounded-r-lg hover:bg-gray-300"
                                        data-type="large">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barre de capacité -->
                    <div id="capacitySection" class="hidden">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700 font-medium">Utilisation de la capacité</span>
                            <span id="capacityPercent" class="font-bold">0%</span>
                        </div>
                        <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                            <div id="capacityBar" class="h-full capacity-low" style="width: 0%"></div>
                        </div>
                        <div id="capacityWarning" class="mt-2 text-sm text-orange-600 hidden">
                            <i class="fas fa-exclamation-triangle mr-1"></i>
                            <span>Attention : capacité presque atteinte</span>
                        </div>
                    </div>
                </div>

                <!-- Adresses -->
                <div class="space-y-6 mb-10">
                    <div class="relative">
                        <label class="block text-gray-700 text-lg font-bold mb-3">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i>Adresse de départ
                        </label>
                        <div class="relative">
                            <input type="text" name="from" id="from"
                                class="w-full p-4 pl-12 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                                placeholder="Ex: Rue de la Loi 16, 1000 Bruxelles" required>
                            <i
                                class="fas fa-circle absolute left-4 top-1/2 transform -translate-y-1/2 text-blue-500"></i>
                        </div>
                    </div>

                    <div class="relative">
                        <label class="block text-gray-700 text-lg font-bold mb-3">
                            <i class="fas fa-flag-checkered mr-2 text-green-500"></i>Adresse d'arrivée
                        </label>
                        <div class="relative">
                            <input type="text" name="to" id="to"
                                class="w-full p-4 pl-12 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                                placeholder="Ex: Avenue Louise 250, 1050 Bruxelles" required>
                            <i
                                class="fas fa-flag absolute left-4 top-1/2 transform -translate-y-1/2 text-green-500"></i>
                        </div>
                    </div>
                </div>

                <!-- Bouton -->
                <div class="mt-10">
                    <button type="submit" id="calculateBtn"
                        class="w-full py-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold text-lg rounded-xl hover:from-blue-700 hover:to-indigo-800 focus:ring-4 focus:ring-blue-300 transition-all transform hover:scale-[1.02]">
                        <i class="fas fa-calculator mr-2"></i>CALCULER LE TARIF
                    </button>
                </div>
            </form>

            <!-- Résultats -->
            <div id="results" class="p-6 md:p-8 border-t border-gray-100 hidden">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">
                        <i class="fas fa-file-invoice-dollar mr-2"></i>Devis de livraison
                    </h3>
                    <p class="text-gray-600">Votre estimation personnalisée</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- Distance -->
                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-route text-blue-600 text-xl mr-3"></i>
                            <h4 class="font-bold text-gray-700">Distance</h4>
                        </div>
                        <div id="distanceResult" class="text-3xl font-bold text-blue-700">--</div>
                        <p class="text-gray-600 text-sm mt-2">Kilomètres</p>
                    </div>

                    <!-- Temps -->
                    <div class="bg-green-50 p-6 rounded-xl border border-green-100">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-clock text-green-600 text-xl mr-3"></i>
                            <h4 class="font-bold text-gray-700">Temps estimé</h4>
                        </div>
                        <div id="timeResult" class="text-3xl font-bold text-green-700">--</div>
                        <p class="text-gray-600 text-sm mt-2">Minutes</p>
                    </div>

                    <!-- Prix -->
                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-euro-sign text-purple-600 text-xl mr-3"></i>
                            <h4 class="font-bold text-gray-700">Prix total</h4>
                        </div>
                        <div id="priceResult" class="text-3xl font-bold text-purple-700">--</div>
                        <p class="text-gray-600 text-sm mt-2">HTVA</p>
                    </div>
                </div>

                <!-- Détails de la commande -->
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-6">
                    <h4 class="font-bold text-gray-700 mb-4">
                        <i class="fas fa-clipboard-list mr-2"></i>Détails de votre commande
                    </h4>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="font-semibold text-gray-600 mb-3">Camionnette</h5>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span>Type :</span>
                                    <span id="vanTypeResult" class="font-medium">--</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Capacité utilisée :</span>
                                    <span id="capacityUsed" class="font-medium">--</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h5 class="font-semibold text-gray-600 mb-3">Colis</h5>
                            <div class="space-y-2" id="parcelDetails">
                                <!-- Rempli dynamiquement -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton de confirmation -->
                <div class="text-center">
                    <button id="confirmBtn"
                        class="py-3 px-8 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-bold rounded-xl hover:from-green-700 hover:to-emerald-700 focus:ring-4 focus:ring-green-300 transition-all transform hover:scale-105">
                        <i class="fas fa-check-circle mr-2"></i>CONFIRMER LA COMMANDE
                    </button>
                    <p class="text-gray-500 text-sm mt-3">
                        <i class="fas fa-lock mr-1"></i>Paiement sécurisé - Pas de frais cachés
                    </p>
                </div>
            </div>

            <!-- Loader -->
            <div id="loader" class="p-8 text-center hidden">
                <div class="inline-flex flex-col items-center">
                    <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-blue-600 mb-4"></div>
                    <p class="text-gray-700 font-medium">Calcul en cours...</p>
                    <p class="text-gray-500 text-sm">Nous calculons le meilleur tarif pour vous</p>
                </div>
            </div>

            <!-- Erreur -->
            <div id="error" class="p-6 bg-red-50 border border-red-200 rounded-xl mx-6 mb-6 hidden">
                <div class="flex items-start">
                    <i class="fas fa-exclamation-circle text-red-600 text-xl mr-3 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-red-700" id="errorTitle"></h4>
                        <p class="text-red-600 mt-1" id="errorMessage"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informations tarifaires -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-blue-600 text-2xl mb-3">
                    <i class="fas fa-boxes"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Calcul intelligent</h4>
                <p class="text-gray-600">Tarif ajusté selon le volume et la distance</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-green-600 text-2xl mb-3">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Tarif dégressif</h4>
                <p class="text-gray-600">Meilleur prix pour les longues distances</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="text-purple-600 text-2xl mb-3">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Assurance incluse</h4>
                <p class="text-gray-600">Tous vos colis sont assurés jusqu'à 2300€</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('deliveryForm');
            const results = document.getElementById('results');
            const loader = document.getElementById('loader');
            const errorDiv = document.getElementById('error');
            const calculateBtn = document.getElementById('calculateBtn');
            const confirmBtn = document.getElementById('confirmBtn');
            const capacitySection = document.getElementById('capacitySection');
            const capacityBar = document.getElementById('capacityBar');
            const capacityPercent = document.getElementById('capacityPercent');
            const capacityWarning = document.getElementById('capacityWarning');
            const totalParcelsEl = document.getElementById('totalParcels');

            // Capacités des camionnettes
            const vanCapacities = {
                'small': 20,
                'large': 50
            };

            // Volumes des colis
            const parcelVolumes = {
                'small': 1,
                'medium': 2,
                'large': 4
            };

            // Gestion des options camionnette
            const vanOptions = document.querySelectorAll('.van-option');
            vanOptions.forEach(option => {
                const input = option.querySelector('input[type="radio"]');
                const container = option.querySelector('div');

                input.addEventListener('change', function() {
                    vanOptions.forEach(opt => {
                        opt.querySelector('div').classList.remove('selected',
                            'border-blue-500', 'border-2');
                        opt.querySelector('div').classList.add('border-gray-300');
                    });

                    if (this.checked) {
                        container.classList.add('selected', 'border-blue-500', 'border-2');
                        container.classList.remove('border-gray-300');
                        updateCapacityBar();
                    }
                });
            });

            // Gestion des boutons +/-
            document.querySelectorAll('.plus-btn, .minus-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.getAttribute('data-type');
                    const input = document.getElementById(`${type}_parcels`);
                    const isPlus = this.classList.contains('plus-btn');

                    let value = parseInt(input.value);
                    if (isPlus && value < 100) {
                        value++;
                    } else if (!isPlus && value > 0) {
                        value--;
                    }

                    input.value = value;
                    updateTotalParcels();
                    updateCapacityBar();
                });
            });

            // Mettre à jour le total des colis
            function updateTotalParcels() {
                const small = parseInt(document.getElementById('small_parcels').value) || 0;
                const medium = parseInt(document.getElementById('medium_parcels').value) || 0;
                const large = parseInt(document.getElementById('large_parcels').value) || 0;

                const total = small + medium + large;
                totalParcelsEl.textContent = `Total : ${total} colis`;
            }

            // Mettre à jour la barre de capacité
            function updateCapacityBar() {
                const vanType = document.querySelector('input[name="van_type"]:checked').value;
                const capacity = vanCapacities[vanType];

                const small = parseInt(document.getElementById('small_parcels').value) || 0;
                const medium = parseInt(document.getElementById('medium_parcels').value) || 0;
                const large = parseInt(document.getElementById('large_parcels').value) || 0;

                const totalVolume = (small * parcelVolumes.small) +
                    (medium * parcelVolumes.medium) +
                    (large * parcelVolumes.large);

                const percent = Math.min(100, (totalVolume / capacity) * 100);

                // Afficher/masquer la section capacité
                if (small > 0 || medium > 0 || large > 0) {
                    capacitySection.classList.remove('hidden');
                } else {
                    capacitySection.classList.add('hidden');
                }

                // Mettre à jour la barre
                capacityBar.style.width = `${percent}%`;
                capacityPercent.textContent = `${Math.round(percent)}%`;

                // Changer la couleur selon le pourcentage
                capacityBar.className = 'h-full';
                if (percent <= 50) {
                    capacityBar.classList.add('capacity-low');
                } else if (percent <= 80) {
                    capacityBar.classList.add('capacity-medium');
                } else {
                    capacityBar.classList.add('capacity-high');
                }

                // Afficher l'avertissement si nécessaire
                if (percent > 80) {
                    capacityWarning.classList.remove('hidden');
                } else {
                    capacityWarning.classList.add('hidden');
                }
            }

            // Soumission du formulaire
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Masquer les résultats et erreurs précédentes
                results.classList.add('hidden');
                errorDiv.classList.add('hidden');

                // Afficher le loader
                loader.classList.remove('hidden');
                calculateBtn.disabled = true;
                calculateBtn.innerHTML =
                    '<i class="fas fa-spinner fa-spin mr-2"></i>CALCUL EN COURS...';

                // Préparer les données
                const formData = new FormData(form);
                const data = {
                    from: formData.get('from'),
                    to: formData.get('to'),
                    van_type: formData.get('van_type'),
                    small_parcels: parseInt(formData.get('small_parcels')) || 0,
                    medium_parcels: parseInt(formData.get('medium_parcels')) || 0,
                    large_parcels: parseInt(formData.get('large_parcels')) || 0
                };

                try {
                    const response = await fetch('{{ route('delivery.calculate') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                                .value,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    // Masquer le loader
                    loader.classList.add('hidden');
                    calculateBtn.disabled = false;
                    calculateBtn.innerHTML = '<i class="fas fa-calculator mr-2"></i>CALCULER LE TARIF';

                    if (result.success) {
                        // Afficher les résultats
                        document.getElementById('distanceResult').textContent = result.distance + ' km';
                        document.getElementById('timeResult').textContent = result.estimated_time +
                            ' min';
                        document.getElementById('priceResult').textContent = result.formatted_price;

                        // Détails de la camionnette
                        const vanTypeText = result.van_type === 'small' ? 'Camionnette S' :
                            'Camionnette L';
                        document.getElementById('vanTypeResult').textContent = vanTypeText;
                        document.getElementById('capacityUsed').textContent =
                            `${result.parcel_summary.total_volume}/${result.parcel_summary.capacity} unités (${result.volume_used_percent}%)`;

                        // Détails des colis
                        const parcelDetailsEl = document.getElementById('parcelDetails');
                        const parcels = result.parcel_summary.parcel_details;

                        parcelDetailsEl.innerHTML = `
                            <div class="flex justify-between">
                                <span>Petits colis :</span>
                                <span class="font-medium">${parcels.small.count} × 1 unité</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Colis moyens :</span>
                                <span class="font-medium">${parcels.medium.count} × 2 unités</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Grands colis :</span>
                                <span class="font-medium">${parcels.large.count} × 4 unités</span>
                            </div>
                            <div class="border-t border-gray-300 pt-2 mt-2">
                                <div class="flex justify-between font-bold">
                                    <span>Volume total :</span>
                                    <span>${result.parcel_summary.total_volume} unités</span>
                                </div>
                            </div>
                        `;

                        // Afficher les résultats
                        results.classList.remove('hidden');

                        // Scroll vers les résultats
                        results.scrollIntoView({
                            behavior: 'smooth'
                        });
                    } else {
                        // Afficher l'erreur
                        document.getElementById('errorTitle').textContent = 'Erreur de calcul';
                        document.getElementById('errorMessage').textContent = result.message || result
                            .details || 'Une erreur est survenue';
                        errorDiv.classList.remove('hidden');
                    }

                } catch (error) {
                    // Masquer le loader
                    loader.classList.add('hidden');
                    calculateBtn.disabled = false;
                    calculateBtn.innerHTML = '<i class="fas fa-calculator mr-2"></i>CALCULER LE TARIF';

                    // Afficher l'erreur
                    document.getElementById('errorTitle').textContent = 'Erreur réseau';
                    document.getElementById('errorMessage').textContent =
                        'Impossible de contacter le serveur. Vérifiez votre connexion.';
                    errorDiv.classList.remove('hidden');
                    console.error('Error:', error);
                }
            });

            // Pré-remplir avec des exemples
            document.getElementById('from').value = 'Rue de la Loi 16, 1000 Bruxelles';
            document.getElementById('to').value = 'Avenue Louise 250, 1050 Bruxelles';

            // Initialiser
            updateTotalParcels();
            updateCapacityBar();

            // Bouton de confirmation
            confirmBtn.addEventListener('click', function() {
                if (confirm(
                        'Souhaitez-vous confirmer cette commande ? Vous serez redirigé vers le paiement.'
                    )) {
                    // Ici, rediriger vers le paiement
                    alert('Redirection vers le paiement...');
                    // window.location.href = '/checkout';
                }
            });
        });
    </script>
</body>

</html>
