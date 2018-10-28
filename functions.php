<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
//add_image_size( 'thumb600', 600, 150, true );
//add_image_size( 'thumb300', 300, 100, true );
/*
  ref: https://developer.wordpress.org/reference/functions/add_image_size/
*/

/************* THEME SETTINGS ********************/


function zenify_customize_register($wp_customize) {

    $wp_customize->add_section('zwp_section', array(
        'title'    => __('Zenify Settings', 'zenifywp'),
        'capability' => 'edit_theme_options',
        'description' => __('Allows you to edit layout','zenifywp'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('zwp_menu_layout_setting', array(
        'default'        => 'top',
        'type'           => 'option',
    ));

    $wp_customize->add_control('zwp_menu_layout_control', array(
        'label'      => __('Menu layout', 'zenifywp'),
        'section'    => 'zwp_section',
        'settings'   => 'zwp_menu_layout_setting',
        'type'       => 'radio',
        'choices'    => array(
            'top' => __('Top menu', 'zenifywp'),
            'left' => __('Left menu', 'zenifywp'),
            'right' => __('Right menu', 'zenifywp')
        ),
    ));
}

add_action('wp_head','zenify_settings_customizer');
add_action('customize_register','zenify_customize_register');

/************* ACTIVE SIDEBARS ********************/

function register_styles() {

  if (!is_admin()) {
    // register main stylesheet
    wp_register_style( 'zen-stylesheet', get_stylesheet_directory_uri() . '/library/style.css', array(), '', 'all' );

    // enqueue styles and scripts
    wp_enqueue_style( 'zen-stylesheet' );
  }

}

add_action( 'wp_enqueue_scripts', 'register_styles', 999 );


/************* FIX Standard Content Layout ********************/

if (!isset($content_width)) {
  $content_width = 950;
}

/************* FIX WooCommerce Compatibility ********************/

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>
