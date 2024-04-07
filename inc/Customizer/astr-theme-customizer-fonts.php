<?php
/**
 * Custom fonts options Added by astr
 */
    // Adding options to fonts.
    function Nea_custom_fonts_customize_register($wp_customize) {
        // Add a new panel for general customization.
        $wp_customize->add_panel('custom_panel', array(
            'title' => 'Typography',
            'priority' => 10,
        ));

        $wp_customize->add_setting('custom_font', array(
            'default'   => '',
            'type'=>'theme_mod',
        ));
        $wp_customize->add_control('custom_font', array(
            'label'     => 'font-family',
            'section'   => 'font_cuctom',
            'type'      => 'select',
            'input_attrs' => array(
                'style' => 'border: 2px solid aqua; color: #6610f2;',
                'placeholder' =>'Font-weight',
                    
                  ),
            'choices'   => array(
                'font1' => 'Segoe UI',
                'font2' => 'Poppins', 'sans-serif',
                'font3' =>  'Courier' , 
                'font4' =>  'Impact, Haettenschweiler, Arial Narrow Bold, sans-serif' ,
                'font5' =>   'monospace' ,
                
            ),
          
              
        ));

  


        $wp_customize->add_setting('custom_font_zise', array(
            'default'   => '',
            'type'=>'theme_mod',
            
        ));
        $wp_customize->add_control('custom_font_zise', array(
            'label'     => 'Font Size (px)',
            'section'   => 'font_cuctom',
            'type'      => 'input',
            'input_attrs' => array(
                'style' => 'border: 2px solid #6610f2; color: #6610f2;',
                'placeholder' =>'Font-weight',
                    
                  ),
                 
        
        ));


        $wp_customize->add_setting('custom_font_weight', array(
            'default'   => '',
            'type'=>'theme_mod',
            
        ));
        $wp_customize->add_control('custom_font_weight', array(
            'label' => 'Font weight(100 to 900)',
            'section'   => 'font_cuctom',
           'type'     => 'input',
            'input_attrs' => array(
            'style' => 'border: 2px solid #434242; color: #434242; ',
            'placeholder' =>'Font-weight',
                
              ),
            
          
        
        ));
        $wp_customize->add_setting('custom_font_transform', array(
            'default'   => '',
            'type'=>'theme_mod',
        ));
        $wp_customize->add_control('custom_font_transform', array(
            'label'     => 'Text Transform',
            'section'   => 'font_cuctom',
            'type'      => 'select',
            'choices'   => array(
                'font-Transform1' => 'lowercase',
                'font-Transform2' => 'uppercase',
          
            
            ),

        
        ));
        
        $wp_customize->add_setting('custom_font_Line_Height', array(
            'default'   => '',
            'type'=>'theme_mod',
        ));
        $wp_customize->add_control('custom_font_Line_Height', array(
            'label'     => 'Line-Height (1 to 3)',
            'section'   => 'font_cuctom',
            'type'      => 'input',
            
            'input_attrs' => array(
                'style' => 'border: 2px solid #20c997; 
                color: #20c997;
                ',
                'placeholder' =>'Font-weight',
                    
                  ),
        
        ));




      
   
        $wp_customize->add_section( 'font_cuctom', 
        array(
        'title' =>  'Body' ,
        'priority'  => 10,
        'panel' => 'custom_panel',
       
        ) 
        );


       
    $wp_customize->add_setting( 'lun_bookcener_footer_text', 
    array(
        'default' => 'all copyrighs',
        'type'=>'theme_mod',
    ) 
    );
    $wp_customize->add_control( 'lun_bookcener_footer_text',
        array(
          
        'setting' =>'lun_bookcener_footer_text',
            'label' => 'footer text',
            'description' => 'you can customze footer text',
        
           'type'=>'text',
           'section'=>'blog-options',
        )
    ); 
    $wp_customize->add_section( 'blog-options', 
        array(
            'title'       =>  'fooer text' ,
            'priority'    => 65,
            'description' => 'you can customze footer text', 
        ) 
    );
      }
      
      add_action('customize_register', 'Nea_custom_fonts_customize_register');


    /**
   * function  Add  customizer theme_mod
   * Added By astr
   */
  
   function Nea_astr_disply_modifcation(){
    $output =array();
    $output['text_footer'] = get_theme_mod( 'lun_bookcener_footer_text' );
    return $output;
    };
     // add_action
    add_action( 'init','Nea_astr_disply_modifcation' );


     


