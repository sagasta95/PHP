<?php
    $a = array("Lagartija", "Araña", "Perra", "Gata", "Raton");
    $b = array("12", "34", "49", "53", "12");
    $c = array("Sauce", "Pino", "Naranjo", "Chopa", "Perro", "34");
    
    $d = array_merge($a, $b, $c);
    
    foreach($d as  $value){
        echo $value . "<br>";
    }
        
/* 
/* 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

