<?php
$idAnterior = session_id();
session_start();
$idPosterior = session_id();
$hora = date("H:i:s");
echo "Hora: " . $hora . "<br>";
echo "Antes: " . $idAnterior . "<br>";
echo "Despues: " . $idPosterior . "<br>";