<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <b>Pagaina 2</b><br>
            <?php
            session_start();
            echo "nombre = " . $_SESSION['nombre'] . "<br>";
            $_SESSION['nombre'] = '?';
            session_abort();
            echo "nombre = " . $_SESSION['nombre'] . "<br>";
            ?>
            <a href="prueba7.2.php">Pagina 3</a>
        </div>
    </body>
</html>

