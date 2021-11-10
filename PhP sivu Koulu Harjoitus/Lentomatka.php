<?php
class Lomamatka {

private $lennonNro = "AY000";
private $matkaKohde = "Saariselkä";
private $päivienLkm = 7;
private $hinta = 0.0;

	public function __construct($lennonNro, $matkaKohde, $päivienLkm, $hinta) {
		$this->lennonNro = $lennonNro;
		$this->matkaKohde = $matkaKohde;
		$this->päivienLkm = $päivienLkm;
		$this->hinta = $hinta;
	}
	
	public function nayta_lennonNro () {
		return $this->lennonNro;
	}
	
		public function nayta_matkaKohde() {
		return $this->matkaKohde;
	}
	
		public function nayta_päivienLkm () {
		return $this->päivienLkm;
	}
	
		public function nayta_hinta() {
		return $this->hinta;
	}
}
?>
