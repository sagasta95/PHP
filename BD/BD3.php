<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);

if($con === false){
    die(print_r(sqlsrv_errors(), true));
}

$sql = "update Distribucion set cantidad = ? where CodCoche = ?";
$params = array(4, "0006");
$cursor = sqlsrv_query($con, $sql, $params);
$filasAfectadas = sqlsrv_rows_affected($cursor);
if($filasAfectadas === false)
    die(print_r(sqlsrv_errors(), true));
elseif($filasAfectadas == -1)
    echo "No hay informacion disponible<br>";
else
    echo $filasAfectadas . " filas actualizadas<br>";
    

