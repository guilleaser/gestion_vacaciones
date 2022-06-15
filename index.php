<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Home</title>
</head>

<body>
    <!-- FOrmulario Login -->
    <h2>Bienvenido al programador de vacaciones.</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="usuario.php" id="formLogin" method="POST">
                <h1>Sign in</h1>
                <span>Ingresa con el correo electrónico.</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">¿Olvidaste la contraseña?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hola,</h1>
                    <p>Registra tus datos para comenzar el viaje con nosotros</p>
                    <form action="registro.php" method="POST">
                        <button type="submit" class="ghost" id="signUp">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>



</body>

</html>