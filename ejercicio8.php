<?php 
/*Escribir un programa que calcule el factorial 
de cualquier numero almacenado en una variable
El factorial de un numero entero N es la operacion 
matemarica que consiste en multiplicar todos los factores 
N x (N - 1) x (N - 2) x...
Asi el factorial de 5 (escrito como 5!) es igual a: 5!=5x4x3x2x1=120
*/
$factorial = 1;
$numero = 5;

for($cont=1; $cont <= $numero; $cont++){
    //$factorial = $factorial * $cont;
    $factorial *= $cont;
};

echo "El Factorial de ".$numero." es ".$factorial;


?>