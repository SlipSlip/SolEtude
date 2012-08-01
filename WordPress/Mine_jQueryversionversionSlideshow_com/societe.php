<?php/*
Template Name: Societe
*/?>

<!DOCTYPE html>

<html>
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		
		<?php
		//Foncion permetant d'initialiser les headers
		//générés par certaines extensions
		wp_head();
		?>
		
		<?php
		//Intégration de jQuery
		wp_enqueue_script('jquery');
		?>
		
		<title>Société</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="jquery-ui-1.8.21.custom.min.js"></script>
		<script src="jquery-1.7.2.min.js"></script>
		<script>
			$(function() {
				$("#tabs").tabs(); 														// initialisation des onglets du tableau
				$("#tabs").tabs({ fx: { opacity: 'toggle', duration:'fast' } });		// ajout de l'effet " Fade " lorsque l'on clique sur un onglet
			});
		</script>
</head>

    <body id="body_contact">
		<div id="global">
			<div id="global_contact">
				<div id="body_interne">
					<div id="global">
						<div id="page">
							
							<!-- En-tete du site internet avec slogan,cadre et menu -->

							<div id="header" role="banner">
							
								<!-- Menu de navigation -->
								
								<div id="menu">
									<ul>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/">Accueil</a></li>
										<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
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
							
							<!-- Fin en-tete du site internet avec slogan,cadre et menu -->
							
							<!-- Boîte à onglets, il faudra peut-être mettre à  jour la disposition des images-->

							<div id="normale_contact">
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div id="post-content_societe">
											<?php the_content(); ?>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>				
							</div>

							<!-- Fin boîte à onglets -->
							
							<!-- Footer -->
							<div id="tout_footer_contact">
									<div id="footer_contact">
										<div id="footer_menu_contact"> 	
											<a id="mentions_legales_texte_du_footer" href="http://localhost/wordpress/?page_id=60">Mentions légales</a>
										</div>
									<div id="icone_menu_1_soc"></div>
								</div>
							</div>
							<!-- Fin footer -->
							
							<!-- Slogan -->
							<div id="slogan_soc"></div>	
							
						</div>
					</div>
				</div>
			</div>											
		</div>										
    </body>
</html>
	
	