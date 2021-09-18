<!-- top nav collapse -->
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

  $menubarpill = str_replace('<ul>', '<ul class="nav nav-pills nav-stacked">', $menubarpill);
  $menubarpill = str_replace("<ul class='children'>", '<ul class="nav nav-pills nav-stacked">', $menubarpill);
  $menubarpill = str_replace('><a href', '><a href', $menubarpill);

  echo $menubarpill;
  ?>
</div>
<div>
  <?php register_sidebar( $args ); ?>
</div>
