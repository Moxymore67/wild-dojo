<?php

$wizard = "Gandalf";
require "wizard.php";
include "header.php";

echo "Hello fellowship</p>";

$ringBearer = "Frodo";
echo "Le porteur de l'anneau est $ringBearer</br>";
$ringCreator = "Sauron";
echo "Le créateur de l'anneau est $ringCreator</br>";
$numberOfMembers = 9;
$weared = false;

if($weared == false) {
    $ringBearer = "Bilbo";
    $numberOfMembers += 1;
    echo "Le nouveau porteur de l'anneau est $ringBearer, et le nombre de membres de la communauté de l'anneau passe à $numberOfMembers";
}

var_dump($middleEarth);
$middleEarth = "";
echo "$middleEarth </br>";

echo "Le porteur est $ringBearer</br>";
echo $phrase = "L'anneau est porté par $ringBearer";
echo "</br>";
$addWords = " et $ringCreator le recherche.</br>";
echo $phrase . $addWords . "</br>";
echo strtoupper($ringCreator) . "</br>";
$ringCreator = strtoupper($ringBearer);
echo $ringCreator;

include("footer.php");