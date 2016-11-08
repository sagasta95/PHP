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
        <h2>PizzaNet</h2><hr>
        <form name="input" action="pizza.php" method="post"><center>
            <table border="0">
                <tr>
                    <td>Nombre y apellidos: </td>
                    <td><input type="text" name="name" required="required"></td>
                </tr>
                <tr>
                    <td>Direccion: </td>
                    <td><input type="text" name="dir" required="required"></td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="number" name="tfno" required="required"></td>
                </tr>
                <tr>
                    <td>Nº Pizzas: </td>
                    <td><input type="number" name="unidades" required="required"></td>
                </tr>
                <tr>
                    <td colspan="2"><br><input type="submit" name="start" value="Empezar"></td>
                </tr> 
            </table>
        </form>
        </center>
    </body>
</html>