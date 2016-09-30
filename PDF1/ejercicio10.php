<?php
    $var1 = 5;
    $var2 = 5.0;
    $var3 = "5";
    $var4 = "5.0";
    suma($var1, $var2, $var3, $var4);
    resta($var1, $var2, $var3, $var4);
    div($var1, $var2, $var3, $var4);
    prod($var1, $var2, $var3, $var4);
    mod($var1, $var2, $var3, $var4);

    
    function suma($param1, $param2, $param3, $param4) {
        echo "************** + *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                echo var_dump($aux) . var_dump($arrayaux[$index1]) . var_dump($aux + $arrayaux[$index1]) . "<br>";
            }
            echo "<br>";
        }
    }
    
    function resta($param1, $param2, $param3, $param4) {
        echo "************** - *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                echo var_dump($aux) . var_dump($arrayaux[$index1]) . var_dump($aux - $arrayaux[$index1]) . "<br>";
            }
            echo "<br>";
        }
    }
    
    function prod($param1, $param2, $param3, $param4) {
        echo "************** * *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                echo var_dump($aux) . var_dump($arrayaux[$index1]) . var_dump($aux * $arrayaux[$index1]) . "<br>";
            }
            echo "<br>";
        }
    }
    
    function div($param1, $param2, $param3, $param4) {
        echo "************** / *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                echo var_dump($aux) . var_dump($arrayaux[$index1]) . var_dump($aux / $arrayaux[$index1]) . "<br>";
            }
            echo "<br>";
        }
    }
    
    function mod($param1, $param2, $param3, $param4) {
        echo "************** % *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                echo var_dump($aux) . var_dump($arrayaux[$index1]) . var_dump($aux % $arrayaux[$index1]) . "<br>";
            }
            echo "<br>";
        }
    }
    
    