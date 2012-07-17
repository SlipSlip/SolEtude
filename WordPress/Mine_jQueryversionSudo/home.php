<?php/*
Template Name: Home
*/?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		
		<script type="Text/Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.sudoSlider.min.js"></script>
	<script>
		$(document).ready(function(){	
			 var sudoSlider = $("#slider").sudoSlider({ 
				fade: true,
				auto:true,
				ease:'swing',
				autowidth:true,
				fadespeed:'3000',
				
crossFade:true
				
			});
		  });
	</script>
    </head>

    <body>
		<div id="global">
			<div id="global_home">
			<?php
			//Chargement du header - header.php
			get_header();
			?>
								
			<div id="menu">
				<ul>
					<li><a id="onglet_actif" href="http://localhost/wordpress/">Accueil</a></li>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=389">Activités</a></li>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=20">Références</a></li>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=15 ">Contact</a></li>
				</ul>
			</div>				
			</div>
			<div id="fond_cadre_header">
				<div id="cadre"></div>
			</div>
		</div>
		</div>
			<div id="fond_slideshow">
				<div id="slideshow">
					<div id="container">
							
						<div id="slider" >
							<ul>
								<li><img src="diaporama/diaporama1.png" alt="Slider1"/></li>
								<li><img src="diaporama/diaporama3.png" alt="Slider2"/></li>
								<li><img src="diaporama/diaporama4.png" alt="Slider3"/></li>
								<li><img src="diaporama/diaporama2.png" alt="Slider4 "/></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div id="cadre_accueil">
				<div id="iconeaccueil" style="float:left"></div>
				<div id="contouricone"style="float:left"></div>
				<div id="titreQSN"style="float:left">
					<p>Qui sommes-nous ?</p>
				</div>
				<div id="mainpage">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div id="post-content">
									<?php the_content(); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						  
				</div>
				<div id="logo_accueil"></div>
			</div>
				<div id="onglet_actif_accueil"><span id="onglet_actif_accueil_text">Accueil</span></div>
			</div>

		
		<?php
		//chargement du footer - footer.php
		get_footer();
		?>

    </body>
</html>