<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php else : ?>

        <?php // This content shows up if there are no widgets defined in the backend. ?>

        <div class="alert alert-help">
            <p>Please activate some Widgets. You can do so via Admin -> Widgets</p>
        </div>

    <?php endif; ?>

</div>