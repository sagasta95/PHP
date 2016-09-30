<?php
for ($index = 1; $index < 10001; $index++) {
    $aux=0;
    for ($index1 = 1; $index1 < $index; $index1++) {
        if($index%$index1==0){
            $aux=$aux+$index1;
        }
    }
    if($aux==$index){
        echo "El numero: ".$index. " es perfecto </br>\n";
    }
}
?>
