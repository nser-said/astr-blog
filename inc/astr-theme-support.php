<?php

/**
 * function To Add My theme support
 * Added By astr
 *  add_theme_support
 */

 function Nea_astr_blog_theme_support(){
	add_theme_support( 'custom-header' );
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );

	// Let WordPress manage the document title for us
	add_theme_support( 'title-tag' );
 
	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Logo.
	$custom_logo_defaults = array(
		'width'       => 400,
		'height'      => 100,
		'flex-width'  => true,
		'flex-height' => true,
    'header-text'       => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
	);
	add_theme_support( 'custom-logo', $custom_logo_defaults );



	// This theme uses wp_nav_menu() in two locations
	register_nav_menus( array(
		'top'		=> 'Top Menu',
		'main' 		=>'Main Menu', 
		'footer' 	=>'Footer Menu',
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Gutenberg Embeds
	add_theme_support( 'responsive-embeds' ); 
  // WooCommerce
  add_theme_support( 'WooCommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	
	// Add theme support Header Image
	$args = array(
		'flex-width'    => true,
		'width'         => 980,
		'flex-height'   => true,
		'height'        => 200,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
	add_theme_support( 'custom-header', $args );

	// Add theme support Background Image
	add_theme_support( 'custom-background' );

	$another_args = array(
		'default-color'      => '0000ff',
		'default-image'      => '',
		'default-position-x' => 'right',
		'default-position-y' => 'top',
		'default-repeat'     => 'no-repeat',
	);
	add_theme_support( 'custom-background', $another_args );

	
};

// add_action
add_action( 'after_setup_theme','Nea_astr_blog_theme_support');

