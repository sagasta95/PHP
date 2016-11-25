<?php
//Conexion a la base de datos, asegurarse del serverName y el nombre de la BD
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Hospital");
$con = sqlsrv_connect($serverName, $conectionInfo);
if($con===false){
    die(print_r(sqlsrv_errors(),true));
} else {
    echo 'Conexion exitosa.<br>';
}
//------------------------------------------------

//******************Ejercicio 3*******************
$sql = "UPDATE Paciente SET Nombre=concat('J',LOWER(Nombre))WHERE Nombre like 'A%'";

$cursor = sqlsrv_query($con, $sql);
if( $cursor === false ) {
     die( print_r( sqlsrv_errors(), true));
} else {
    echo 'Inserccion correcta.<br>';
}
//************************************************

