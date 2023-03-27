<?php
$data = array(5,21,987,3,687,35,513,2,7,9,3,6,5,45,8,3,4,88,538,538,951,2,35,74,87987);

var_dump($data);

for ($i=1; $i < count($data) - 1; $i++) { 
    
    for ($j=$i; $j > 0; $j--) { 

        if($data[$j-1] > $data[$j]){
            $aux = $data[$j-1];
            $data[$j-1] = $data[$j];
            $data[$j] = $aux;
        }
    }
}

var_dump($data);

?>