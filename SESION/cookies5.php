<?php
if (!isset($_COOKIE['sesion'])){
    $sesion = sha1(uniqid(rand()));
    $fecha = date('\e\l d/m/Y a las H:i:s');
    setcookie('sesion',$sesion);
    setcookie('fecha',$fecha);
    $mensaje = "Nueva sesion: $sesion - $fecha";
} else {
    $sesion = $_COOKIE['sesion'];
    $fecha = $_COOKIE['fecha'];
    $mensaje = "Sesion ya iniciada: $sesion - $fecha";
}

$actual = 'Hoy es el dia ' . date('d/m/Y').' y son las' . date('H:i:s');
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pagina 2</title>
    </head>
    <body>
        <div>
            <b>Pagina 2 - <?= $actual; ?></b><br>
            <?= $mensaje; ?>
            <a href="cookies4.php">Pagina 1</a>
        </div>
    </body>
</html>