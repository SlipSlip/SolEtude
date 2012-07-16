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
	<meta charset="utf-8">
	
	<title>Accueil</title>
	
	<link rel="stylesheet" href="nouveaustyle.css" type="text/css" media="all" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				play: 5000,
				pause: 5000,
				slideSpeed: 1500,
				fadeSpeed: 2050,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
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
										<div id="example">
											<div id="slides">
												<div class="slides_container">
												
													<div class="slide">
														<a href="diaporama/diaporama1.png" title="diaporama1" ><img src="diaporama/diaporama1.png" width="915" height="250" alt="diaporama1"></a>
														<div class="caption" style="bottom:0">
															<p id="legende">Site en cours de construction : Image 1</p>
														</div>
													</div>
													
													<div class="slide">
														<a href="diaporama/diaporama2.png" title="diaporama2" t><img src="diaporama/diaporama2.png" width="915" height="250" alt="diaporama2"></a>
														<div class="caption" style="bottom:0">
															<p id="legende">Site en cours de construction : Image 2</p>
														</div>
													</div>
													
													<div class="slide">
														<a href="diaporama/diaporama3.png" title="diaporama3" ><img src="diaporama/diaporama3.png" width="915" height="250" alt="diaporama3"></a>
														<div class="caption" style="bottom:0">
															<p id="legende">Site en cours de construction : Image 3</p>
														</div>
													</div>
													
													<div class="slide">
														<a href="diaporama/diaporama4.png" title="diaporama4" ><img src="diaporama/diaporama4.png" width="915" height="250" alt="diaporama4"></a>
														<div class="caption" style="bottom:0">
															<p id="legende">Site en cours de construction : Image 4</p>
														</div>
													</div>
													
												</div>
												
											</div>
										</div>

									</div>
									
								</div>
						</div>
					</div>
				</div>	
				
				<div id="cadre_accueil">
					<div id="contouricone"><div id="QSN">Qui sommes-nous?</div></div>
					<div id="iconeaccueil"></div>
					<div id="post-content">
									SolEtude s.� r.l. est n�e de la volont� de deux g�ologues, Messieurs Franck LIGI
									et Luc FRANCK, de pouvoir apporter � une large client�le telles qu�entreprises
									publiques et priv�es, administrations, bureaux d�ing�nieurs, collectivit�s et 
									particuliers, un service de haute qualit� dans le domaine de la consultance en mati�re
									d��tude des sols d�un point de vue g�ologique, environnemental (probl�matique des
									sous-sol pollu�s) et g�otechnique. Pour tous renseignements suppl�mentaires, vous 
									pouvez nous contacter � l�aide des coordonn�es qui vont sont fournies dans la partie
									� Contact � de ce site.	
					</div>
					<img id="logo_accueil" src="img/Logo-accueil2.png" alt="Logo SolEtude" />
				</div>
				
				<div id="footer">
					<div id="footer_menu"> 	
						<a href="mentions_legales.html"> <?php echo '<strong>'.$compteur.'</strong>'; ?> | Mentions l�gales</a>
					</div>
				</div>
				
				<div id="icone_menu"></div>
				<p id="compteur"></p>
				
				
				
			</div>
		</div>
</body>
</html>
