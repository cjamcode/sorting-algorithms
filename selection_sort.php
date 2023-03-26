<?php

$data = array(5,21,987,3,687,35,513,2,7,9,3,6,5,45,8,3,4,88,538,538,951,2,35,74,87987);


var_dump($data);

for ($i=0; $i < count($data) - 2; $i++) { 
    
    $min_value = $data[$i];
    $pos_min_value = $i;

    for ($j=$i+1; $j < count($data) - 1; $j++) { 
        
        if($min_value > $data[$j]){
            $min_value = $data[$j];
            $pos_min_value = $j;
        }
    }

    $aux = $data[$i];
    $data[$i] = $min_value;
    $data[$pos_min_value] = $aux;
}

var_dump($data);
?>