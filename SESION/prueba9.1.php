<?php
    session_start();
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
}
    //if (isset($_COOKIE[session_name()])) {
    //    setcookie(session_name() . "" . (time() - 1) . "/");
    //}
    session_destroy();
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <b>Pagaina 2</b><br>
            <?php
            echo "Hola " . $_SESSION['nombre'] . "<br>";
            echo "Session ID: " . session_id() . "<br>";
            ?>
            <a href="prueba9.2.php">Pagina 3</a>
        </div>
    </body>
</html>

