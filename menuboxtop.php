<!-- This block is just below header -->

<!-- start top nav supports mobile -->
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
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" class="img-rounded pull-left" width="20px">&nbsp;
      <?php bloginfo( 'name' ); ?>
    </a>
  </div>

  <!-- top nav collapse -->
  <?php if((get_option('zwp_menu_layout_setting')=='top')||(get_option('zwp_menu_layout_setting')=='')) { //if selected menu top ?>
  <div class="collapse navbar-collapse" id="bsnavbar-collapse">
  <?php

  $menubarpill = wp_nav_menu(array(
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
  </div>
  <?php } //end if ?>
  <!-- end top nav -->
</nav>

