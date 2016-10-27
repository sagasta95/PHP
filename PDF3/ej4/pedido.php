<!DOCTYPE html>
<html>
    <head> 
        <title>PizzaNet</title>
        <style>
            body {
                background-color: lemonchiffon;
            }
        </style>
    </head>
    <body>
                <?php 
                    $precio_total = 0;
                    echo "<b>Datos del pedido:</b><br><table border='0'><tr><td>Nombre: </td><td>" . $_POST['name'] . "</td></tr>";
                    echo "<tr><td>Direccion: </td><td>" . $_POST['dir'] . "</td></tr>";
                    echo "<tr><td>Tfno: </td><td>" . $_POST['tfno'] . "</td></tr></table><hr><center>";
                    for ($index = 0; $index < $_POST['unidades']; $index++) {
                        echo "<table border='0'><tr><td>Pizza:</td><td>" . $_POST['p' . $index] . "</td></tr>";
                        echo "<tr><td>Tamaño:</td><td>" . $_POST['t' . $index] . "</td></tr>";
                        echo "<tr><td>Masa:</td><td>" . $_POST['m' . $index] . "</td></tr>";
                        echo "<tr><td>Extra:</td><td>" . $_POST['e' . $index] . "</td></tr>";
                        $precio = precio($_POST['t' . $index], $_POST['e' . $index]);
                        $precio_total = $precio_total + $precio;
                        echo "<tr><td><b>Precio:<b></td><td><b>" . $precio . " €<b></td></tr></table><hr>";
                        
                    }
                    echo "</center><b>Total: " . $precio_total . " €<b>" ;
                    function precio($t, $e){
                        $precio = 0;
                        switch ($t){
                            case "normal":
                                $precio = 16;
                            break;
                            case "grande":
                                $precio = 20;
                            break;
                            case "familiar":
                                $precio = 26;
                            break;
                        }
                        if($e != "nada")
                            $precio = $precio + 1;
                        return $precio;
                    }
                ?>
            </table>
    </body>
</html>