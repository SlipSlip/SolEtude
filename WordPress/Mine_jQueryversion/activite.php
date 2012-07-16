<?php/*
Template Name: ActiviteEau
*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Activités</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="jquery-ui-1.8.21.custom.min.js"></script>
     <script src="jquery-1.7.2.min.js"></script>
		<script>
			$(function() {
				$("#tabs").tabs(); 														// initialisation des onglets du tableau
				$( "#tabs" ).tabs({ fx: { opacity: 'toggle', duration:'fast' } });		// ajout de l'effet " Fade " lorsque l'on clique sur un onglet
			});
		</script>
    </head>

    <body id="body_contact">
		<div id="global">
			<div id="global_contact">
				<?php
				//Chargement du header - header.php
				get_header();
				?>
					<div id="menu">
				<ul>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/">Accueil</a></li>
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
					<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=389">Activités</a></li>
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
				<div id="normale_contact">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div id="post-content_societe">

								<?php the_content(); ?>

							</div>
						<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div id="tout_footer_contact">
					<div id="footer_contact">
						<div id="footer_menu_contact"> 	
							<a id="mentions_legales_texte_du_footer" href="http://localhost/wordpress/?page_id=60">Mentions légales</a>
						</div>
					</div>
				</div>
				
				<div id="onglet_actif_activite"><span id="onglet_actif_activite_text">Activités</span></div>
				<div id="icone_menu_1_act"></div>
				<div id="slogan_act"></div>
			</div>
		</div>
    </body>
</html>
	
	