<?php

//Conexion a la base de datos, asegurarse del serverName y el nombre de la BD
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database" => "Hospital");
$con = sqlsrv_connect($serverName, $conectionInfo);
if ($con === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo 'Conexion exitosa.<br>';
}
//------------------------------------------------
//******************Ejercicio 4*******************
$sql = "SELECT * FROM Paciente WHERE Nombre like '%a%'";

$cursor = sqlsrv_query($con, $sql);
if ($cursor) {
    $rows = sqlsrv_has_rows($cursor);
    if ($rows === true) {
        while ($fila = sqlsrv_fetch_array($cursor, SQLSRV_FETCH_ASSOC)) {
            echo $fila['IdPaciente'], ", " . $fila['NumSS'], " ," . $fila['Nombre'] . " " . $fila['Apellido'] . ", " . date_format($fila['FNacimiento'], "Y-m-d") . ", " . genero($fila['Genero']) . "<br>";
        }
    }
}

//Mostramos Masculino o Femenino si es 0 o 1
function genero($valor) {
    if ($valor == 0) {
        return "Masculino";
    } else {
        return "Femenino";
    }
}

//------------------------------------------------
//************************************************
