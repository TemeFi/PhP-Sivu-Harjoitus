<?php
include("Luokkamallinnus.php");

$saastotili = new Tili();
$saastotili->Talleta(5000);
$saastotili->nosta(590);

echo "Säästötilillä on nyt ";
echo $saastotili->naytaSaldo();
echo" euroa";
?>
