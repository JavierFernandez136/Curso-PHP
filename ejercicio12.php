<?php 
/*
Escribe un programa que muestre la direccion IP del 
usuario que visita nuestra web y si usa Firefox dale 
la enhorabuena.
*/

$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];

echo "Tu IP es ".$ip;
if(strstr($browser,"Firefox") == true){
    echo "<h1>El navegador que usas es Firefox Enhorabuena</h1>";
}else{
    echo "<h1>No estas usando Firefox sos una persona del bien</h1>";
};

?>