<?php
    $a = array(
        'Barcelona' => "Camp Nou",
        'Real Madrid' => "Santiago Bernabeu",
        'Valencia' => "Mestalla",
        'Real Sociedad' => "Anoeta"
    );
    $index = 0;
    
    echo "<table border=1> ";
    foreach ($a as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    $a['Real Madrid'] = null;
    echo "<br><table border=1> ";
    foreach ($a as  $value) {
        echo "<tr><td>" . $index . "</td><td>" . $value . "</td></tr>";
        $index++;
        
    }
    echo "</table>";
/* 
/* 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

