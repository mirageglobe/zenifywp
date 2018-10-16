<div class="col-md-10 col-md-offset-1">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/BlogPosting">

      <!-- micro header -->
      <header class="clearfix">

        <?php if (is_front_page() && is_page()): ?>
        <!-- if is set as front and is page type - so that no title appears -->

        <div class="texttitle">
        </div>

        <?php elseif (is_front_page()): ?>
        <!-- if is set as front - usually the list of post -->

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

        <?php else: ?>
        <!-- else - usually the full single page/post -->

        <a href="<?php echo esc_url(get_permalink());?>">
          <div class="texttitle">
            <?php the_title(); ?>
              <br>
              <br>
          </div>
        </a>

        <?php endif; ?>

      </header>

      <!-- micro content -->
      <?php if(is_singular()): ?>
      <section class="clearfix" itemprop="articleBody">
        <div class="text">
            <!-- is singular displays posts or pages and is single displays just posts -->
            <?php the_content(); ?>
        </div>
      </section>
      <?php endif; ?>

      <!-- micro footer -->
      <?php if(is_singular()): ?>
      <footer class="clearfix">

        <!-- is singular displays posts or pages and is single displays just posts -->
        <br>
        <br>
        <div class="pull-right texttiny">
          <i class="fa fa-arrow-circle-o-up"></i> <a href="#top">Top</a>
          <i class="fa fa-home"></i> <a class="" href="<?php echo home_url(); ?>">Home</a>
          <i class="fa fa-user"></i> <?php echo get_the_author();?>
        </div>
        <br>
        <div class="texttiny">
          <div class="pull-left">
            <?php previous_post_link( '<i class="fa fa-arrow-circle-o-left"></i> Previous: %link', '<span class="meta-nav">' . _x( '', 'Previous post link', 'zenifywordpress' ) . '</span> %title' ); ?>
          </div>
          <div class="pull-right">
            <?php next_post_link( '<i class="fa fa-arrow-circle-o-right"></i> Next: %link', '%title <span class="meta-nav">' . _x( '', 'Next post link', 'zenifywordpress' ) . '</span>' ); ?>
          </div>
        </div>

        <?php comments_template(); ?>
      </footer>
      <?php endif; ?>

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

      </article>

      <?php endif; ?>

</div>
