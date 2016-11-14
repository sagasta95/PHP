<?php

$ok1 = setcookie('nombre','Juan');
$ok2 = setcookie('apellido','Saenz', time()+(30*24*3600));
if($ok1 and $ok2) {
    $mensaje = 'Cookies depositadas';
} else {
    $mensaje = 'Una cookie no se ha depositado';
}
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cookie - Pagina1</title>
    </head>
    <bod>
        <div>
            <?= $mensaje; ?><br>
            <a href="cookies2.php">Pagina 2</a>
        </div>
    </bod>
</html>