<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Delta Express</title>
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

        .stat-card {
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation (identique au blog) -->
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
                    <a href="{{ route('about') }}" class="text-blue-600 font-medium">À propos</a>
                    <a href="{{ route('blog.index') }}#articles"
                        class="text-gray-700 hover:text-blue-600 font-medium">Blog</a>
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
                    Notre Histoire & Notre Mission
                </h1>
                <p class="text-xl opacity-90">
                    Depuis 2015, nous transformons la logistique en Belgique avec innovation et passion.
                </p>
            </div>
        </div>
    </header>

    <!-- Notre Histoire -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Notre Histoire</h2>
                    <p class="text-gray-600">
                        De l'idée à la réalité : comment nous avons construit le service de livraison le plus fiable de
                        Belgique.
                    </p>
                </div>

                <div class="space-y-8">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-blue-600 opacity-20">2015</div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Les Débuts</h3>
                            <p class="text-gray-600">
                                Fondée par Jean Dupont, Express Delivery commence avec une seule camionnette et une
                                vision claire : rendre les livraisons plus accessibles et transparentes pour tous.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-blue-600 opacity-20">2018</div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">L'Expansion</h3>
                            <p class="text-gray-600">
                                Avec l'arrivée de notre calculateur intelligent, nous doublons notre clientèle en un an.
                                Nous étendons nos services à toutes les grandes villes belges.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-blue-600 opacity-20">2022</div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">L'Innovation</h3>
                            <p class="text-gray-600">
                                Lancement de notre flotte électrique et développement d'une application mobile complète
                                pour le suivi en temps réel des livraisons.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-blue-600 opacity-20">2024</div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Aujourd'hui</h3>
                            <p class="text-gray-600">
                                Plus de 8 employés, une flotte de 6 camionnettes, et des milliers de clients
                                satisfaits. Notre mission continue : rendre chaque livraison plus simple, plus rapide et
                                plus écologique.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg stat-card text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">1000+</div>
                    <div class="text-gray-600">Livraisons réalisées</div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg stat-card text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">98%</div>
                    <div class="text-gray-600">Taux de satisfaction</div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg stat-card text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">6+</div>
                    <div class="text-gray-600">Camionnettes</div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg stat-card text-center">
                    <div class="text-4xl font-bold text-orange-600 mb-2">8+</div>
                    <div class="text-gray-600">Employés dédiés</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Valeurs -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nos Valeurs</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Les principes qui guident chacune de nos actions et décisions.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-8 rounded-xl border border-blue-100">
                    <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Transparence</h3>
                    <p class="text-gray-600">
                        Nous croyons en une communication claire et honnête. Nos prix sont transparents, nos délais
                        réalistes, et nos engagements tenus.
                    </p>
                </div>

                <div class="bg-green-50 p-8 rounded-xl border border-green-100">
                    <div
                        class="bg-green-100 text-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Durabilité</h3>
                    <p class="text-gray-600">
                        Nous nous engageons à réduire notre impact environnemental grâce à des pratiques écologiques et
                        des investissements dans des technologies vertes.
                    </p>
                </div>

                <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
                    <div
                        class="bg-purple-100 text-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Service Client</h3>
                    <p class="text-gray-600">
                        Notre priorité est votre satisfaction. Notre équipe de support est disponible 7j/7 pour répondre
                        à vos questions et résoudre vos problèmes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Calculateur -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700">
        <div class="container mx-auto px-4 text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Prêt à expérimenter notre service ?</h2>
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                Utilisez notre calculateur pour obtenir un prix transparent en fonction de vos besoins spécifiques.
            </p>
            <a href="{{ route('delivery.form') }}"
                class="inline-block bg-white text-blue-700 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-all text-lg">
                <i class="fas fa-calculator mr-2"></i>Accéder au calculateur
            </a>
        </div>
    </section>

    <!-- Footer (identique au blog) -->
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
                            <i class="fas fa-phone mr-3"></i> +32 497 22 70 33
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-3"></i> info@deltatechgroup.be
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-3"></i> Avenue de la liberté 175, 1080 Bruxelles
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Delta Express. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Script menu mobile
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
