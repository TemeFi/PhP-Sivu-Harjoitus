<?php
class Tuote {
    private $nimi;
    private $maara;

    public function __construct($nimi, $maara) {
        $this->nimi = $nimi;
        $this->maara = $maara;
    }

    public function Nayta_nimi() {
        return $this->nimi;
    }

    public function Nayta_maara() {
        return $this->maara;
    }
}
?>