
<?php
    //reamostrar 100 primeros numeros naturales uno por linea. par, impar, primo, serie fibonachi
    $fibo = array(0, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89);
    for ($index = 1; $index < 101; $index++) {
        
        $primo = true;
        echo $index;
        
        if($index % 2 == 0){
            echo ": par";
        }
        else{
            echo ": impar";
        }
        
        for($index2 = 2; $index2 < $index; $index2++){
                if($index % $index2 == 0){
                    $primo = false;
                    break;
                }
        }
        if($primo == true){
            echo ", primo";
        }
        
        for ($index1 = 0; $index1 < count($fibo); $index1++) {
            if($fibo[$index1] == $index){
                echo ", fibo";
            } 
        }

        echo "<br>";
}
?>



