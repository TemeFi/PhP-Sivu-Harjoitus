<?php
class Tili {
	
	private $tiliMaara;
	private $tiliNro;
	private $saldo;
	
	public function __construct() {
		$this->saldo = 0;
	}
	
	public function talleta ($summa) {
		$this->saldo = $this->saldo + $summa;
		return;
	}
	
	public function nosta ($summa) {
		$this->saldo = $this->saldo - $summa;
		return;
	}
	
	
	public function naytaSaldo() {
		return $this->saldo;
	}
	
	protected function laskeKorko() {
		
	}

}
?>
