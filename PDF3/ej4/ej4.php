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
        <form name="input" action="pizza.php" method="post"><center>
            <table border="1">
                <tr>
                    <td>Nombre y apellidos: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Direccion: </td>
                    <td><input type="text" name="dir"></td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="tfno"></td>
                </tr>
                <tr>
                    <td>Nº Pizzas: </td>
                    <td><input type="text" name="unidades"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="start" value="Empezar"></td>
                </tr> 
            </table>
        </form>
        </center>
    </body>
</html>