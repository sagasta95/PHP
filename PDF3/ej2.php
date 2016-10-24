<!DOCTYPE html>
<html>
    <head> 
        <title>Cilindro</title>
        <style>
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form name="input" action="<?= $_SERVER['PHP_SELF']; ?>" method="post"><center>
            <table border="1">
                <tr>
                    <td>Diametro:</td>
                    <td><input type="text" name="d" value="<?php echo isset($_POST['d']) && is_numeric($_POST['d']) ? $_POST['d']:''?>"></td>
                </tr>
                <tr>
                    <td>Altura: </td>
                    <td><input type="text" name="h" value="<?php echo isset($_POST['h']) && is_numeric($_POST['h']) ? $_POST['h']:''?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="calcular" value="Calcular"></td>
                </tr> 
            </table>
        </form>
        <br>
        <table>
        <?php
            if(isset($_POST['calcular'])){
                if((empty($_POST['d']) || !is_numeric($_POST['d'])) && (empty($_POST['h']) || !is_numeric($_POST['h']))){
                    echo "<tr><td>El campo Diametro esta vacio o no contiene valores numericos.</td></tr>";
                    echo "<tr><td>El campo Altura esta vacio o no contiene valores numericos.</td></tr>";
                }else{
                    if(empty($_POST['d']) || !is_numeric($_POST['d'])){
                        echo "<tr><td>El campo Diametro esta vacio o no contiene valores numericos.</td></tr>";
                    }else{
                        if(empty($_POST['h']) || !is_numeric($_POST['h'])){
                            echo "<tr><td>El campo Altura esta vacio o no contiene valores numericos.</td></tr>";
                        }else{
                            echo "<tr><td>Volumen: </td><td>" . pi() * pow(($_POST['d']/2), 2) * $_POST['h'] . " cm3</td></tr>";
                        }
                    }
                }
            }
        ?>
        </table></center>
    </body>
</html>