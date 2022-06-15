<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Usuario</title>
</head>

<body>
    <!-- Formulario Login -->
    <div>
        <div>
            <div id="usuarioTexto">
                <h1>Bienvenido <br><?php if (isset($_SESSION['usuario']) ? $dato = $_SESSION['usuario'] : $dato = 'Empleado') echo $dato; ?>.</h1>
                <span>Selecciona la opción que quieres realizar.</span>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1><?php if (isset($_SESSION['usuario']) ? $dato = $_SESSION['usuario'] : $dato = 'Empleado') echo $dato; ?></h1>
                    <p>Registra tus datos para comenzar el viaje con nosotros</p>
                    <form action="php/crud.php" id="formUser" method="POST">
                        <!-- Salida en base al paerfil del registro usuario_opciones.php -->
                        <?php require 'php/usuario_opciones.php'; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>



</body>

</html>