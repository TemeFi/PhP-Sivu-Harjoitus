<?php
include("Lentomatka.php");

$joulumatka = new Lomamatka("AY316", "Levi", 6, 690.55 );
$talviloma = new Lomamatka("AY444", "Vuokatti", 6, 567 );


echo "Lomamatkan kohde: " . $joulumatka-> nayta_matkaKohde() . "<br>";
echo "Hinta euroina: " . $joulumatka->nayta_hinta() . "€";

echo "<br>";
echo "<br>";


echo "Lomamatkan kohde: " . $talviloma-> nayta_matkaKohde() . "<br>";
echo "Hinta euroina: " . $talviloma->nayta_hinta() . "€";
?>
