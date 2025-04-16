<?php 
/*
Hacer un programa que tenga un array de 5 numeros 
enteros y hacer lo siguente con el:
1.Recorerlo y mostrarlo.
2.Ordenarlo y mostrarlo.
3.Mostrar su longitud.
4.Buscar en el vector.
*/
$numeros = array(30,20,40,50,10);
echo "<h2>Recorrer y Mostrar:</h2>";
foreach($numeros as $numero){
    echo $numero."<br/>";
};

echo "<h2>Ordenar y Mostrar</h2>";
sort($numeros);
foreach($numeros as $numero){
    echo $numero."<br/>";
};

echo "<h2>Mostrar su longitud</h2>"."Longitud igual a : ".count($numeros);

echo "<h2>Buscar en el array: </h2>";
if(!array_search(60,$numeros)){
echo "<p>El numero no existe en el array</p>";
}else{
echo "<p>El numero si existe en el array</p>";
};





?>