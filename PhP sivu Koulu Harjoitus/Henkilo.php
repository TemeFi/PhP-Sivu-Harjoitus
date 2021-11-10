<?php
class Henkilo {
    private $nimi;

    public function __construct($nimi) {
        $this->nimi = $nimi;
    }

    public function puhu() {
        echo "Hei, nimeni on {$this->nimi}! <br>";
    }
}

$aapeli = new Henkilo("Aapeli");
$maija = new Henkilo("Maija");

$aapeli->puhu();
$maija->puhu();
?>
