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
            echo "Hola " . $_SESSION['nombre'] . "<br>";
            echo "Session ID: " . session_id() . "<br>";
            ?>
            <a href="prueba9.1.php">Pagina 2</a>
        </div>
    </body>
</html>