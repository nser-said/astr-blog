<?php


function Nea_custom_Menu_customize_register($wp_customize) {
    // Add a new panel for general customization.
    $wp_customize->add_panel('custom_panel', array(
        'title' => 'Typography',
        'priority' => 10,
    ));

    $wp_customize->add_setting('custom_font_Menu', array(
        'default'   => '',
        'type'=>'theme_mod',
    ));
    $wp_customize->add_control('custom_font_Menu', array(
        'label'     => 'font-family',
        'section'   => 'Menu_cuctom',
        'type'      => 'select',
        'input_attrs' => array(
            'style' => 'border: 2px solid aqua; color: #6610f2;',
            'placeholder' =>'font-family',
                
              ),
        'choices'   => array(
            'font1' => 'Segoe UI',
            'font2' => 'Poppins', 'sans-serif',
            'font3' =>  'Courier' , 
            'font4' =>  'Impact, Haettenschweiler, Arial Narrow Bold, sans-serif' ,
            'font5' =>   'monospace' ,
            
        ),
      
          
    ));




    $wp_customize->add_setting('custom_font_zise_Menu', array(
        'default'   => '',
        'type'=>'theme_mod',
        
    ));
    $wp_customize->add_control('custom_font_zise_Menu', array(
        'label'     => 'Font Size (px)',
        'section'   => 'Menu_cuctom',
        'type'      => 'input',
        'input_attrs' => array(
            'style' => 'border: 2px solid #6610f2; color: #6610f2;',
            'placeholder' =>'Font Size',
                
              ),
             
    
    ));


    $wp_customize->add_setting('custom_font_weight_Menu', array(
        'default'   => '',
        'type'=>'theme_mod',
        
    ));
    $wp_customize->add_control('custom_font_weight_Menu', array(
        'label' => 'Font weight(100 to 900)',
        'section'   => 'Menu_cuctom',
       'type'     => 'input',
        'input_attrs' => array(
        'style' => 'border: 2px solid #434242; color: #434242; ',
        'placeholder' =>'Font-weight',
            
          ),
        
      
    
    ));
    $wp_customize->add_setting('custom_font_transform_Menu', array(
        'default'   => '',
        'type'=>'theme_mod',
    ));
    $wp_customize->add_control('custom_font_transform_Heabings', array(
        'label'     => 'Text Transform',
        'section'   => 'Menu_cuctom',
        'type'      => 'select',
        'choices'   => array(
            'font-Transform1' => 'lowercase',
            'font-Transform2' => 'uppercase',
      
        
        ),

    
    ));
    
    $wp_customize->add_setting('custom_font_Line_Height_Menu', array(
        'default'   => '',
        'type'=>'theme_mod',
    ));
    $wp_customize->add_control('custom_font_Line_Height_Menu', array(
        'label'     => 'Line-Height (1 to 3)',
        'section'   => 'Menu_cuctom',
        'type'      => 'input',
        
        'input_attrs' => array(
            'style' => 'border: 2px solid #20c997; 
            color: #20c997;
            ',
            'placeholder' =>'Line-Height',
                
              ),
    
    ));




  

    $wp_customize->add_section( 'Menu_cuctom', 
    array(
    'title' =>  'Menu' ,
    'priority'  => 10,
    'panel' => 'custom_panel',
   
    ) 
    );

}

add_action('customize_register', 'Nea_custom_Menu_customize_register');
