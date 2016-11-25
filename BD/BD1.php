<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);

if($con === false){
    die(print_r(sqlsrv_errors(), true));
}

$sql = "update Distribucion set cantidad=? where CifConce='0002' and CodCoche=?";
$cantidad = 0;
$id = "";

$cursor = sqlsrv_prepare($con, $sql, array(&$cantidad, &$id));

if(!$cursor){
    die(print_r(sqlsrv_errors(), true()));
}
$cantidades = array('0006'=>20, '0008'=>7, '0009'=>15);

foreach ($cantidades as $id => $cantidad) {
    if(sqlsrv_execute($cursor)===false){
        die(print_r(sqlsrv_errors(), true));
    }
}
