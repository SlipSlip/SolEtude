<?php/*
Template Name: Home
*/?>

<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="utf-8" />
		<script type="text/javascript" src="/scripts/emailpage.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />	
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
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
							<div id="header" role="banner">

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
							<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
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

		
			<div id="tout_footer">
				<div id="footer">		
						<div id="footer_menu"> 	
							<a id="mentions_legales_texte_du_footer" href="http://localhost/wordpress/?page_id=60">Mentions légales</a>
						</div>
					<div id="icone_menu_1"></div>
				</div>
			</div>
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