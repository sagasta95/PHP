<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            session_start();
            echo $_SESSION['nombre'] = isset($_SESSION['nombre']) ? $_SESSION['nombre']:'',"<br>";
            echo $_SESSION['info']['apellido'] = isset($_SESSION['info']['apellido']) ? $_SESSION['info']['apellido']:'',"<br>";
        ?>
    </body>
</html>

