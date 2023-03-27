<?php
$data = array(5,21,987,3,687,35,513,2,7,9,3,6,5,45,8,3,4,88,538,538,951,2,35,74,87987);

var_dump($data);

for ($i=0; $i < count($data) - 1; $i++) { 

    for ($j=0; $j < count($data) - $i - 2; $j++) { 
    
        if($data[$j] > $data[$j+1]){
            $aux = $data[$j];
            $data[$j] = $data[$j+1];
            $data[$j+1] = $aux;
        }
    }
}

var_dump($data);
?>