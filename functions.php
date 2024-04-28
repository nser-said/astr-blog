<?php
/**
* Functions template.
*
* @package astr-blg
*/
//Defining the main folder path for the blog template

define( 'ASTR_BLOG_DIR', get_template_directory(__FILE__));

// Including the necessary core files
// Include required core files.
 require_once ( ASTR_BLOG_DIR . '/inc/astr-theme-support.php');
 require_once ( ASTR_BLOG_DIR . '/inc/astr-theme-scripts.php');
 require_once ( ASTR_BLOG_DIR . '/inc/astr-theme-widgets.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-colors.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-fonts.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-logo.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-Heabings.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-menu.php');
 require_once ( ASTR_BLOG_DIR . '/inc/Customizer/astr-theme-customizer-Homepage-Hero.php');

 function custom_register_block_styles() {
    wp_register_style(
        'custom-block-styles', // اسم النمط الخاص بك
        get_template_directory_uri() . '/path/to/your/block-style.css', // المسار إلى ملف النمط الخاص بك
        array(), // اعتماديات النمط إذا كانت هناك
 // إصدار الملف لتحديث النمط
    );
}
add_action( 'init', 'custom_register_block_styles' );

function custom_register_block_patterns() {
    register_block_pattern(
        'custom-block-pattern', // اسم النمط الخاص بك
        array(
            'title'       => 'Custom Block Pattern', 'astr-blog' , // عنوان النمط
            'description' =>  'Description of custom block pattern', // وصف النمط
            'content'     => 'Your block pattern content goes here', // محتوى النمط
            'categories'  => array( 'text' ), // الفئة التي ينتمي إليها النمط
        )
    );
}
add_action( 'init', 'custom_register_block_patterns' );

function custom_editor_styles() {
    add_editor_style( 'editor-styles.css' ); // استبدل editor-styles.css بمسار الملف CSS الخاص بك
}
add_action( 'after_setup_theme', 'custom_editor_styles' );


// تحقق من عرض الردود على التعليقات في صفحات المحتوى المفردة
function enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply_script' );

load_theme_textdomain( 'astr-blog', get_template_directory() . '/languages' );






