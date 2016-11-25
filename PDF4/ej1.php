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

//******************Ejercicio 1*******************
//Realizamos 1 unica inserccion
/*
$sql = "INSERT INTO Paciente (IdPaciente, NumSS, Nombre, Apellido, FNacimiento, Genero) VALUES (?, ?, ?, ?, ?, ?)";
$params = array(1, 100, "Juan", "Martinez", "25/05/1993" , 0);

$stmt = sqlsrv_query( $con, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
} else {
    echo 'Inserccion correcta.<br>';
}
*/
//------------------------------------------------
//Meter mas de 1 dato seguido

$sql = "INSERT INTO Paciente (IdPaciente, NumSS, Nombre, Apellido, FNacimiento, Genero) VALUES (?, ?, ?, ?, ?, ?)";

$params = array(
    0 => array( 1, "1234567809", "Luis", "Gómez Gil", "03/05/1993", 0),
    1 => array( 2, "2134560849", "María", "Pérez Sanz", "08/03/1990", 1),
    2 => array( 3, "5214893204", "Pedro", "Sáenz Rey", "11/06/1992", 0),
    3 => array( 4, "2458268421", "Luisa", "Ruiz Río", "29/05/1994", 1),
    4 => array( 5, "4521889732", "Petra", "Roa Abad", "11/04/1983", 1),
    5 => array( 6, "2178495635", "Abel", "Lara Rico", "31/01/1985", 0),
    6 => array( 7, "2548682574", "Ana", "Lama Agar", "24/11/1999", 1),
    7 => array( 8, "8524697301", "Nuño", "Hera Rojo", "13/09/1991", 0)
);

foreach ($params as $value) {
    $stmt = sqlsrv_query($con, $sql, $value);
    if($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }    
}
 
//------------------------------------------------
//************************************************




