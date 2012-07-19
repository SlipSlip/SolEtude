<?php
session_start(); // on attribue un identifiant de session � l'internaute
$fic = fopen('compteur_de_visites.txt', 'r+'); // on ouvre le fichier qui contient le nombre de visites
if($fic == FALSE ){ // verification de la bonne ouverture de fichier
	echo "Erreur lors de l'ouverture du fichier compteur_de_visites.txt";
}
else{	
	$compteur = fgets($fic);	// on r�cup�re le compteur du fichier
	fclose($fic); // on ferme le fichier
	if(!isset($_SESSION['compteur_de_visite'])) // on regarde si un attribut de session 'compteur_de_visite' est d�j�
												// d�fini, si oui alors l'internaute est d�j� venu sur ce site
												// 	       si non alors on cr�e cet attribut de session pour l'internaute en train de
												//		          de consulter le site internet, et donc, l'internaute n'est pas
												//				  venu sur ce site
	{
	$_SESSION['compteur_de_visite'] = 'visite'; // cr�ation de l'attribut de session
	$compteur++;								// on incr�mente le compteur de visite
	$fic = fopen('compteur_de_visites.txt', 'w+');	// on ouvre le fichier en w+ afin de supprimer son contenu
															
	if($fic == FALSE ){						    // verification de la bonne ouverture de fichier
		echo "Erreur lors de l'ouverture du fichier compteur_de_visites.txt";
	}		
															
	$ecriture=fputs($fic, $compteur);           // on �cris dans le fichier le nombre de visites
															
	if($ecriture==FALSE){						// verification de la bonne �criture dans le fichier
		echo "Erreur lors de l'�criture dans le fichier copteur_de_visites.txt";
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
									<li><a id="onglet_inactif" href="societe.html">Soci�t�</a></li>
									<li><a id="onglet_inactif" href="activites_premiere.html">Activit�s</a></li>
									<li><a id="onglet_inactif" href="references.html">R�f�rences</a></li>
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


									Le bureau SolEtude s.� r.l. a pour vocation
									de pouvoir apporter � une large client�le telles qu�entreprises
									publiques et priv�es, administrations, bureaux d�ing�nieurs, collectivit�s et 
									particuliers, un service de qualit� dans le domaine de la consultance en mati�re
									d��tude des sols d�un point de vue g�ologique et environnemental (probl�matique des
									sous-sols et des eaux pollu�s) et g�otechnique. Nous nous tenons � votre enti�re disposition
									pour toutes questions et demandes en relation avec ces domaines. Bonne navigation de la part
									de l'�quipe SolEtude!
									
									
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TERMINE ICI -->	
					<!-- LE CONTENU DE LA PAGE D'ACCUEIL SE TERMINE ICI -->	
					
					</div>
					<img id="logo_accueil" src="img/Logo-accueil2.png" alt="Logo SolEtude" />
				</div>
				
				<!-- Footer -->
				<div id="footer">
					<div id="footer_menu"> 	
						<a href="mentions_legales.html">Mentions l�gales</a>
					</div>
				</div>
				<!-- Fin footer -->
				
				<!-- Icone menu gauche -->
				<div id="icone_menu"></div>
				
				
				
				
			</div>
		</div>
</body>
</html>
