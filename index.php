<?php 
require_once('header.php');
require_once('menu.php');
echo'
<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">';
			$url = "https://aga-osl.herokuapp.com/stock/1.json";
			$json = file_get_contents($url);
			$json_data = json_decode($json, true);
			echo "<p>Prueba de acceso a https://aga-osl.herokuapp.com/stock/1.json</p>";
				//<p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you. it only took me <a href="sidebar-right.html">six days</a>. </p>
				echo '<p>Referencia:';echo $json_data["Referencia"];echo'</p>';
				echo '<p>revisado:';echo $json_data["revisado"];echo'</p>';
				echo '<p>Localización:';echo $json_data["Localización"];echo'</p>';
				echo '<p>Tipo:';echo $json_data["Tipo"];echo'</p>';
				echo '<p>CPU:';echo $json_data["CPU"];echo'</p>';
				echo '<p>MHz:';echo $json_data["MHz"];echo'</p>';
				echo '<p>RAM:';echo $json_data["RAM"];echo'</p>';
				echo '<p>Disco Duro (GB):';echo $json_data["Disco Duro (GB)"];echo'</p>';
				echo '<p>CD/DVD:';echo $json_data["CD/DVD"];echo'</p>';
				echo '<p>Floppy:';echo $json_data["Floppy"];echo'</p>';
				echo '<p>Ethernet:';echo $json_data["Ethernet"];echo'</p>';
				echo '<p>Fuente Alimentación:';echo $json_data["Fuente Alimentación"];echo'</p>';
				echo '<p>Notas:';echo $json_data["Notas"];echo'</p>';
				echo '<p>Campaña número:';echo $json_data["Campaña número"];echo'</p>';
				echo '<p>Puntuación CPU:';echo $json_data["Puntuación CPU"];echo'</p>';
				echo '<p>Puntuación RAM:';echo $json_data["Puntuación RAM"];echo'</p>';
				echo '<p>Puntuación DD:';echo $json_data["Puntuación DD"];echo'</p>';
				echo '<p>Puntuación:';echo $json_data["RefePuntuaciónrencia"];echo'</p>';
				echo '<p>Fecha de modificación:';echo $json_data["Fecha de modificación"];echo'</p>';
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

