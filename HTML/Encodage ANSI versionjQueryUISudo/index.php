<?php
session_start(); // on attribue un identifiant de session à l'internaute
$fic = fopen('compteur_de_visites.txt', 'r+'); // on ouvre le fichier qui contient le nombre de visites
if($fic == FALSE ){ // verification de la bonne ouverture de fichier
	echo "Erreur lors de l'ouverture du fichier compteur_de_visites.txt";
}
else{	
	$compteur = fgets($fic);	// on récupère le compteur du fichier
	fclose($fic); // on ferme le fichier
	if(!isset($_SESSION['compteur_de_visite'])) // on regarde si un attribut de session 'compteur_de_visite' est déjà
												// défini, si oui alors l'internaute est déjà venu sur ce site
												// 	       si non alors on crée cet attribut de session pour l'internaute en train de
												//		          de consulter le site internet, et donc, l'internaute n'est pas
												//				  venu sur ce site
	{
	$_SESSION['compteur_de_visite'] = 'visite'; // création de l'attribut de session
	$compteur++;								// on incrémente le compteur de visite
	$fic = fopen('compteur_de_visites.txt', 'w+');	// on ouvre le fichier en w+ afin de supprimer son contenu
															
	if($fic == FALSE ){						    // verification de la bonne ouverture de fichier
		echo "Erreur lors de l'ouverture du fichier compteur_de_visites.txt";
	}		
															
	$ecriture=fputs($fic, $compteur);           // on écris dans le fichier le nombre de visites
															
	if($ecriture==FALSE){						// verification de la bonne écriture dans le fichier
		echo "Erreur lors de l'écriture dans le fichier copteur_de_visites.txt";
	}
															
	fclose($fic); // fermture du fichier
	}
												
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="ANSI">
	<title>Accueil</title>
	<link rel="stylesheet" href="nouveaustyle.css" type="text/css" media="all" />
	<script type="Text/Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.sudoSlider.min.js"></script>
	<script>
		$(document).ready(function(){	// Configuration du diaporama
			$("#slider").sudoSlider({ 
				fade: true,
				auto:true,
				autowidth:true,
				fadespeed:'3000',
			});
		  });
	</script>
</head>


<body>

		<div id="global">
			<div id="page">
				<div id="header">
					<img src="img/header5.png" alt="slogan de l'accueil" />
					
					<div id="fond_cadre_header">
					
						<!-- Menu de navigation -->
						
						<div id="menu">
								<ul>
									<li><a id="onglet_actif" href="home.php">Accueil</a></li>
									<li><a id="onglet_inactif" href="societe.html">Société</a></li>
									<li><a id="onglet_inactif" href="activites_premiere.html">Activités</a></li>
									<li><a id="onglet_inactif" href="references.html">Références</a></li>
									<li><a id="onglet_inactif" href="contact.html">Contact</a></li>
								</ul>
						</div>	
								
						<div id="fond_slideshow">
								<div id="slideshow"> 

									<div id="container">
								
										<div id="slider" >
										
										<!-- Diaporama -->
										
											<ul>
												<li><img src="diaporama/diaporama1.png" alt="Slider1"/></li>
												<li><img src="diaporama/diaporama3.png" alt="Slider2"/></li>
												<li><img src="diaporama/diaporama4.png" alt="Slider3"/></li>
												<li><img src="diaporama/diaporama2.png" alt="Slider4 "/></li>
											</ul>
											
										<!-- Fin diaporama -->
										
										</div>

									</div>
									
								</div>
						</div>
					</div>
				</div>	
				
				<div id="cadre_accueil">
				
					<!-- Titre avec son logo et contour -->
					
					<div id="contouricone"><div id="QSN">Qui sommes-nous?</div></div>
					<div id="iconeaccueil"></div>
					<div id="post-content">
					
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TROUVE ICI -->	
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TROUVE ICI -->	


									Le bureau SolEtude s.à r.l. a pour vocation
									de pouvoir apporter à une large clientèle telles qu’entreprises
									publiques et privées, administrations, bureaux d’ingénieurs, collectivités et 
									particuliers, un service de qualité dans le domaine de la consultance en matière
									d’étude des sols d’un point de vue géologique et environnemental (problématique des
									sous-sols et des eaux pollués) et géotechnique. Nous nous tenons à votre entière disposition
									pour toutes questions et demandes en relation avec ces domaines. Bonne navigation de la part
									de l'équipe SolEtude!
									
									
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TERMINE ICI -->	
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TERMINE ICI -->	
					
					</div>
					<img id="logo_accueil" src="img/Logo-accueil2.png" alt="Logo SolEtude" />
				</div>
				
				<!-- Footer -->
				<div id="footer">
					<div id="footer_menu"> 	
						<a href="mentions_legales.html">Mentions légales</a>
					</div>
				</div>
				<!-- Fin footer -->
				
				<!-- Icone menu gauche -->
				<div id="icone_menu"></div>
				
				
				
				
			</div>
		</div>
</body>
</html>
