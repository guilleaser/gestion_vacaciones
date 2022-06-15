<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/calendario.css">
    <?php require '../php/calendario_salida.php'; ?>
    <title>Calendario</title>
</head>

<body>
    <div id="tableEmpleados">
        <h1>Calendario</h1>
        <div >
            <form action="../php/calendario_salida.php" method="POST">
                <select name="transporte" id="optionYear">
                    <?php aniosSeleccionables($conn) ?>
                </select>
            </form>
        </div>
        <div>
            <table id="tablaSalida">
                <tr>
                    <th>Empleado</th>
                    <th>Motivo</th>
                    <th>Día inicio</th>
                    <th>Día final</th>
                    <th>Días totales</th>
                    <th>Acumulados</th>
                </tr>
                <?php echo tablaCalendario($conn) ?>
            </table>
            <div id="estadisticas">
                <h3>Estadisticas mensuales</h3>
                <table>
                    <tr>
                        <th>Dias de Baja</th>
                        <th>Días de vacaciones</th>
                        <th>Días de enfermedad</th>
                        <th>Medio día</th>
                        <th>Otros</th>
                    </tr>

                    <?php echo estadisticasCalendario($conn) ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>