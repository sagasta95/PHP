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
            echo "Hola " . $_SESSION['nombre'] . "<br>";
            echo "Session ID: " . session_id() . "<br>";
            ?>
        </div>
    </body>
</html>