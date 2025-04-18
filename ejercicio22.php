<?php 
/*Modificae el ejercicio 21 para pasarle un parametro
opcional qu enos permita imprimir directamente la tabla en HTML*/



function tabla($numero,$html = null){
    $tabla = "";
    if($html != null){
        $tabla .="<h3>Tabla del {$numero}</h3>";
    }
    for($i=1;$i <= 10;$i++){
        $cuenta=$i*$numero;
        $tabla.= "{$i} x {$numero} = {$cuenta} <br/>";
    }
    if($html != null){
        echo $tabla;
    }
    return $tabla;
};
echo "<h1>Tablas de multiplicar</h1>";
// $num=5;
// echo(tabla($num));

for($i = 1;$i <= 10;$i++){
    
    tabla($i,true);
};
?>
