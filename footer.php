		<div class="container">
      <div class="pull-left">
        <p class="source-org copyright">
          &copy; <?php echo date('Y'); ?> 
          &middot; <i class="fa fa-home"></i> <?php bloginfo( 'name' ); ?>  &middot; <br>
          <small><i class="fa fa-globe"></i> powered by <a href="https://github.com/mirageglobe/bone">Bone Theme</a>, created by <a href="http://www.dracoturtur.com">Dracoturtur</a></small>
        </p>
      </div>
      <div class="pull-right">
        <p>
          <i class="fa fa-cog "></i> <a href="<?php echo home_url(); ?>/wp-admin">Admin</a>
          &middot; <i class="fa fa-rss "></i> <a href="feed">RSS Feed</a>
        </p>
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