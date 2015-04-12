<div id="sidebar" class="sidebar fourcol last clearfix" role="complementary">
  
  <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  
    <?php dynamic_sidebar( 'sidebar' ); ?>
  
  <?php else : ?>
  
    <?php // This content shows up if there are no widgets defined in the backend. ?>
    <div>
      -
    </div>
  
  <?php endif; ?>
  
</div>