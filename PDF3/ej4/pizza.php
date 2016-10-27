<!DOCTYPE html>
<html>
    <head> 
        <title>PizzaNet</title>
        <style>
            body {
                background-color: lemonchiffon;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form name='input' action='pedido.php' method='post'><center>
        <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
        <input type="hidden" name="dir" value="<?php echo $_POST['dir'];?>">
        <input type="hidden" name="tfno" value="<?php echo $_POST['tfno'];?>">
        <input type="hidden" name="unidades" value="<?php echo $_POST['unidades'];?>">
        <?php       
            for ($index = 0; $index < $_POST['unidades']; $index++) {
                echo "<table border='0'>
                <tr>
                    <td>Pizza: </td>
                    <td>
                        <select name='p" . $index . "'>
                            <option value='margarita'>Margarita</option>
                            <option value='barbacoa'>Barbacoa</option>
                            <option value='4estaciones'>4 Estaciones</option>
                            <option value='4quesos'>4 Quesos</option>
                            <option value='carbonara'>Carbonara</option>
                            <option value='romana'>Romana</option>
                            <option value='mediterranea'>Mediterranea</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tamaño: </td>
                    <td>                        
                        <select name='t" . $index . "'>
                            <option value='normal'>Normal</option>
                            <option value='grande'>Grande</option>
                            <option value='familiar'>Familiar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Masa: </td>
                    <td>                        
                        <select name='m" . $index . "'>
                            <option value='normal'>Normal</option>
                            <option value='fina'>Fina</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Extra: </td>
                    <td>                        
                        <select name='e" . $index . "'>
                            <option value='nada'>-------</option>
                            <option value='queso'>Queso</option>
                            <option value='pimiento'>Pimiento</option>
                            <option value='cebolla'>Cebolla</option>
                            <option value='jamon'>Jamon</option>
                            <option value='pollo'>Pollo</option>
                        </select>
                    </td>
                </tr>
            </table><hr>";
            }
        ?>
        <input type="submit" name="start" value="Continuar">
        <center></form>
    </body>
</html>