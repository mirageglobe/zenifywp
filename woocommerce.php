<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <?php get_header(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Anchor for top scroller -->
    <a id="top"></a>

    <div class="container">

      <?php
        get_template_part( 'menuboxtop' );
        // get the template file. same as include.
      ?>

      <!-- search form -->
      <div class="pull-right texttiny zen_searchform">
        <?php get_search_form(); ?>
      </div>
      <!-- end search form -->

      <!-- start top slider -->
      <?php if(is_front_page()): ?>
      <div class="col-md-12">
      <?php
        get_template_part( 'splash' );
        // get the content splash template file. same as include
      ?>
      </div>
      <?php endif; ?>
      <!-- end top slider -->

      <!-- start content -->
      <div class="col-md-12">
        <div class="col-md-10 col-md-offset-1">
        <?php woocommerce_content(); ?>
        </div>
      </div>
      <!-- end content -->

      <!-- optional lowermenu content -->
      <div class="col-md-12">
      <?php
        get_template_part( 'menuboxbottom' );
        // get the template file. same as include.
      ?>
      </div>
      <!-- end lowermenu content -->

      <div class="col-md-12">
        <?php get_footer(); ?>
      </div>

    </div>
  </body>
</html>
