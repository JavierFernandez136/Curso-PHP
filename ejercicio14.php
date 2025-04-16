<?php 
/*
Escribe un programa que compruebe si una variable esta vacia
y si esta vacia,rellenarla con texto en minuscula y 
mostrarlo convertido a mayuscula en negrita.
*/

$texto="";

if(empty($texto)){
    $texto=strtoupper("Texto de relleno");
    echo "<strong>{$texto}</strong>";
}else{
    echo "Esta rellena";
}
?>