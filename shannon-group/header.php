<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package shannon group
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'shannon-group' ); ?>
        </a>

	<header id="masthead" class="site-header" role="banner">
            <div class="custom_header">
                <?php if ( get_header_image() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                       class="logo_image">
                        <img src="<?php header_image(); ?>" alt="header image">
                    </a>
                <?php endif; // End header image check. ?>
                
                <button class="my-menu-toggle" aria-controls="primary-menu" 
                    aria-expanded="false">
                    <?php //esc_html_e( 'Menu', 'shannon-group' ); ?>
                </button>
                
		<nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( 
                        array( 'theme_location' => 'second', 
                               'menu_id' => 'second-menu' ) ); 
                    ?>
                    
                    <?php wp_nav_menu( 
                        array( 'theme_location' => 'primary', 
                               'menu_id' => 'primary-menu' ) ); 
                    ?>
                    
		</nav><!-- #site-navigation -->
                
            </div>
                
	</header><!-- #masthead -->

	<div id="content" class="site-content">
