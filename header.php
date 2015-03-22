<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title(''); ?></title>

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>
  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <link href="//cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/bootswatch/3.2.0.1/simplex/bootstrap.min.css" rel="stylesheet">

  <!-- wordpress head -->
  <?php wp_head(); ?>
  <!-- wordpress head -->
</head>

<body <?php body_class(); ?>>

<br>
<a id="top"></a> 
<!--Anchor top tag-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bsnavbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" class="img-rounded" alt="Responsive image" width="25px"> <?php bloginfo( 'name' ); ?>
          </a>
          
        </div>

        <div class="collapse navbar-collapse" id="bsnavbar-collapse">
        <?php 

        $menubarpill = wp_page_menu(array(
          'depth'       => 0,
          'sort_column' => 'menu_order, post_title',
          'menu_class'  => 'menu',
          'include'     => '',
          'exclude'     => '',
          'echo'        => false,
          'show_home'   => false,
          'link_before' => '',
          'link_after'  => '' 
        )); 

        $menubarpill = str_replace('<ul>', '<ul class="nav navbar-nav navbar-right">', $menubarpill);
        $menubarpill = str_replace("<ul class='children'>", '<ul class="dropdown-menu">', $menubarpill);

        echo $menubarpill;

        ?>
        </div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
</div>
