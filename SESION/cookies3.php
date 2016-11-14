<?php

if(!isset($_GET['vuelta'])){
    setcookie('prueba','prueba');
    header('Location: cookies3.php?vuelta=1');
    exit;
}
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Comprobar si el equipo acepta las cookies</title>
    </head>
    <body>
        <div>
            <?php
            if (isset($_COOKIE['prueba'])){
                echo 'Cookie aceptada';
            } else {
                echo 'Cookie rechazada';    
            }
            ?>
        </div>
    </body>
</html>
