<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);

if($con === false){
    die(print_r(sqlsrv_errors(), true));
}

$sql = "select Pvp from Venta";
$cursor = sqlsrc_prepare($con, $sql);

if($cursor === false){
    die(print_r(sqlsrvc));
}

