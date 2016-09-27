
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola</title>
    </head>
    <body>
        <?php
            $var= 80;
            $var2 = "Hello world!";
            echo "Esto \"va \\ \t a\n", "salir junto<br>" . "hola<br>";
            $var++;
            echo $var , $var2;
            print "<br>" . $var2 . " " . $var . "<br>";
            echo (int)((0.1 + 0.7)*10). "<br>";
            //echo strval($var) . "<br>"; 
            //echo settype($var, "float");
            echo gettype($var) . "<br>";
            echo var_dump($var) . "<br>";
            echo 40 + "2 prueba" . "<br>";
            function duplicar(){
                global $var;
                global $temp;
                $temp = $var * 2;
            }
        ?>
    </body>
</html>
