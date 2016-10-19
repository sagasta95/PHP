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
        <form name="input" action="" method="post"><center>
            <table border="1">
                <tr>
                    <td>Diametro:</td>
                    <td><input type="text" name="d"></td>
                </tr>
                <tr>
                    <td>Altura: </td>
                    <td><input type="text" name="h"></td>
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
                if(empty($_POST['d']) || !is_numeric($_POST['d']) || empty($_POST['h']) || !is_numeric($_POST['h'])){
                    echo "<tr><td>Algun campo esta vacio o no contiene valores numericos.</td></tr>";
                }else{
                    $d = $_POST['d'];
                    $h = $_POST['h']; 
                    echo "<tr><td>Volumen: </td><td>" . pi() * pow(($d/2), 2) * $h . " cm3</td></tr>";
                }
            }
        ?>
        </table></center>
    </body>
</html>