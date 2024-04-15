<?php
require "Client.php";
require "Compte.php";

$cl1 =new Client(1515, "John", "Doe", "01-01-1985", "Strasbourg");
$cl2 =new Client(1515, "Johnathan", "Doestar", "01-01-1977", "Dunkerque");


$co1 = new Compte($cl1, "Compte Courant", 100, "Euros");
$co2 = new Compte($cl1, "Compte Epargne", 1000, "Euros");
$co3 = new Compte($cl2, "Compte Courant", 500, "Euros");


echo $co1->getInfoCompte();
echo $co2->getInfoCompte();

echo $co1->crediter(100);
echo $co2->debiter(200);

echo $co1->getInfoCompte();
echo $co2->getInfoCompte();

echo $co1->virerargent($co2, 100);


echo $co1->getInfoCompte();
echo $co2->getInfoCompte() . "<br>";

echo $cl1->getInfoClient();
echo $cl2->getInfoClient();



?>