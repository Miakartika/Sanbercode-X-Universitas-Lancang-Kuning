<?php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "Name : "; echo $sheep->name . "<br>"; 
echo "legs : "; echo $sheep->legs . "<br>"; 
echo "cold blooded : ";echo  $sheep->cold_blooded . "<br>"; 

$kodok = new Frog("buduk");
echo "<br>Name : ";echo  $kodok->name . "<br>";
echo "legs : "; echo $kodok->legs . "<br>"; 
echo "cold blooded : "; echo $kodok->cold_blooded . "<br>"; 
echo "Jump : "; echo $kodok->jump(). "<br>";

$sungokong = new Ape("Kera Sakti");
echo "<br>Name : ";echo  $sungokong->name . "<br>";
echo "legs : "; echo $sungokong->legs . "<br>"; 
echo "cold blooded : ";echo  $sungokong->cold_blooded . "<br>"; 
echo "Yell : ";echo $sungokong->yell(); 
?>