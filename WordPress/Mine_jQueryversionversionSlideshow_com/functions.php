
<?php // Ajout de la gestion des menus via WordPress ?>

<?php add_theme_support('nav-menus'); // je préviens wordpress que je veux utiliser les menus.
register_nav_menus( array(   // enregistrement des menus
'primary' => 'Menu principal',      // ici mon menu principal
'footer' => 'Menu en pied de page',    // ici mon menu en pied de page
    ) ); ?>
	
<?php // Ajout du slideshow ?>
<?php
if (function_exists('camera_main_ss_add')) { add_action('admin_init','camera_main_ss_add'); } ?>
<?php
wp_deregister_script('jquery');
wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, '');
wp_enqueue_script('jquery');
?>

