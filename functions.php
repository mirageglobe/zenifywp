<?php

//require_once( 'library/addfunction.php' );

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'thumb-600', 600, 150, true );
add_image_size( 'thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

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

?>
