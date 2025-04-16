<h1>Numeros multiplos de <?=$_GET["numero"];?></h1>
<?php 
/*Mostrar los numero multiplos de un numero 
pasado por la URL que hay del 1 al 100*/

for($i = 1; $i<=100; $i++){
    if(isset($_GET["numero"]) && $i%$_GET["numero"]==0)
    echo $i." Es multiplo de ".$_GET["numero"]."<br/>";
}
?>