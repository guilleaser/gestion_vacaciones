<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/calendario.css">
    <?php require '../php/calendario_salida.php'; ?>
    <title>Calendario</title>
</head>

<body>
    <div>
        <h1>Vacaciones</h1>
        <div>
            <form action="../php/calendario_salida.php" method="POST">
                <select name="transporte">
                    <?php echo aniosSeleccionables() ?>
                </select>
            </form>
        </div>
        <div>
            <table>
                <tr>
                    <th>Empleado</th>
                    <th>Motivo</th>
                    <th>Día inicio</th>
                    <th>Día final</th>
                    <th>Días totales</th>
                    <th>Acumulados</th>
                </tr>
                <?php echo tablaCalendario() ?>
            </table>
            <div>
                <h3>Estadisticas mensuales</h3>
                <table>
                    <tr>
                        <th>Dias de Baja</th>
                        <th>Días de trabajo</th>
                        <th>Días de vacaciones</th>
                        <th>Días de enfermedad</th>
                        <th>Medio día</th>
                        <th>Otros</th>
                    </tr>
                    <tr>
                        <?php echo estadisticasCalendario() ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>