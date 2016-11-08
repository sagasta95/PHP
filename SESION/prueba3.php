<?php
$nombre = "Aitor";
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div><a href="prueba3.1.php?nombre=<?php echo rawurlencode($nombre); ?>">Pagina 2</a></div>
    </body>
</html>
