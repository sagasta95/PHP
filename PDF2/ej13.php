<?php
    $amigos = array(
        'Madrid' => array(
            'Pedro' => array(
                'edad' => 32,
                'telefono' => "91-999.99.99"
            )
        ),
        'Barcelona' => array(
            'Susana' => array(
                'edad' => 34,
                'telefono' => "93-000.00.00"
            )
        ),
        'Toledo' => array(
            'Sonia' => array(
                'edad' => 42,
                'telefono' => "925-09.09.09"
            )
        )
    );
    foreach ($amigos as $key => $value) {
        echo "En " . $key . ": ";
        foreach ($value as $key2 => $value2) {
                echo "nombre " . $key2 . ", ";
                foreach ($value2 as $key3 => $value3) {
                    echo $key3 . " " . $value3 . ", ";
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

