<?php
    $var1 = 5;
    $var2 = 5.0;
    $var3 = "5";
    $var4 = "5.0";
    igualdad1($var1, $var2, $var3, $var4);
    igualdad2($var1, $var2, $var3, $var4);
    dif1($var1, $var2, $var3, $var4);
    dif2($var1, $var2, $var3, $var4);
    dif3($var1, $var2, $var3, $var4);
    
    function igualdad1($param1, $param2, $param3, $param4) {
        echo "************** == *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                if($aux == $arrayaux[$index1]){
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": TRUE<br>";
                }
                else{
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": FALSE<br>";
                }
            }
            echo "<br>";
        }
    }
    
    function igualdad2($param1, $param2, $param3, $param4) {
        echo "************** === *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                if($aux === $arrayaux[$index1]){
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": TRUE<br>";
                }
                else{
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": FALSE<br>";
                }
            }
            echo "<br>";
        }
    }
    
    function dif1($param1, $param2, $param3, $param4) {
        echo "************** <> *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                if($aux <> $arrayaux[$index1]){
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": TRUE<br>";
                }
                else{
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": FALSE<br>";
                }
            }
            echo "<br>";
        }
    }
    
    function dif2($param1, $param2, $param3, $param4) {
        echo "************** != *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                if($aux != $arrayaux[$index1]){
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": TRUE<br>";
                }
                else{
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": FALSE<br>";
                }
            }
            echo "<br>";
        }
    }
    
    function dif3($param1, $param2, $param3, $param4) {
        echo "************** !== *****************<br>";
        $array = array($param1, $param2, $param3, $param4);
        for ($index = 0; $index < 4; $index++) {
            $aux = $array[$index];
            $arrayaux = $array;
            array_splice($arrayaux, $index, 1);
            for ($index1 = 0; $index1 < count($arrayaux); $index1++) {
                if($aux !== $arrayaux[$index1]){
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": TRUE<br>";
                }
                else{
                    echo var_dump($aux) . var_dump($arrayaux[$index1]) . ": FALSE<br>";
                }
            }
            echo "<br>";
        }
    }
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

