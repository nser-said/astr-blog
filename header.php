<?php
/**
 * Header template.
 *
 * @package astr-blg
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
    <!-- Meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="<?php echo get_bloginfo( 'author' ); ?>">

    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    }
    ?>
    <header class="header text-center">	    
        <a class="site-title pt-lg-4 mb-0" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navigation" class="collapse navbar-collapse flex-column">
        
                <?php
                // Displaying the custom logo if available
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                    if ($logo) {
                        echo '<img class="mb-3 mx-auto logo" src="' . $logo[0] . '" alt="logo">';
                    }
                }
                // Displaying the main navigation menu
                wp_nav_menu(array(
                    'menu' => 'Deskop Primary Left Sidebar',
                    'theme_location' => 'Deskop Primary Left Sidebar',
                    'items_wrap' => '<ul class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>',
                ));
                ?>
                <hr>
                <?php dynamic_sidebar( 'sidebar-left' )?>
            </div>
        </nav>
    </header>
    <div class="main-wrapper">
        <?php if (get_header_image()) : ?>
            <div id="site-header">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                </a>
            </div>
        <?php endif ?>
		
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
            <div class="search d-none d-md-block">
                <?php get_search_form(); ?>
            </div>
        </header>

	