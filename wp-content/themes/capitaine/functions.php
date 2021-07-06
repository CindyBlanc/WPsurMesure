<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function capitaine_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'capitaine_remove_menu_pages' );

function capitaine_register_assets() {
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
         'jquery', 
         'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
         false, 
         '3.3.1', 
         true 
                );
    // Déclarer le JS
    wp_enqueue_script('capitaine');
    
    // Seulement sur la page d'accueil
    if( is_front_page() ) {
    	wp_enqueue_script('diaporama');
    }
}
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );


add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

register_nav_menus( array(
	'main' => 'menu principal',
	'footer' => 'Bas de page',
) );