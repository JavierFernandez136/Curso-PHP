<?php 
/*Crear un array llamado meses y que almacene el 
nombre de los doce meses del año.
Recorrerlo con for para mostrar por pantalla los doce meses*/
$meses = array("Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre");
// echo count($meses); count cuenta cuantos elemenros hay en el array
for($i = 0; $i < count($meses); $i++){

    echo $meses[$i]."<br/>"; 
};
?>