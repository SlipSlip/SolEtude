<?php/*
Template Name: References
*/?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Références</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
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
					<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=389">Activités</a></li>
					<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=20">Références</a></li>
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
					<div id="contouricone3"style="float:left"><span id="prref">Nos références</span></div>
					<div id="icone_contact"></div>

							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div id="post-content_references">
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
				<div id="onglet_actif_references"><span id="onglet_actif_references_text">Références</span></div>
				<div id="icone_menu_1_ref"></div>
				<div id="slogan_reference"></div>
			</div>
		</div>
    </body>
</html>
	
	