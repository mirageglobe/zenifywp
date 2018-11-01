<?php
/**
 * The template for displaying Comments
*/

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
  return;
?>

<div id="comments" class="comments-area">

  <hr>

  <?php if ( have_comments() ) : ?>
  <p class="texttitle">Comments</p>
  <p class="texttiny">
  <?php
    printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'zenifywp' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
  </p>

  <ol class="comment-list texttiny">
  <?php
    wp_list_comments( array(
      'style'       => 'ul',
      'short_ping'  => true,
      'avatar_size' => 30,
    ) );
  ?>
  </ol><!-- .comment-list -->

  <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
  ?>

  <nav class="navigation comment-navigation" role="navigation">
    <p class="screen-reader-text section-heading texttiny">
      <?php _e( 'Comment navigation', 'zenifywp' ); ?>
    </p>

    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zenifywp' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zenifywp' ) ); ?></div>
  </nav><!-- .comment-navigation -->

  <?php endif; // Check for comment navigation ?>

  <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <br>
    <p class="texttiny no-comments"><?php _e( 'Comments are closed.' , 'zenifywp' ); ?></p>
  <?php endif; ?>

<?php endif; // have_comments() ?>

  <div>
    <?php comment_form(); ?>
  </div>

</div><!-- #comments -->
