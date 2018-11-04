<?php if((get_option('zwp_menu_layout_setting')=='top')||(get_option('zwp_menu_layout_setting')=='')) { //if selected menu top ?>
<div class="col-md-10 col-md-offset-1">
<?php } //end if ?>
<?php if(get_option('zwp_menu_layout_setting')=='left') { //if selected menu left ?>
<div class="col-md-3">
  <br>
  <?php
    get_template_part( 'menuboxside' );
    // get the template file. same as include.
  ?>
</div>
<div class="col-md-9">
<?php } //end if ?>
<?php if(get_option('zwp_menu_layout_setting')=='right') { //if selected menu left ?>
<div class="col-md-9">
<?php } //end if ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
            <?php
            // check if the post has a Post Thumbnail assigned to it. and set it as the image default for the post
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('full');
              echo '<br>';
            }
            ?>
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
          <?php if((get_option('zwp_menu_show_author_setting')=='show')||(get_option('zwp_menu_show_author_setting')=='')) { //if selected show or default empty ?>
            <i class="fa fa-user"></i> <?php echo get_the_author();?>
          <?php } //end if ?>
        </div>
        <br>
        <div class="pull-right texttiny">
          <?php the_tags() ?>
        </div>
        <br>
        <div class="pull-right texttiny">
          <?php wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zenifywp' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
          ) ); ?>
        </div>
        <br>
        <div class="texttiny">
          <div class="pull-left">
            <?php previous_post_link( '<i class="fa fa-arrow-circle-o-left"></i> Previous: %link', '<span class="meta-nav">' . _x( '', 'Previous post link', 'zenifywp' ) . '</span> %title' ); ?>
          </div>
          <div class="pull-right">
            <?php next_post_link( '<i class="fa fa-arrow-circle-o-right"></i> Next: %link', '%title <span class="meta-nav">' . _x( '', 'Next post link', 'zenifywp' ) . '</span>' ); ?>
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

<?php if(get_option('zwp_menu_layout_setting')=='right') { //if selected menu right ?>
<div class="col-md-3">
  <br>
  <?php
    get_template_part( 'menuboxside' );
    // get the template file. same as include.
  ?>
</div>
<?php } //end if ?>

