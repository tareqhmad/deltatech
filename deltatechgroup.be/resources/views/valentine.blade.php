<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be My Valentine? ❤️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #fff5f7;
        }

        .btn-transition {
            transition: all 0.2s ease-out;
        }
    </style>
</head>

<body class="h-screen flex flex-col items-center justify-center overflow-hidden">

    <div id="main-card" class="text-center p-8 bg-white rounded-3xl shadow-xl border border-pink-100">
        <h1 id="question" class="text-4xl font-bold text-pink-600 mb-8">
            Would you like to be my Valentine? 🌹
        </h1>

        <div class="flex items-center justify-center gap-6" id="button-container">
            <button id="yesBtn"
                class="btn-transition bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-full shadow-lg">
                Oui !
            </button>

            <button id="noBtn"
                class="btn-transition bg-gray-400 text-white font-bold py-3 px-8 rounded-full shadow-lg">
                Non
            </button>
        </div>
    </div>

    <script>
        const noBtn = document.getElementById('noBtn');
        const yesBtn = document.getElementById('yesBtn');
        let yesScale = 1;

        // Fonction pour déplacer le bouton "Non"
        noBtn.addEventListener('mouseover', () => {
            // Calcul de positions aléatoires
            const x = Math.random() * (window.innerWidth - noBtn.offsetWidth);
            const y = Math.random() * (window.innerHeight - noBtn.offsetHeight);

            noBtn.style.position = 'absolute';
            noBtn.style.left = `${x}px`;
            noBtn.style.top = `${y}px`;

            // Agrandir le bouton "Oui" à chaque tentative sur "Non"
            yesScale += 0.4;
            yesBtn.style.transform = `scale(${yesScale})`;
        });

        // Action quand on clique sur "Oui"
        yesBtn.addEventListener('click', () => {
            document.getElementById('main-card').innerHTML = `
                <h1 class="text-5xl mb-4">💖</h1>
                <h1 class="text-4xl font-bold text-pink-600">I knew it! Je t'aime !</h1>
                <p class="mt-4 text-gray-500">Get ready for a magical evening...</p>
            `;
        });
    </script>
</body>

</html>
