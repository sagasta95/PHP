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
                $d = $_POST['d'];
                $h = $_POST['h']; 
                echo "<tr><td>Volumen: </td><td>" . pi() * pow(($d/2), 2) * $h . " cm3</td></tr>";
            }
        ?>
        </table></center>
    </body>
</html>