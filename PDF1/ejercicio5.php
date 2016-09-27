<?php
    $array1 = array(1 , 5, 10, 25, 50, 100, 200, 500, 1000, 2000, 5000);
    $valor_euro = 166.386;
    for ($index = 0; $index < count($array1); $index++) {
        echo $array1[$index] . " pestas = " .$array1[$index] / $valor_euro . " € = " . number_format($array1[$index] / $valor_euro, 2) . " € <br>";
    }
?>


