<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        </a>    
        <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        <?php get_search_form(); ?>
    </header>
    <?php wp_body_open(); ?>
    <?php 
if ( is_user_logged_in() ):
	$current_user = wp_get_current_user(); 
?>
	<p>
        <?php echo $current_user->user_firstname; ?>
        <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
	</p>
<?php else: ?>
    <p>
        <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
	</p>
<?php endif; ?>