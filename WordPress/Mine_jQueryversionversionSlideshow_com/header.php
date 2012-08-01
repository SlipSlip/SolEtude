<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src="/scripts/emailpage.js"></script>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<?php/**
		*
		*<title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
		*/?>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<?php
	/**
	 * Foncion permetant d'initialiser les headers
	 * générés par certaines extensions
	 */
	 
	wp_head();
	?>
	
	<?php
	//Intégration de jQuery
	
	wp_enqueue_script('jquery');
	?>

</head>
	<body <?php body_class(); ?>>
	<div id="global">
		<div id="page">
			<div id="header" role="banner">
				<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
				<?php /*<div id="headerimg"> */ ?>
			