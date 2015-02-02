<?php
class Listado{
	public $json_data = null;
	public function __construct($url){
		//echo $url;
		$json = file_get_contents($url);
		$json_data2 = json_decode($json, true);
		$this->json_data = $json_data2;
	}
	//
	public function dibujaListado(){
		echo '<div class="table-responsive">
		<table class="table table-condensed">';
		foreach($this->json_data as $obj){
        $referencia = $obj["referencia"];
        $revisado = $obj["revisado"];
        $localizacion = $obj["localizacion"];
        $tipo = $obj["tipo"];
        $cpu = $obj["cpu"];
        $mhz = $obj["mhz"];
        $ram = $obj["ram"];
        $disco_duro = $obj["disco_duro"];
        $cd_dvd = $obj["cd_dvd"];
        $floppy = $obj["floppy"];
        $ethernet = $obj["ethernet"];
        $fuente_alimentacion = $obj["fuente_alimentacion"];
        $notas = $obj["notas"];
        $campana_numero = $obj["campana_numero"];
        $puntuacion_cpu = $obj["puntuacion_cpu"];
        $puntuacion_ram = $obj["puntuacion_ram"];
        $puntuacion_dd = $obj["puntuacion_dd"];
        $puntuacion = $obj["puntuacion"];
        $ultima_modificacion = $obj["ultima_modificacion"];
        
		//echo "<p>Prueba de acceso a https://aga-osl.herokuapp.com/stock/1.json</p>";
				//<p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you. it only took me <a href="sidebar-right.html">six days</a>. </p>
		echo'<tr>
			<td><strong>Codigo QR</strong></td>
			<td><strong>Referencia</strong></td>
			<td><strong>Revisado</strong></td>
			<td><strong>Localización</strong></td>
			<td><strong>Tipo</strong></td>
			<td><strong>CPU</strong></td>
			<td><strong>MHz</strong></td>
			<td><strong>RAM</strong></td>
			<td><strong>Disco Duro (GB)</strong></td>
			<td><strong>CD/DVD</strong></td>
			
			
			</tr>';

		echo '<tr>';
		echo '<td>';echo '<img src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=';echo $referencia;echo'&amp;choe=UTF-8" alt="QR code">';echo'</td>';
		echo '<td>';echo $referencia;echo'</td>';
		echo '<td>';echo $revisado;echo'</td>';
		echo '<td>';echo $localizacion;echo'</td>';
		echo '<td>';echo $tipo;echo'</td>';
		echo '<td>';echo $cpu;echo'</td>';
		echo '<td>';echo $mhz;echo'</td>';
		echo '<td>';echo $ram;echo'</td>';
		echo '<td>';echo $disco_duro;echo'</td>';
		echo '<td>';echo $cd_dvd;echo'</td>';
		

		echo '</tr>';
		echo '<tr>';
		echo'
			<tr>
			<td><strong>Floppy</strong></td>
			<td><strong>Ethernet</strong></td>
			<td><strong>Fuente Alimentación</strong></td>
			<td><strong>Notas</strong></td>
			<td><strong>Campaña número</strong></td>
			<td><strong>Puntuación CPU</strong></td>
			<td><strong>Puntuación RAM</strong></td>
			<td><strong>Puntuación DD</strong></td>
			<td><strong>Puntuación</strong></td>
			<td><strong>Fecha de modificación</strong></td>
		</tr>';
		echo '<td>';echo $floppy;echo'</td>';
				echo '<td>';echo $ethernet;echo'</td>';
		echo '<td>';echo $fuente_alimentacion;echo'</td>';
		echo '<td>';echo $notas;echo'</td>';
		echo '<td>';echo $campana_numero;echo'</td>';
		echo '<td>';echo $puntuacion_cpu;echo'</td>';
		echo '<td>';echo $puntuacion_ram;echo'</td>';
		echo '<td>';echo $puntuacion_dd;echo'</td>';
		echo '<td>';echo $puntuacion;echo'</td>';
		echo '<td>';echo $ultima_modificacion;echo'</td>';
		
		echo '</tr>';
	}
		echo '</table><div>';
		return 'OK';
	}	

}


?>