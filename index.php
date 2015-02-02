<?php 
require_once('header.php');
require_once('menu.php');
echo'
<main id="main">

	<div class="container">			
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Consulta de ejemplo</span></h2>
			';
$url = "https://aga-osl.herokuapp.com/stock/1.json";
			$objeto = new Computadora($url);
			$objeto->dibujaTabla();
				echo'
		<div class="row section recentworks topspace">
			<h2 class="section-title"><span>Prueba Bucle JSON</span></h2>
		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>Aqui tienes un listado de los elementos que se encuentran en el google drive a traves del REST con el codigo QR generado dinamicamente.</p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="https://github.com/JAntonioMarin/AGA-OSL-Web-App" class="btn btn-primary btn-lg">Mas información</a>
				</div>
			</div></div>
		</div> <!-- /section -->

		';
		$url2 = "https://aga-osl.herokuapp.com/stock.json";
		$objeto2 = new Listado($url2);
		$objeto2->dibujaListado();

		echo'

		

	</div>	<!-- /container -->

</main>';
require_once('footer.php');
?>

