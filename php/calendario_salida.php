<?php
include '../bd/conexion.php';

// Listado de años seleccionables
function aniosSeleccionables($conn) {
    $sql="SELECT DISTINCT YEAR(fecha_inicio) AS anio FROM vacaciones;";
    $result=$conn->query($sql);
    while ($anio = $result->fetch(PDO:: FETCH_ASSOC)){
        echo '<option>'.$anio['anio'].'</option>';
    }
}

// Funcion para la salida del calendario
function tablaCalendario($conn) {
    $sql="SELECT *, 
    DATEDIFF(vacaciones.fecha_fin, vacaciones.fecha_inicio) AS dias_totales, 
    SUM(SUM(DATEDIFF(vacaciones.fecha_fin, vacaciones.fecha_inicio))) 
    OVER ( PARTITION BY vacaciones.id_vacacion ORDER BY vacaciones.fecha_fin ASC) AS acumulado 
    FROM vacaciones 
    INNER JOIN empleados 
    ON vacaciones.id_empleado = empleados.id_empleado;";
    $result=$conn->query($sql);
    while ($vacacaiones = $result->fetch(PDO:: FETCH_ASSOC)){
        echo'<td>'.$vacacaiones['nombre'].'</td>';
        echo'<td>'.$vacacaiones['motivo'].'</td>';
        echo'<td>'.$vacacaiones['fecha_inicio'].'</td>';
        echo'<td>'.$vacacaiones['fecha_fin'].'</td>';
        echo'<td>'.$vacacaiones['dias_totales'].'</td>';
        echo'<td>'.$vacacaiones['acumulado'].'</td>';
    }
}

// Funcion salida estadisticas
function estadisticasCalendario($conn){
    $sql="SELECT DISTINCT YEAR(fecha_inicio) AS anio FROM vacaciones;";
    $result=$conn->query($sql);
    while ($anio = $result->fetch(PDO:: FETCH_ASSOC)){
        echo'<tr><td>Empleado</td>';
        echo'<td>Motivo</td>';
        echo'<td>Día inicio</td>';
        echo'<td>Día final</td>';
        echo'<td>Días totales</td>';
        echo'<td>Acumulados</td></tr>';
    }


}



?>