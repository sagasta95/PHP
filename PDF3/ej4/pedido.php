<!DOCTYPE html>
<html>
    <head> 
        <title>PizzaNet</title>
        <style>
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <center>
                <?php 
                    echo "<table border='1'><tr><td>Nombre: </td><td>" . $_POST['name'] . "</td></tr>";
                    echo "<tr><td>Direccion: </td><td>" . $_POST['dir'] . "</td></tr>";
                    echo "<tr><td>Tfno: </td><td>" . $_POST['tfno'] . "</td></tr></table><br>";
                    for ($index = 0; $index < $_POST['unidades']; $index++) {
                        echo "<table border='1'><tr><td>Pizza:</td><td>" . $_POST['p' . $index] . "</td></tr>";
                        echo "<tr><td>Tamaño:</td><td>" . $_POST['t' . $index] . "</td></tr>";
                        echo "<tr><td>Masa:</td><td>" . $_POST['m' . $index] . "</td></tr>";
                        echo "<tr><td>Extra:</td><td>" . $_POST['e' . $index] . "</td></tr></table><br>";
                    }
                ?>
            </table>
        </center>
    </body>
</html>