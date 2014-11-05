		<div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <hr>
          <div class="pull-left">
            <p class="h5 source-org copyright">
              &copy; <?php echo date('Y'); ?> 
              &middot; <i class="fa fa-home"></i> <?php bloginfo( 'name' ); ?>  &middot; <br>
              <small><i class="fa fa-globe"></i> using <a href="https://github.com/mirageglobe/bone">Bone Theme</a> from <a href="http://www.dracoturtur.com">Dracoturtur.com</a> &middot; Images from www.public-domain-image.com</small>
            </p>
          </div>
          <div class="pull-right">
            <p class="h5">
              <small>
                <i class="fa fa-cog "></i> <a href="<?php echo home_url(); ?>/wp-admin">Admin</a>
                &middot; <i class="fa fa-rss "></i> <a href="feed">RSS Feed</a>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------- 
      Bootstrap core JavaScript
    -------------------------------------------------->

    <!-- Placed at the end of the document so the pages load faster -->

    <script src="//cdn.jsdelivr.net/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>