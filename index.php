<?php 
require_once('header.php');
require_once('menu.php');
echo'
<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">';
			echo '<p>Codigo QR con Api de Google:</p><img src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1&amp;choe=UTF-8" alt="QR code">';
     
			$url = "https://aga-osl.herokuapp.com/stock/1.json";
			$json = file_get_contents($url);
			$json_data = json_decode($json, true);
			echo "<p>Prueba de acceso a https://aga-osl.herokuapp.com/stock/1.json</p>";
				//<p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you. it only took me <a href="sidebar-right.html">six days</a>. </p>
				echo '<p>Referencia:';echo $json_data["referencia"];echo'</p>';
				echo '<p>revisado:';echo $json_data["revisado"];echo'</p>';
				echo '<p>Localización:';echo $json_data["localizacion"];echo'</p>';
				echo '<p>Tipo:';echo $json_data["tipo"];echo'</p>';
				echo '<p>CPU:';echo $json_data["cpu"];echo'</p>';
				echo '<p>MHz:';echo $json_data["mhz"];echo'</p>';
				echo '<p>RAM:';echo $json_data["ram"];echo'</p>';
				echo '<p>Disco Duro (GB):';echo $json_data["disco_duro"];echo'</p>';
				echo '<p>CD/DVD:';echo $json_data["cd_dvd"];echo'</p>';
				echo '<p>Floppy:';echo $json_data["floppy"];echo'</p>';
				echo '<p>Ethernet:';echo $json_data["ethernet"];echo'</p>';
				echo '<p>Fuente Alimentación:';echo $json_data["fuente_alimentacion"];echo'</p>';
				echo '<p>Notas:';echo $json_data["notas"];echo'</p>';
				echo '<p>Campaña número:';echo $json_data["campana_numero"];echo'</p>';
				echo '<p>Puntuación CPU:';echo $json_data["puntuacion_cpu"];echo'</p>';
				echo '<p>Puntuación RAM:';echo $json_data["puntuacion_ram"];echo'</p>';
				echo '<p>Puntuación DD:';echo $json_data["puntuacion_dd"];echo'</p>';
				echo '<p>Puntuación:';echo $json_data["puntuacion"];echo'</p>';
				echo '<p>Fecha de modificación:';echo $json_data["ultima_modificacion"];echo'</p>';
				echo '
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Custom website design</h3>
					<p>I dont think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didnt eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Wordpress integration</h3>
					<p>I dont think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didnt eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Application development</h3>
					<p>I dont think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didnt eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">SEO &amp; SEM services</h3>
					<p>I dont think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didnt eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
			</div>
		</div> <!-- / section -->
	
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Recent Works</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Sample title - big data solutions</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Pure ipsum - development services for people</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Pure ipsum - development services for people</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="assets/images/s1.jpg" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Lorem studios - interior and patio design</span>
					</a>
					<span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
					<h4></h4>
					<p></p>
				</div>
			</div>

		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>A simple, nice-looking <b>call to action box</b>. Boxing is about respect. getting it for yourself, 
					and taking it away from the other guy. no, this is mount everest. </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="http://www.gettemplate.com/downloads/initio.zip " class="btn btn-primary btn-lg">Download template</a>
				</div>
			</div></div>
		</div> <!-- /section -->

		';
		echo '<h1>Prueba de bucle json</h1>';
		$url = "https://aga-osl.herokuapp.com/stock.json";
		$json = file_get_contents($url);
		$array = json_decode($json);
		foreach($array as $obj){
        $referencia = $obj->referencia;
        $revisado = $obj->revisado;
        $localizacion = $obj->localizacion;
        $tipo = $obj->tipo;
        $cpu = $obj->cpu;
        $mhz = $obj->mhz;
        $ram = $obj->ram;
        $disco_duro = $obj->disco_duro;
        $cd_dvd = $obj->cd_dvd;
        $floppy = $obj->floppy;
        $ethernet = $obj->ethernet;
        $fuente_alimentacion = $obj->fuente_alimentacion;
        $notas = $obj->notas;
        $campana_numero = $obj->campana_numero;
        $puntuacion_cpu = $obj->puntuacion_cpu;
        $puntuacion_ram = $obj->puntuacion_ram;
        $puntuacion_dd = $obj->puntuacion_dd;
        $puntuacion = $obj->puntuacion;
        $ultima_modificacion = $obj->ultima_modificacion;
        echo '<p>Referencia:';echo $referencia;echo'</p>';
				echo '<p>revisado:';echo $revisado;echo'</p>';
				echo '<p>Localización:';echo $localizacion;echo'</p>';
				echo '<p>Tipo:';echo $tipo;echo'</p>';
				echo '<p>CPU:';echo $cpu;echo'</p>';
				echo '<p>MHz:';echo $mhz;echo'</p>';
				echo '<p>RAM:';echo $ram;echo'</p>';
				echo '<p>Disco Duro (GB):';echo $disco_duro;echo'</p>';
				echo '<p>CD/DVD:';echo $cd_dvd;echo'</p>';
				echo '<p>Floppy:';echo $floppy;echo'</p>';
				echo '<p>Ethernet:';echo $ethernet;echo'</p>';
				echo '<p>Fuente Alimentación:';echo $fuente_alimentacion;echo'</p>';
				echo '<p>Notas:';echo $notas;echo'</p>';
				echo '<p>Campaña número:';echo $campana_numero;echo'</p>';
				echo '<p>Puntuación CPU:';echo $puntuacion_cpu;echo'</p>';
				echo '<p>Puntuación RAM:';echo $puntuacion_ram;echo'</p>';
				echo '<p>Puntuación DD:';echo $puntuacion_dd;echo'</p>';
				echo '<p>Puntuación:';echo $puntuacion;echo'</p>';
				echo '<p>Fecha de modificación:';echo $ultima_modificacion;echo'</p>';
        echo "
";
}

		echo'

		<div class="row section clients topspace">
			<h2 class="section-title"><span>Clients</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="assets/images/sample_clients.png" alt="">
				</p>
			</div>
		</div> <!-- /section -->

	</div>	<!-- /container -->

</main>';
require_once('footer.php');
?>

