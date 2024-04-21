<?php

/**
 * function To Add My Custom styles
 * Added By astr
 *  wp_enqueue_style
 */

 function Nea_astr_link_styles(){
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . "/assets/css/style.css",array('bootstrapcss'),'1.0','all');
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '5.3.3', 'all' );

  //  wp_enqueue_style( 'awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
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
    //Removes a registered jquery.
   // wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), array(), false, true );
     wp_enqueue_script('jquery');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.js", array(),false, true );
  wp_enqueue_script( 'bootstrap-main', get_template_directory_uri() . "/assets/js/main.js", array(),false, true);
 
  
  };
  add_action('wp_enqueue_scripts', 'Nea_astr_link_scripts');
  