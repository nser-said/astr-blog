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

