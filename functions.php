<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
//add_image_size( 'thumb600', 600, 150, true );
//add_image_size( 'thumb300', 300, 100, true );
/*
  ref: https://developer.wordpress.org/reference/functions/add_image_size/
*/

/************* WP CUSTOM TINY MCE EDITOR ********************/

function zenifywp_add_editor_styles() {
    add_editor_style( 'library/custom-style.css' );
}
add_action( 'admin_init', 'zenifywp_add_editor_styles' );

/************* WP THUMBNAILS ********************/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50 );

/************* WP MANAGED TITLE ********************/

add_action( 'after_setup_theme', 'zenifywp_theme_setup' );
function zenifywp_theme_setup() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}

/************* THEME SETTINGS ********************/

function zenify_customize_register($wp_customize) {

    //ref https://divpusher.com/blog/wordpress-customizer-sanitization-examples
    //radio box sanitization function
    function zenifywp_sanitize_radio( $input, $setting ){

        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible radio box options 
        $choices = $setting->manager->get_control( $setting->id )->choices;

        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

    $wp_customize->add_section('zwp_section', array(
        'title'    => __('Zenify Settings', 'zenifywp'),
        'capability' => 'edit_theme_options',
        'description' => __('Allows you to edit layout','zenifywp'),
        'priority' => 120,
    ));

    // menu layout setting
    $wp_customize->add_setting('zwp_menu_layout_setting', array(
        'default'        => 'top',
        'type'           => 'option',
        'sanitize_callback' => 'zenifywp_sanitize_radio',
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

    // menu show author
    $wp_customize->add_setting('zwp_menu_show_author_setting', array(
        'default'        => 'show',
        'type'           => 'option',
        'sanitize_callback' => 'zenifywp_sanitize_radio',
    ));

    $wp_customize->add_control('zwp_menu_show_author_control', array(
        'label'      => __('Show author', 'zenifywp'),
        'section'    => 'zwp_section',
        'settings'   => 'zwp_menu_show_author_setting',
        'type'       => 'radio',
        'choices'    => array(
            'show' => __('Show', 'zenifywp'),
            'hide' => __('Hide', 'zenifywp')
        ),
    ));
}

add_action('wp_head','zenify_settings_customizer');
add_action('customize_register','zenify_customize_register');

/************* WP WIDGET SIDEBARS ********************/

add_action( 'widgets_init', 'zenifywp_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'zenifywp' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'zenifywp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

/************* ACTIVE SIDEBARS ********************/

function register_styles() {

  if (!is_admin()) {
    // register main stylesheet
    wp_register_style( 'zenifywp-stylesheet', get_stylesheet_directory_uri() . '/library/custom-style.css', array(), '', 'all' );

    // enqueue styles and scripts
    wp_enqueue_style( 'zenifywp-stylesheet' );
  }

}

add_action( 'wp_enqueue_scripts', 'register_styles', 999 );

/************* RSS FEEDLINKS ********************/

// ref http://ottopress.com/2010/wordpress-3-0-theme-tip-feed-links/
add_theme_support( 'automatic-feed-links' );

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
