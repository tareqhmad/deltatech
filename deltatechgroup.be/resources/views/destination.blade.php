<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pick Our Date ✈️</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .destination-card {
            transition: all 0.3s ease;
        }

        #rigaCard {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="bg-rose-50 min-h-screen flex flex-col items-center py-8 px-4 overflow-x-hidden">

    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3 text-center">
        Where should we go? 🌍
    </h1>

    <p class="text-base md:text-lg text-pink-500 mb-8 font-medium text-center">
        Pick your favorite destination for our romantic getaway!
    </p>

    <div id="cardsContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl w-full">

        <!-- Dubai -->
        <div id="dubaiCard"
            class="destination-card bg-white rounded-2xl shadow-lg overflow-hidden cursor-pointer border-2 border-transparent active:scale-95">
            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=500"
                class="h-40 md:h-48 w-full object-cover">
            <div class="p-4 md:p-6">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800">Dubai</h3>
                <p class="text-gray-500 mt-1 text-sm md:text-base">
                    Luxury, deserts, and magical nights.
                </p>
            </div>
        </div>

        <!-- Maldives -->
        <div id="maldivesCard"
            class="destination-card bg-white rounded-2xl shadow-lg overflow-hidden cursor-pointer border-2 border-transparent active:scale-95">
            <img src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=500"
                class="h-40 md:h-48 w-full object-cover">
            <div class="p-4 md:p-6">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800">The Maldives</h3>
                <p class="text-gray-500 mt-1 text-sm md:text-base">
                    Crystal clear water and pure relaxation.
                </p>
            </div>
        </div>

        <!-- Riga -->
        <div id="rigaCard"
            class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-pink-300 cursor-pointer active:scale-95">
            <img src="https://images.unsplash.com/photo-1552332386-f8dd00dc2f85?auto=format&fit=crop&w=500"
                class="h-40 md:h-48 w-full object-cover grayscale">
            <div class="p-4 md:p-6">
                <h3 class="text-xl md:text-2xl font-bold text-gray-600">Riga</h3>
                <p class="text-gray-400 mt-1 text-sm md:text-base">
                    A cozy winter fairytale ❄️
                </p>
            </div>
        </div>

    </div>

    <!-- Success Message -->
    <div id="successMessage"
        class="hidden mt-10 p-6 md:p-8 bg-green-100 border-2 border-green-500 rounded-2xl text-center max-w-md">
        <h2 class="text-2xl md:text-3xl font-bold text-green-700">
            Perfect Choice! 😍
        </h2>
        <p class="text-lg md:text-xl text-green-600 mt-2">
            Pack your bags! We are going to RIGA! ❄️🧥
        </p>
    </div>

    <script>
        const dubai = document.getElementById('dubaiCard');
        const maldives = document.getElementById('maldivesCard');
        const riga = document.getElementById('rigaCard');

        let rigaScale = 1;

        // Petite fonction pour faire "glisser" légèrement la carte
        function playfulMove(element) {
            element.style.transform = "translateX(20px)";
            setTimeout(() => {
                element.style.transform = "translateX(0px)";
            }, 250);

            rigaScale += 0.1;
            riga.style.transform = `scale(${rigaScale})`;
        }

        // Compatible souris + tactile
        dubai.addEventListener('click', () => playfulMove(dubai));
        maldives.addEventListener('click', () => playfulMove(maldives));

        // Riga valide le choix
        riga.addEventListener('click', () => {
            document.getElementById('cardsContainer').classList.add('hidden');
            document.getElementById('successMessage').classList.remove('hidden');
        });
    </script>

</body>

</html>
