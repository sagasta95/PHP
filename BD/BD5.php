<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);
if($con===false){
    die(print_r(sqlsrv_errors(),true));
}

$sql = "INSERT INTO prueba (data, id) VALUES (?,?); SELECT * FROM prueba;";
$params = array("algunos datos", 1);
$cursor = sqlsrv_query($con, $sql, $params);

if($cursor === false){
	die(print_r(sqlsrv_errors(),true));
}

echo "Filas afectadas: " . sqlsrv_rows_affected($cursor) . "<br>";

$siguienteResultado = sqlsrv_next_result($cursor);
if($siguienteResultado) {
    while($fila = sqlsrv_fetch_array($cursor, SQLSRV_FETCH_ASSOC)) {
        echo $fila['id'].": ".$fila['data']."<br>";
    }
}elseif(is_null($siguienteResultado)) {
    echo "No hay mas resultados.<br>"    ;
}else {
    die(print_r(sqlsrv_errors(), true));
}
?>
