<?php 
/*
El calculo del factorial se realiza en un bucle que va
disminuyendo el valor de una variable y multiplicando todos los valore entre si,
como ya hemos visto anteriormente.
Aprovechando este patron puede crear una funcion que realice la 
factorial del numero que le pasemos por parametro,ahorrando asi
lineas de codigo.
*/

//crear funciones

function factorial($numero){
    $resultado = 1;
    for($x=$numero; $x > 0; $x--){
        $resultado *= $x;
    }

    return $resultado;
}

echo "<h2>El factorial</h2>";
$dato = 5;
echo "El factorial de ".$dato." es ".factorial($dato)."<br/>";

$dato=12;
echo factorial($dato)."<br/>";

$num =3;
echo factorial($num)."<br/>";

$i=9;
echo factorial($i)."<br/>";


?>