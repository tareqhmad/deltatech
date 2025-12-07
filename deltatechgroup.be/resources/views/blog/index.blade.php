<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Delta Tech Express</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }

        .article-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .category-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .read-time::before {
            content: "⏱️";
            margin-right: 5px;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="{{ route('blog.index') }}" class="text-2xl font-bold text-blue-700">
                        <i class="fas fa-truck-moving mr-2"></i>Delta Express
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('blog.index') }}"
                        class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium">À propos</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    <a href="{{ route('delivery.form') }}"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 font-medium transition-all">
                        <i class="fas fa-calculator mr-2"></i>Calculateur
                    </a>
                </div>
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-gradient text-white">
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Bienvenue chez Delta Express
                </h1>
                <p class="text-xl mb-8 opacity-90">
                    Découvrez comment nous révolutionnons la livraison en Belgique avec transparence, innovation et
                    service client exceptionnel.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('delivery.form') }}"
                        class="bg-white text-blue-700 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-all">
                        <i class="fas fa-bolt mr-2"></i>Calculer un prix
                    </a>

                    <a href="tel:+32497333292"
                        class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-blue-700 transition-all">
                        <i class="fas fa-phone mr-2"></i>Appelez-nous
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Présentation Entreprise -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">
                        Votre partenaire de confiance pour toutes vos livraisons
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-4">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Fiabilité absolue</h3>
                                <p class="text-gray-600">Plus de 1000 livraisons réussies avec un taux de satisfaction
                                    de 98%</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 text-green-600 p-2 rounded-lg mr-4">
                                <i class="fas fa-euro-sign"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Transparence des prix</h3>
                                <p class="text-gray-600">Notre calculateur vous montre exactement le prix final, sans
                                    surprises</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-4">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Engagement écologique</h3>
                                <p class="text-gray-600">10% de notre flotte est électrique, et nous compensons notre
                                    empreinte carbone</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="text-blue-600 font-bold hover:text-blue-800">
                            En savoir plus sur nous <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Camionnette de livraison" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-lg">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">98%</div>
                            <div class="text-gray-600">Clients satisfaits</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Calculateur -->
    <div class="mt-16 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 text-center text-white">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold mb-4">Prêt à découvrir votre tarif ?</h3>
            <p class="mb-6 opacity-90">
                Utilisez notre calculateur intelligent pour obtenir un prix précis en fonction de vos besoins
                spécifiques.
            </p>
            <a href="{{ route('delivery.form') }}"
                class="inline-block bg-white text-blue-700 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-all">
                <i class="fas fa-calculator mr-2"></i>Essayer le calculateur gratuitement
            </a>
        </div>
    </div>
    </div>
    </section>

    <!-- Avantages -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pourquoi Nous Choisir ?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Les avantages qui font la différence pour nos clients.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div
                        class="bg-blue-100 text-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-euro-sign text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Prix Compétitifs</h3>
                    <p class="text-gray-600">Jusqu'à 30% moins cher que nos concurrents pour les mêmes services</p>
                </div>

                <div class="text-center">
                    <div
                        class="bg-green-100 text-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bolt text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Rapidité</h3>
                    <p class="text-gray-600">Livraison express disponible en moins de 2 heures dans les grandes villes
                    </p>
                </div>

                <div class="text-center">
                    <div
                        class="bg-purple-100 text-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Sécurité</h3>
                    <p class="text-gray-600">Tous les colis assurés jusqu'à 5 000€ sans frais supplémentaires</p>
                </div>

                <div class="text-center">
                    <div
                        class="bg-orange-100 text-orange-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Support 7j/7</h3>
                    <p class="text-gray-600">Notre équipe est disponible pour vous aider à tout moment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-truck-moving mr-2"></i>Delta Express
                    </h3>
                    <p class="text-gray-400">
                        Votre partenaire de confiance pour des livraisons rapides, sécurisées et économiques en
                        Belgique.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white">Accueil</a>
                        </li>
                        <li><a href="{{ route('delivery.form') }}"
                                class="text-gray-400 hover:text-white">Calculateur</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">À propos</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Livraison express</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Déménagement</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Livraison B2B</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Service de messagerie</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-3"></i> +32 2 123 45 67
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-3"></i> info@deltatechgroup.be
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-3"></i> Avenue de la Librté 175, 1000 Bruxelles
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Delta Express. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Script pour menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button[class*="md:hidden"]');
            const navMenu = document.querySelector('.hidden.md\\:flex');

            if (menuButton) {
                menuButton.addEventListener('click', function() {
                    navMenu.classList.toggle('hidden');
                    navMenu.classList.toggle('flex');
                    navMenu.classList.toggle('flex-col');
                    navMenu.classList.toggle('absolute');
                    navMenu.classList.toggle('top-16');
                    navMenu.classList.toggle('left-0');
                    navMenu.classList.toggle('right-0');
                    navMenu.classList.toggle('bg-white');
                    navMenu.classList.toggle('p-4');
                    navMenu.classList.toggle('shadow-lg');
                    navMenu.classList.toggle('space-y-4');
                });
            }
        });
    </script>
</body>

</html>
