<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);
if($con===false){
    die(print_r(sqlsrv_errors(),true));
}

if(sqlsrv_begin_transaction($con) ===false){
    die(print_r(sqlsrv_errors(), true));
}

$cif = '0004'; $dni= '0009'; $coche ='0014';
$color = 'ROJO'; $pvp=4515;

$sql1 = "INSERT INTO Venta (CifConce, Dni, CodCoche, Color, Pvp) VALUES (?, ?, ?, ?, ?)";

$params1 = array($cif, $dni, $coche, $color, $pvp);
$cursor1 = sqlsrv_query($con, $sql1, $params1);

$sql2 = "UPDATE Distribucion SET Cantidad = (Cantidad -1) WHERE CifConce = ? AND CodCoche = ?";
$params2 = array($cif, $coche);
$cursor2 = sqlsrv_query($con, $sql2, $params2);

if($cursor1 && $cursor2) {
    sqlsrv_commit($con);
    echo 'Transaccion consolidada.<br>';
} else {
    sqlsrv_rollback($con);
    echo 'Transaccion revertida.<br>';
}
?>