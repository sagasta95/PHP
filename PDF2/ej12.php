<?php
    $deportes = array("futbol", "baloncesto", "natacion", "tenis");
    
    foreach ($deportes as $value) {
        echo $value . "<br>";
    }
    
    echo "Total e valores: " . count($deportes) . "<br>";
    reset($deportes);
    echo "Primer elemento: " . current($deportes) . "<br>";
    next($deportes);
    echo "Siguiente elemento: " . current($deportes) . "<br>";
    end($deportes);
    echo "Ultimo elmento: " . current($deportes) . "<br>";
    prev($deportes);
    echo "Anterior elemento: " . current($deportes) . "<br>";
                    

/* 
/* 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

