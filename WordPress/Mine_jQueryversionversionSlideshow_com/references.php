<?php/*
Template Name: References
*/?>

<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<?php
		//Foncion permetant d'initialiser les headers
		//générés par certaines extensions
		wp_head();
		?>
		<?php
		//Intégration de jQuery
		wp_enqueue_script('jquery');
		?>
        <title>Références</title>
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
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=389">Activités</a></li>
										<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=20">Références</a></li>
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=15 ">Contact</a></li>
									</ul>
								</div>		

								<!-- Fin menu de navigation -->	
								
							</div>
							
							<!-- Cadre principal -->
							<div id="fond_cadre_header">
								<div id="cadre"></div>
							</div>
						
						<!-- En-tete du site internet avec slogan,cadre et menu -->
			
							<div id="normale_contact">
							
								<!-- Titre avec son logo et contour -->
								<div id="contouricone3"style="float:left"><span id="prref">Nos références</span></div>
								<div id="icone_contact"></div>
								
								<!-- Contenu -->
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div id="post-content_references">
											<?php the_content(); ?>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>

							<!-- Footer -->
							<div id="tout_footer_contact">
								<div id="footer_contact">
									<div id="footer_menu_contact"> 	
										<a id="mentions_legales_texte_du_footer" href="http://localhost/wordpress/?page_id=60">Mentions légales</a>
									</div>
								</div>
							</div>
							<!-- Fin footer -->
							
							<!-- Onglet actif -->
							<div id="onglet_actif_references"><span id="onglet_actif_references_text">Références</span></div>
							
							<!-- Icone menu gauche -->
							<div id="icone_menu_1_ref"></div>
							
							<!-- Slogan -->
							<div id="slogan_reference"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
	
	