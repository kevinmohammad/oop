<?php

require_once("hewan.php");
require_once("frog&ape.php");

$sheep = new animal("shaun");

echo "Name : ". $sheep->name . "<br>";
echo "Legs : ". $sheep->legs . "<br>";
echo "cold blooded". $sheep->$cold_blooded . "<br>";

$sungokong = new ape("kera sakti");

echo "Name : ". $sungokong->name . "<br>";
echo "Legs : ". $sungokong->legs . "<br>";
echo "cold blooded". $sungokong->$cold_blooded . "<br>";
echo "Yell : ";
$sungokong->yell();
echo "<br>";

$kodok = new frog("shaun");

echo "Name : ". $kodok->name . "<br>";
echo "Legs : ". $kodok->legs . "<br>";
echo "cold blooded". $kodok->$cold_blooded . "<br>";
echo "jump : ";
$kodok->jump();




?>