<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    </head>

    <body>
		<?php
		//Chargement du header - header.php
		get_header();
		?>
	 
		<div id="content">
		<!-- Chargement du contenu -->
		</div>
	 
		<?php
		//Chargement de la barre latérale - sidebar.php
		get_sidebar();
		?>
	 
		<?php
		//chargement du footer - footer.php
		get_footer();
		?>
    </body>
</html>