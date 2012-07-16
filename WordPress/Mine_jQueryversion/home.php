<?php/*
Template Name: Home
*/?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
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
					<?php if (function_exists('camera_meta_slideshow')) { $meta_camera = get_post_custom( $post->ID ); if(isset($meta_camera['camera_meta_slideshow'])){ echo camera_meta_slideshow($meta_camera['camera_meta_slideshow'][0]); } } ?>
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