<?php/*
Template Name: Contact
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
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<?php
		//Foncion permetant d'initialiser les headers
		//générés par certaines extensions
		wp_head();
		//Intégration de jQuery
		wp_enqueue_script('jquery');
		?>
		<title>Contact</title>
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
										<li><a id="onglet_inactif" href="http://localhost/wordpress/?page_id=20">Références</a></li>
										<li><a id="onglet_actif" href="http://localhost/wordpress/?page_id=15 ">Contact</a></li>
									</ul>
								</div>	

								<!-- Fin menu de navigation -->	
									
							</div>
							
							<!-- Cadre principal -->
							<div id="fond_cadre_header">
								<div id="cadre"></div>
							</div>
							
						<!-- Fin en-tete du site internet avec slogan,cadre et menu -->
						
							<div id="normale_contact">
							
								<!-- Titre avec son logo et contour -->
								<div id="contouricone2"style="float:left"><span id="prcontactez">Pour nous contacter</span></div>
								<div id="icone_contact"></div>
								
								<!-- Coordonées inscrites dans une image -->
								<div id="image_contact"></div>
								
								<!-- Séparateur central -->
								<div id="separateur_contact"></div>
								
								<!-- Plan google map -->
								<div id="googlemap">
									<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=55+Rue+de+Noertzange,+Kayl,+Luxembourg&amp;aq=1&amp;oq=55+rue+de+noertza&amp;sll=46.75984,1.738281&amp;sspn=8.143905,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=55+Rue+de+Noertzange,+Kayl,+Esch-sur-Alzette,+Luxembourg&amp;ll=49.490604,6.045923&amp;spn=0.030163,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=55+Rue+de+Noertzange,+Kayl,+Luxembourg&amp;aq=1&amp;oq=55+rue+de+noertza&amp;sll=46.75984,1.738281&amp;sspn=8.143905,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=55+Rue+de+Noertzange,+Kayl,+Esch-sur-Alzette,+Luxembourg&amp;ll=49.490604,6.045923&amp;spn=0.030163,0.084543&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
								</div>
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
							<div id="onglet_actif_contact"><span id="onglet_actif_contact_text">Contact</span></div>
							
							<!-- Icone menu gauche -->
							<div id="icone_menu_1_cont"></div>
							
							<!-- Slogan -->
							<div id="slogan_contact"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
	
	