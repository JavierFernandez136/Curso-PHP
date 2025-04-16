<?php 
/*
Escribe un programa que añada valores a un array 
mientras que su longitud sea menos a 100 y despues
que se muestre la informacion del array por la pantalla.
*/

$vector = array();

for($i = 0; $i<100; $i++){
    // array_push($vector,$i);  
    $vector["numero-{$i}"] = $i;
};

var_dump($vector);

?>