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

//******************Ejercicio 2*******************

$sql = "SELECT * FROM Paciente";

$cursor = sqlsrv_query($con, $sql);
if ($cursor === false) {
    dis(print_r(sqlsrv_errors(), true));
}
//Mostramos Masculino o Femenino si es 0 o 1
function genero ($valor) {
    if ($valor == 0) {
    return "Masculino";
    } else {
    return "Femenino";
    }
}
//Mostramos de forma numerica
/*
while($fila=sqlsrv_fetch_array($cursor, SQLSRV_FETCH_NUMERIC)){
    echo $fila[0].", ".$fila[1]." ,".$fila[2]." ".$fila[3].", ".date_format($fila[4],"Y-m-d").", ".genero($fila[5])."<br>";
} 
 */
//------------------------------------------------

//Mostramos de forma asociativa

while($fila=sqlsrv_fetch_array($cursor, SQLSRV_FETCH_ASSOC)){
    echo $fila['IdPaciente'],", ".$fila['NumSS']," ,".$fila['Nombre']." ".$fila['Apellido'].", ".date_format($fila['FNacimiento'],"Y-m-d").", ".genero($fila['Genero'])."<br>";
} 

//------------------------------------------------
//************************************************

