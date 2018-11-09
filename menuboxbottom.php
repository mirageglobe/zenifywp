<!-- This block is just above footer -->

<?php $zen_recent_posts = wp_get_archives( array( 'type' => 'postbypost', 'before' => ' ', 'after' => ' &middot;', 'limit' => '', 'echo' => 0, 'format' => 'custom' ) ); ?>

<?php if ($zen_recent_posts != '') : ?>
<br>
<div>
  <div class="texttiny bold">Other Posts</div>
  <div class="texttiny"><?php echo $zen_recent_posts; ?></div>
</div>
<?php endif; ?>
