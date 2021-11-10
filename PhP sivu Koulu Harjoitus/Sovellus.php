<?php
include("Tuote.php");
include("Ostoskori.php");

$ostoskori = new Ostoskori();
$ostoskori->lisaa(new Tuote("selleri", 3));
$ostoskori->lisaa(new Tuote("retiisi", 2));
$ostoskori->lisaa(new Tuote("nauris", 5));
echo "Määrä: " . $ostoskori->Nayta_maara() . "<br>";
echo "Tuotteet: " . implode(", ", $ostoskori->lista());
?>
