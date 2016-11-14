<?php

if (!isset($_POST['sesion'])) {
    $sesion = sha1(uniqid());
    $fecha = date('\e\l d/m/Y a las H:i:s');
    $mensaje = "Nueva sesion: $sesion - $fecha";
       
} else {
    $sesion = $_POST['sesion'];
    $fecha = $_POST['fecha'];
    
    $mensaje = "Sesion ya iniciada: $sesion - $fecha";
}

$actual = 'Hoy es el dia ' . date('d/m/Y'). ' son las '.date('H:i:s');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div>
            <b>Pagina 2 - <?php echo $actual; ?></b><br>
            <?= $mensaje; ?><br>
                 
        </div>
        
        <form action="prueba11.php" method="post">
            <div>
                <input type="hidden" name="sesion" value ="<?= $sesion; ?>"/>
                <input type="hidden" name="fecha" value ="<?= $fecha; ?>"/>
                <input type="submit" name="pagina1" value ="Pagina 1"/>
            </div>
        </form>
    </body>
</html>