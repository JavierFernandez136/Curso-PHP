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
foreach($meses as $mes){
    echo $mes."<br/>";
};
/*Se recorre el array con el metodo foreach que al cual se le pasan dos 
variables,el array y la variable de como se va a mostrar */