<?php
    $a = array(
        5 => 1,
        12 => 2,
        13 => 56,
        'x' => 42
    );
    
    echo "<table border=1> ";
    foreach ($a as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    echo "Numero de elementos:" . count($a);
    unset($a[5]);
    echo "<table border=1> ";
    foreach ($a as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table><br>";
    unset($a);
/* 
/* 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

