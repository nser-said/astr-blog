<?php

/*
** Register widget astr.
*/
function Nea_astr_widgets_init() {


	register_sidebar( array(
		'name'          => 'Header Social Icons',
		'id'            => 'sidebar-left',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
		'before_title'  => '<div class="widget-title"><h2>',
		'after_title'   => '</h2></div>',
	) );
	register_sidebar( array(
		'name'          => 'sidebar-right',
		'id'            => 'sidebar-right',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
		'before_title'  => '<div class="widget-title"><h2>',
		'after_title'   => '</h2></div>',
	) );



	register_sidebar( array(
		'name'          => 'footer-lfet',
		'id'            => 'footer-lfet',
		'description'   => 'Add widgets here to appear in your footer.',
		'class'         => 'widget',
		'before_widget' => '<ul">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'footer-center',
		'id'            => 'footer-center',
		'description'   => 'Add widgets here to appear in your footer.',
		'class'         => 'widget',
		'before_widget' => '<ul">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

		register_sidebar( array(
		'name'          => 'footer-right',
		'id'            => 'footer-right',
		'description'   => 'Add widgets here to appear in your footer.',
		'class'         => 'widget',
		'before_widget' => '<ul">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );


}
add_action( 'widgets_init', 'Nea_astr_widgets_init' );


function Nea_custom_search_form() {
    ob_start(); ?>
    <style>
      
        .custom-search-input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 200px;
        }
        .custom-search-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    <?php
    $form = ob_get_clean();

    $form .= '<form role="search" method="get" class="custom-search-form" action="' . esc_url(home_url('/')) . '">
                <input type="search" class="custom-search-input" placeholder="' . esc_attr('Search...') . '" value="' . get_search_query() . '" name="s" />
                <button type="submit" class="custom-search-submit">' . esc_html('Search') . '</button>
            </form>';

    return $form;
}

// Replace the default template with the custom template.
add_filter('get_search_form', 'Nea_custom_search_form');
