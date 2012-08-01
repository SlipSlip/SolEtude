<?php/*
Template Name: Home
*/?>

<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />	
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<script type="Text/Javascript" src="jquery/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.sudoSlider.min.js"></script>

		<?php
		/**
		* Foncion permetant d'initialiser les headers
		* générés par certaines extensions
		*/	 
		wp_head();
		?>
		<?php
		wp_enqueue_script('jquery'); // Intégration de jQuery
		?>		
		<title>Accueil</title>
	</head>

    <body>
		<div id="global">
			<div id="global_home">
				<body <?php body_class(); ?>>
					<div id="global">
						<div id="page">
						
						<!-- En-tete du site internet avec slogan,cadre,menu et diaporama -->
						
							<div id="header" role="banner">

								<!-- Menu de navigation -->
								
								<div id="menu">
									<ul>
										<li><a id="onglet_actif" href="http://localhost/wordpress/">Accueil</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=389">Activités</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=20">Références</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=15 ">Contact</a></li>
									</ul>
								</div>	

								<!-- Fin menu de navigation -->
								
							</div>
							
							
						
						
						<!-- Cadre principal -->
							<div id="fond_cadre_header">
								<div id="cadre"></div>
							</div>
							
						<!-- Fin en-tete du site internet avec slogan,cadre,menu et diaporama -->
						
						</div>
						
						
					</div>
					
					<!-- Diaporama -->
					<div id="fond_slideshow">
						<div id="slideshow">
							<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
						</div>
					</div>
					<!-- Fin diaporama -->
					
					<!-- Cadre inférieur -->
					<div id="cadre_accueil">
						<div id="iconeaccueil" style="float:left"></div>
						<div id="contouricone"style="float:left"></div>
						<div id="titreQSN"style="float:left">
							<p>Qui sommes-nous ?</p>
						</div>
						
						<!-- Contenu -->
						
						<div id="mainpage">
						
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<div id="post-content">
										<?php the_content(); ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							  
						</div>
						
						<!-- Titre avec son logo et contour -->
						<div id="logo_accueil"></div>
						
					</div>
					
					<div id="onglet_actif_accueil"><span id="onglet_actif_accueil_text">Accueil</span></div>
			</div>

			<!-- Footer -->
			<div id="tout_footer">
				<div id="footer">		
						<div id="footer_menu"> 	
							<a id="mentions_legales_texte_du_footer" href="http://localhost/wordpress/?page_id=60">Mentions légales</a>
						</div>
					<!-- Icone à gauche des onglets -->
					<div id="icone_menu_1"></div>
				</div>
			</div>
			<!-- Fin footer -->
			
			<?php
			/**
			 * Inclure wp_footer juste avant la balise de fermeture </body>
			 * Cette fonction est utilisée par de nombreux plugins
			 * pour référencer leurs fichiers javascripts
			 */
			wp_footer();
			?>

		</div>
    </body>
</html>