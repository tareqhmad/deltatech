<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Delta Express</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Navigation identique -->
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
                    <a href="{{ route('blog.index') }}#articles"
                        class="text-gray-700 hover:text-blue-600 font-medium">Blog</a>
                    <a href="{{ route('contact') }}" class="text-blue-600 font-medium">Contact</a>
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

    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Contactez-nous</h1>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Informations de contact</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1 mr-3"></i>
                            <div>
                                <h3 class="font-medium">Adresse</h3>
                                <p class="text-gray-600">Avenue de la liberé 175<br>1000 Bruxelles, Belgique</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-phone text-blue-600 mt-1 mr-3"></i>
                            <div>
                                <h3 class="font-medium">Téléphone</h3>
                                <p class="text-gray-600">+32 497 22 70 33</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-blue-600 mt-1 mr-3"></i>
                            <div>
                                <h3 class="font-medium">Email</h3>
                                <p class="text-gray-600">info@deltatechgroup.be</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-clock text-blue-600 mt-1 mr-3"></i>
                            <div>
                                <h3 class="font-medium">Horaires</h3>
                                <p class="text-gray-600">Lundi - Vendredi : 8h00 - 18h00<br>Samedi : 9h00 - 16h00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Formulaire de contact</h2>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Nom complet</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Message</label>
                            <textarea rows="4"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-medium">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
