
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
            'hijos' => array("Chris", "Meg", "Stewie",)
        )
    );
    foreach ($familias as $key => $value) {
        echo "Familia " . $key . ": ";
        foreach ($value as $key2 => $value2) {
            if(!is_array($value2)){
                echo $key2 . " " . $familias[$key][$key2] . ", ";
            }
            else{
                echo $key2 . " ";
                for ($i = 0; $i < count($value2); $i++) {
                    echo $familias[$key][$key2][$i] . ", ";
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

