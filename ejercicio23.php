<?php 
/*Crea una sesion que vaya aumentando su valor
en uno o disminuyendo en uno en funcion de su el 
parametro GET "counter" esta a uno a cero.*/
session_start();
if(!isset($_SESSION["numero"])){
$_SESSION["numero"] = 0;
};
if(isset($_GET["counter"]) && $_GET["counter"] == 1){
    $_SESSION["numero"]++;
}elseif(isset($_GET["counter"]) && $_GET["counter"] == 0){
    $_SESSION["numero"]--;
};

echo "Sesion numero: ".$_SESSION["numero"];

?>