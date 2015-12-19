<!-- This block is just above footer -->

<br>
<div>
  <div class="texttiny bold">Recent Posts and Pages</div>
  <div class="texttiny"><?php wp_get_archives( array( 'type' => 'postbypost', 'before' => ' ', 'after' => ' &middot;', 'limit' => 500, 'format' => 'custom' ) ); ?></div>
</div>
