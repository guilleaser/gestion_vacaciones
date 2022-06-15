<?php
require '../bd/conexion.php';
// Listado de años seleccionables
function aniosSeleccionables() {
    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE dni='".$_REQUEST['identificador']."';";
    $result=$conn->query($sql);
    while ($anio = $result->fetch(PDO:: FETCH_ASSOC)){
        echo '<option>'.$anio.'</option>';
    }
}

// Funcion para la salida del calendario
function tablaCalendario() {
    echo'<td>Empleado</td>';
    echo'<td>Motivo</td>';
    echo'<td>Día inicio</td>';
    echo'<td>Día final</td>';
    echo'<td>Días totales</td>';
    echo'<td>Acumulados</td>';
}

// Funcion salida estadisticas
function estadisticasCalendario(){



    echo'<td>Dias de Baja</td>';
    echo'<td>Días de trabajo</td>';
    echo'<td>Días de vacaciones</td>';
    echo'<td>Días de enfermedad</td>';
    echo'<td>Medio día</td>';
    echo'<td>Otros</td>';
}



?>