<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
//add_image_size( 'thumb600', 600, 150, true );
//add_image_size( 'thumb300', 300, 100, true );
/*
  ref: https://developer.wordpress.org/reference/functions/add_image_size/
*/

/************* THEME SETTINGS ********************/

add_action('customize_register','zenify_customize_register');

function zenify_customize_register($wp_customize){

    $wp_customize->add_section('themename_menu_layout', array(
        'title'    => __('Zenify Settings', 'zenifywp'),
        'description' => '',
        'priority' => 120,
    ));

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[menu_layout]', array(
        'default'        => 'value1',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('themename_zenify_wp', array(
        'label'      => __('Top Menu Layout', 'themename'),
        'section'    => 'themename_menu_layout',
        'settings'   => 'themename_theme_options[menu_layout]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Top',
            'value2' => 'Right',
            'value3' => 'Left',
        ),
    ));
}

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
