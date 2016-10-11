<?php
    $familias = array(
        'Los Simposons' => array(
            'padre' => "Homer",
            'madre' => "Marge",
            'hijos' => array("Bart", "Lisa", "Maggie")
        ),
        'Los Griffin' => array(
            'padre' => "Peter",
            'madre' => "Lois",
            'hijos' => array("Chris", "Meg", "Stewie")
        )
    );
    foreach ($familias as $key => $value) {
        echo "Familia " . $key . ": ";
        foreach ($value as $key2 => $value2) {
            if(true){
                echo $key2 . " " . $familias[$key][$key2] . ", ";
            }
            else{
                echo $key3 . " ";
                foreach ($value2 as $key3 => $value3) {
                    echo $familias[$key][$key2][$key3] . ", ";
                }
            }
        }
        echo "<br>";
    }

/* 
/* 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

