<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);

if($con === false){
    die(print_r(sqlsrv_errors(), true));
}


$cursor = sqlsrv_query($con, "select * from Coche");

if($cursor){
    $filas = sqlsrv_has_rows($cursor);
    if($filas === true)
        echo "Hay filas. <br>";
    else 
        echo "No hay filas <br>";
}
