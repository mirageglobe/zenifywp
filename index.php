<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <?php get_header(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Anchor for top scroller -->
    <a id="top"></a>

    <div class="container">

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
        </div>
      </nav>
      <!-- end top nav -->

      <!-- search form -->
      <div class="pull-right texttiny zen_searchform">
        <?php get_search_form(); ?>
      </div>
      <!-- end search form -->

      <!-- start top slider -->
      <?php if(is_front_page()): ?>

      <?php
        get_template_part( 'splash' );
        // get the content splash template file. same as include
      ?>

      <?php endif; ?>
      <!-- end top slider -->

      <!-- start content -->
      <div class="col-md-10 col-md-offset-1">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/BlogPosting">

          <header class="clearfix">

            <?php if (is_front_page () && (get_post_type()=='page')): ?>
            <!--Main Page Contents-->

            <?php elseif (is_front_page () && (get_post_type()=='post')): ?>
            <!--Main List Posts -->

            <div class="">
              <a href="<?php echo esc_url(get_permalink());?>">
                <div class="texttitle">
                  <?php the_title(); ?>
                </div>
              </a>
              <small>
                <i class="fa fa-clock-o"></i> <?php echo esc_html(get_the_date());?>
              </small>

              <br>
              <br>
            </div>

            <?php else: ?>
            <!--Main Posts Contents -->

            <a href="<?php echo esc_url(get_permalink());?>">
              <div class="texttitle">
                <?php the_title(); ?>
                <br>
                <br>
              </div>
            </a>

            <?php endif; ?>

          </header>

          <section class="clearfix" itemprop="articleBody">

            <div class="text">
              <?php if(is_singular()): ?>

              <!-- is singular displays posts or pages and is single displays just posts -->

              <?php
                the_content();
              ?>

              <?php endif; ?>
            </div>
          </section>

          <footer class="clearfix">
            <?php if(is_singular()): ?>

            <!-- is singular displays posts or pages and is single displays just posts -->
            <br>
            <br>
            <div class="pull-right texttiny">
              <i class="fa fa-arrow-circle-o-up"></i> <a href="#top">Top</a>
              <i class="fa fa-home"></i> <a class="" href="<?php echo home_url(); ?>">Home</a>
              <i class="fa fa-user"></i> <?php echo get_the_author();?>
            </div>
            <br>
            <hr>
            <div class="texttiny">
              <div class="pull-left">
                <?php previous_post_link( '<i class="fa fa-arrow-circle-o-left"></i> Previous: %link', '<span class="meta-nav">' . _x( '', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?>
              </div>
              <div class="pull-right">
                <?php next_post_link( '<i class="fa fa-arrow-circle-o-right"></i> Next: %link', '%title <span class="meta-nav">' . _x( '', 'Next post link', 'twentytwelve' ) . '</span>' ); ?>
              </div>
            </div>

            <?php comments_template(); ?>

            <?php endif; ?>
          </footer>

        </article>

        <?php endwhile; else : ?>

        <!-- if nothing is found ... -->

        <article>

          <header class="clearfix">

            <div class="texttitle">
              Oops ...
              <br>
              <br>
            </div>

          </header>

          <section class="clearfix">

            <div class="text">
              <p>
                Post not found. Try checking the url or search from searchbox above.
              </p>
              <br>
              <br>
            </div>

          </section>

          <footer class="clearfix">

            <div class="text">
              <br>
              <br>
              <div class="pull-right texttiny">
                <i class="fa fa-arrow-circle-o-up"></i> <a href="#top">Top</a>
                <i class="fa fa-home"></i> <a class="" href="<?php echo home_url(); ?>">Home</a>
              </div>
            </div>

          </footer>

        </article>

        <?php endif; ?>

      </div>

      <!-- optional sidebar content -->
      <div class="col-md-1">
        <p></p>
      </div>
      <!-- end sidebar content -->

      <!-- optional lowermenu content -->
      <div class="col-md-12">
      <?php
        get_template_part( 'lowermenu' );
        // get the content splash template file. same as include
      ?>
      </div>
      <!-- end lowermenu content -->

      <!-- end content -->

      <div class="col-md-12">
        <?php get_footer(); ?>
      </div>

    </div>
  </body>
</html>
