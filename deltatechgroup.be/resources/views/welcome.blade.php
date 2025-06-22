<!DOCTYPE html>
<html>

<head>
    <title>DeltaTechGroup - Coming Soon</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%);
            font-family: 'Nunito', sans-serif;
            flex-direction: column;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 2rem;
        }

        .message {
            font-size: 2rem;
            color: #1e40af;
            margin-bottom: 1.5rem;
        }

        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <img src={{ url('/image/delta_logo.png') }} alt="Logo" class="logo">
    <div class="message">Coming Soon</div>
    <div class="loader"></div>
</body>

</html>
