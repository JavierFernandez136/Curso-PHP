<?php 
/*
Utilizar la  funcion filter_var para comprobar si el 
email que nos llega por URL es un email valido.
*/


function validateEmail($email){
 if(!empty($email) && filter_var($email,"FILTER_VALIDATE_EMAIL")){
    $status = "VALIDO";
 }else{
    $status = "NO VALIDO";
 }

 return $status;
}
$email = "";
if(isset($_GET["email"])){
   $email = $_GET["email"];
}

echo validateEmail($email);

?>