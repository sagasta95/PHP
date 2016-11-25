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
//******************Ejercicio 5*******************
$sql = "SELECT * FROM Paciente";

$cursor = sqlsrv_query($con, $sql);

foreach(sqlsrv_field_metadata($cursor) as $fieldMetadata ) {
    foreach( $fieldMetadata as $name => $value) {
       echo "$name: $value<br />";
    }
      echo "<br />";
}
//------------------------------------------------
//************************************************