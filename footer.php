
<?php //include ('lowerbar.php'); ?>
<hr>

<div class="pull-left texttiny">
  &copy; <?php echo date('Y'); ?>
  &middot;
  <i class="fa fa-home"></i> <?php bloginfo( 'name' ); ?>
  &middot;
  <i class="fa fa-globe"></i> using
  <a href="https://github.com/mirageglobe/zenifywordpress">zenifywordpress theme</a>
  by <a href="http://www.dracoturtur.com">www.dracoturtur.com</a>
  &middot;
</div>

<div class="pull-right texttiny">
  <i class="fa fa-cog "></i>&nbsp;
  <a href="<?php echo home_url(); ?>/wp-admin">Admin</a>
  &middot; <i class="fa fa-rss "></i> <a href="feed">RSS Feed</a>
</div>

<br>
<br>
<br>
<!-- javascript at the end of the document so the pages load faster -->

<script src="//cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
  