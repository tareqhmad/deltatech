<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Special Message ❤️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #ffadad;
            --primary-dark: #ff8585;
            --paper: #ffffff;
        }

        body {
            background: linear-gradient(135deg, #fdf2f2 0%, #ffe5e5 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .envelope-wrapper {
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
            margin-bottom: 60px;
        }

        .envelope {
            position: relative;
            width: 350px;
            height: 230px;
            background-color: var(--primary);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .flap {
            position: absolute;
            top: 0;
            width: 0;
            height: 0;
            border-left: 175px solid transparent;
            border-right: 175px solid transparent;
            border-top: 130px solid var(--primary-dark);
            transform-origin: top;
            transition: transform 0.4s 0.4s ease;
            z-index: 30;
        }

        .envelope::before {
            content: "";
            position: absolute;
            z-index: 20;
            width: 0;
            height: 0;
            border-left: 175px solid transparent;
            border-right: 175px solid transparent;
            border-bottom: 115px solid #ffc2c2;
            bottom: 0;
        }

        .envelope::after {
            content: "";
            position: absolute;
            z-index: 20;
            width: 350px;
            height: 115px;
            background-color: var(--primary);
            bottom: 0;
        }

        .letter {
            width: 90%;
            max-width: 420px;
            background: var(--paper);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
            pointer-events: none;
            margin-top: 30px;
        }

        .envelope-wrapper.open .flap {
            transform: rotateX(180deg);
        }

        .envelope-wrapper.open+.letter {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .cursive {
            font-family: 'Dancing Script', cursive;
        }

        .hint {
            text-align: center;
            color: #ff8585;
            font-weight: 500;
            margin-top: 20px;
            transition: opacity 0.3s;
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 10px;
            }

            .envelope {
                width: 280px;
                height: 180px;
            }

            .flap {
                border-left: 140px solid transparent;
                border-right: 140px solid transparent;
                border-top: 100px solid var(--primary-dark);
            }

            .envelope::before {
                border-left: 140px solid transparent;
                border-right: 140px solid transparent;
            }

            .envelope::after {
                width: 280px;
            }

            .letter {
                padding: 20px;
                max-width: 320px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="envelope-wrapper" id="envelopeWrapper">
            <div class="flap"></div>
            <div class="envelope"></div>
            <p class="hint animate-pulse" id="hint">Click to open 💌</p>
        </div>

        <div class="letter" id="letter">
            <h1 class="cursive text-3xl text-pink-600 mb-5 text-center">My Dearest,</h1>

            <div class="text-sm md:text-base text-gray-700 space-y-3 leading-relaxed">
                <p>
                    My baby girl, i thank God every single day for the blessing of meeting you in <strong>Riga</strong>.
                </p>

                <p>
                    To me, you are the most beautiful woman in the world.
                    In my eyes, no one compares to you.
                </p>

                <p>
                    I want to make you the happiest woman alive and give you all the love you deserve.
                </p>

                <p>
                    I am truly sorry if my jokes ever hurt you.
                    Please know that I would never want to cause you pain.
                </p>

                <p class="cursive text-2xl text-pink-500 pt-3 text-center">
                    Happy Valentine's Day ❤️
                </p>
            </div>
        </div>
    </div>

    <script>
        const wrapper = document.getElementById('envelopeWrapper');
        const hint = document.getElementById('hint');

        wrapper.addEventListener('click', () => {
            wrapper.classList.toggle('open');
            hint.style.opacity = wrapper.classList.contains('open') ? '0' : '1';
        });
    </script>
</body>

</html>
