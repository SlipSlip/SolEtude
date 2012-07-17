<?php/*
Template Name: SocieteEquipe
*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Société</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<script src="http://code.jquery.com/jquery-latest.js"></script>
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
					<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=7">Société</a></li>
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
				<div id="normale_contact">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						
							<div id="post-content_societe">
								<ul id="tabs">
									<li><a href="http://localhost/wordpress/?page_id=7" id="onglet_tab_inactif">Présentation</a></li>
									<li><a href="http://localhost/wordpress/?page_id=674" id="onglet_tab_inactif">    Agréments  </a></li>
									<li><a href="http://localhost/wordpress/?page_id=677" id="onglet_tab_actif_tab3">         Equipe   </a></li>
								</ul>
								<div id="content"> 
								<div id="tab3">
								<p><nav id="entreprise_equipe"></nav></p>
								<?php the_content(); ?>
								</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					
				</div>

				<div id="tout_footer_contact">
					<div id="footer_contact">
						<div id="footer_menu_contact"> 	
							<?php wp_nav_menu( array('theme_location' => 'footer')); ?>
						</div>
					</div>
				</div>
				<div id="onglet_actif_societe"><span id="onglet_actif_societe_text">Société</span></div>
				<div id="icone_menu_1_soc"></div>
				<div id="slogan_soc"></div>
			</div>
		</div>
    </body>
</html>
	
	