<?php
$serverName = "C6PC11\sqlexpress";

$conectionInfo = array("Database"=>"Autos");
$con = sqlsrv_connect($serverName, $conectionInfo);
if($con===false){
    die(print_r(sqlsrv_errors(),true));
}

$sql = "UPDATE prueba SET data = ( ?) WHERE id = 100";

$datos = fopen("data://text/plain,[ Contenido largo aqui. ]", "r");
$params = array( &$datos);

$opciones = array("SendStreamParamsAtExec"=>0);
$cursor = sqlsrv_prepare( $con, $sql, $params, $opciones);

sqlsrv_execute($cursor);

$i =1;
while(sqlsrv_send_stream_data($cursor)){
    $i++;
}
echo "$i llamadas realizadas.";
?>
