<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <b>Pagaina 1</b><br>
            <?php
            session_start();
            $_SESSION['nombre'] = 'Aitor';
            echo "nombre = " . $_SESSION['nombre'] . "<br>";
            ?>
            <a href="prueba8.1.php">Pagina 2</a>
        </div>
    </body>
</html>