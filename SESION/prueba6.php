<?php
if(!isset($_GET['sesion'])){
    $sesion = sha1(uniqid());
    $fecha = date('\e\l s/m/Y a las H:i:s');
    $mensaje = "Nueva sesion: " . $sesion . " - " . $fecha;
}
else{
    $sesion = $_GET['sesion'];
    $fecha = $_GET['fecha'];
    $mensaje = "Sesion ya iniciada: " . $sesion . " - " . $fecha;
}
$url = "?sesion=" . $sesion . "&fecha=" . rawurlencode($fecha);
$actual = "Hoy es el dia " . date('d/m/Y') . ". Son las " . date('H:i:s');
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <b>Pagaina 1 - <?= $actual; ?></b><br>
            <?= $mensaje; ?><br>
            <a href="prueba6.1.php<?php echo $url ?>">Pagina 2</a>
        </div>
    </body>
</html>
