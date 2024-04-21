<?php
 /*
 * function  Add  customizer
 * Added By astr
 * 
 * 
 * Custom color options Added by astr
 */
 
function Nea_astr_customizer_colors( $wp_customize ) { 

// إضافة وظيفة ردمج مخصصة لتنظيف القيم المدخلة للون
function sanitize_hex_colors($input) {
  // إذا كانت القيمة صالحة (تمثل لوناً صالحاً بتنسيق HEX)
 
    // تنقية القيمة المدخلة هنا
    return sanitize_hex_color( $input );

}


// Add a new customization panel.
  $wp_customize->add_panel('custom_panel', array(
    'title' => 'Global',
    'priority' => 10,
));

    $wp_customize->add_setting(
        'primary_colors',
        
        array(
          'default' => '#6f42c1',
          'transport' => 'refresh',
          'type'=>'theme_mod',
          'sanitize_callback'=>'sanitize_hex_colors',
        ) );

      $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize,
          'primary_colors',
          array(
            'label' => 'Header_Colors', 
            'section' => 'colors',
          )
        )
      );
      $wp_customize->add_section( 'colors', 
      array(
          'title' =>  'colors' ,
          'priority'  => 10,
          'description' => 'colors', 
      ) 
      );
    
    
      $wp_customize->add_setting(
        'white_colors',
        array(
        'default' => '#fff',
        'type'=>'theme_mod',
        'transport' => 'refresh',
        'sanitize_callback'=>'sanitize_hex_colors',
        
        )
        
        );
        $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'white_colors',
        array(
          'label' => 'Background-Color', 
          'section' => 'colors',
        )
        )
        );
        $wp_customize->add_section( 'colors', 
        array(
        'title' =>  'colors' ,
        'priority'  => 10,
        'description' => 'colors', 
        ) 
        );
        
  
        
      $wp_customize->add_setting(
        'font_colors',
        array(
        'default' => '#81d742',
        'type'=>'theme_mod',
        'transport' => 'refresh',
        'sanitize_callback'=>'sanitize_hex_colors',
        
        )
        
        );
        $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'font_colors',
        array(
          'label' => 'h1-h2-h3-h4-h5-h6-Color', 
          'section' => 'colors',
        )
        )
        );
  
              
      $wp_customize->add_setting(
        'text_colors',
        array(
        'default' => '#81d742',
        'type'=>'theme_mod',
        'transport' => 'refresh',
        'sanitize_callback'=>'sanitize_hex_colors',
        
        )
      
        );
        $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'text_colors',
        array(
          'label' => 'link-Color', 
          'section' => 'colors',
        )
        )
        );
  
                   
      $wp_customize->add_setting(
        'footer_colors',
        array(
        'default' => '#4f4f4f',
        'type'=>'theme_mod',
        'transport' => 'refresh',
        'sanitize_callback'=>'sanitize_hex_colors',
        
        )
        
        );
        $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'footer_colors',
        array(
          'label' => 'Footer-Color', 
          'section' => 'colors',
     
        )
        )
     
        );

 }

 add_action( 'customize_register', 'Nea_astr_customizer_colors' );


 
      /**
   * function  Add  customizer css theme_mod 
   * Added By astr
   */
  
   function Nea_astr_customize_css(){

    // Retrieving Custom Values customizer
    $header_colors = get_theme_mod('primary_colors','#6f42c1');
    $white_color = get_theme_mod('white_colors','#fff' );
    $font_color = get_theme_mod('font_colors','#fff' );
    $text_color = get_theme_mod('text_colors','#fff' );
    $footer_color = get_theme_mod('footer_colors','#fff' );

    $custom_font = get_theme_mod('custom_font');
    $custom_font_size = get_theme_mod('custom_font_size');
    $custom_font_weight = get_theme_mod('custom_font_weight');
    $custom_font_transform = get_theme_mod('custom_font_transform');
    $custom_font_Line_Height = get_theme_mod('custom_font_Line_Height');

    $custom_font_Menu = get_theme_mod('custom_font_Menu');
    $custom_font_size_Menu = get_theme_mod('custom_font_zise_Menu');
    $custom_font_weight_Menu = get_theme_mod('custom_font_weight_Menu');
    $custom_font_transform_Menu = get_theme_mod('custom_font_transform_Menu');
    $custom_font_Line_Height_Menu = get_theme_mod('custom_font_Line_Height_Menu');

// Create a custom CSS style using custom values.

echo <<< START
<style>
:root{
--primary:$header_colors;
--gray-dark:  $font_color;
--pink:  $text_color ;
--gray: $footer_color;
body{
  font-family:  $custom_font ;
}
body a{
  font-family:  $custom_font ;
}
body p{
  font-size:    $custom_font_size;
  font-family:   $custom_font_Menu ;
  text-transform: $custom_font_transform ;
  font-weight:  $custom_font_weight;
  line-height: $custom_font_Line_Height ;
}

.main-wrapper {
 background:$white_color;

}

a {
color:  $text_color ;
font-size:$custom_font_size_Menu ;
font-family:  $custom_font ;
text-transform: $custom_font_transform_Menu ;
font-weight:  $custom_font_weight_Menu;
line-height: $custom_font_Line_Height_Menu ;
}


footer {
 background-color: $footer_color;
}

</style>
START;
 };
// Adding the new style to the header.
add_action( 'wp_head','Nea_astr_customize_css' );


