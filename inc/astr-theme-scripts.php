<?php

/**
 * function To Add My Custom styles
 * Added By astr
 *  wp_enqueue_style
 */

 function Nea_astr_link_styles(){
   wp_enqueue_style( 'stylesheet', get_template_directory_uri() . "/assets/css/style.css",array('bootstrapcss'),'1.0.0','all');
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.4.1', 'all' );
    wp_enqueue_style( 'googleapis',"https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap",array(),'5.13.0','all');
  
  };
  // add_action
  add_action('wp_enqueue_scripts', 'Nea_astr_link_styles');
  
  
  /**
  * function To Add My Custom scripts
  * Added By astr
  *  wp_enqueue_script
  */
  
  
  
  function Nea_astr_link_scripts(){
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(),'3.4.1', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(),'4.4.1', true );
  wp_enqueue_script( 'bootstrap-main', get_template_directory_uri() . "/assets/js/main.js", array(),'1.0.0', true);
 
  
  };
  add_action('wp_enqueue_scripts', 'Nea_astr_link_scripts');
  