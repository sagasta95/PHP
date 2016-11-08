<?php
session_start();
$_SESSION['nombre'] = "Sesion 1";
$_SESSION['info'] = array('Nombre' => "Aitor",
                                 'apellido' => "Sagastagoitia");
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div><a href="prueba1.1.php">Pagina 2</a></div>
    </body>
</html>

