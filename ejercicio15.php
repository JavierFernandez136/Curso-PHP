<?php 
/*
Crea un script PHP que tenga tres varibles,una tipo array,
otra tipo string y otra boleana y que imprima un mensaje 
segun el tipo de variable que sea.
*/
$matriz = array ("Hola",2);
$verdadero = true;
$texto = "Bienvenidos al curso de PHP";

if(is_array($matriz)==true){
    echo "El array es un array<br/>";
}

if(is_bool($verdadero)==true){
    echo "El boleano es un bolean<br/>";
}

if(is_string($texto)==true){
    echo "El string es un string<br/>";
}
?>