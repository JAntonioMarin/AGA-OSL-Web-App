<?php
class codigoQR{
	public $id = null;
	public function __construct($ide){		
		$this->id = $ide;
	}
	//
	public function dibujaQR(){
		echo '<img src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=';echo $this->id;echo'&amp;choe=UTF-8" alt="QR code">';
		return 'OK';
	}
}