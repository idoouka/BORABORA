<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #555;
        }

        .error-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .error-message {
            text-align: center;
        }

        .error-title {
            font-size: 6em;
            font-weight: bold;
            margin: 0;
        }

        .error-subtitle {
            font-size: 2em;
            margin: 0;
        }

        .error-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .error-btn:hover {
            background-color: #333;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        .error-icon {
            font-size: 10em;
            animation: bounce 1s ease infinite;
        }

        @media (max-width: 768px) {
            .error-title {
                font-size: 3em;
            }

            .error-subtitle {
                font-size: 1.5em;
            }

            .error-icon {
                font-size: 6em;
            }
        }
    </style>
</head>
<body>
<div class="error-container">
    <div class="error-message">
        <h1 class="error-title">404</h1>
        <p class="error-subtitle">Page Not Found</p>
        <div class="error-icon">&#x26D4;</div>
    </div>
</div>
<script>
    const icon = document.querySelector('.error-icon');
    icon.addEventListener('click', () => {
        icon.classList.toggle('animated');
    });
</script>
</body>
</html>
