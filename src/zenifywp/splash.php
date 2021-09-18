<?php
  if(false) :
  // temporary blocked sample. If you want to use this splash, just set false to true
?>
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
     <img src="<?php echo get_template_directory_uri(); ?>/library/images/splash01.png" alt="zenify-clover">
      <div class="carousel-caption">
        <?php //bloginfo( 'name' ); ?>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/splash02.png" alt="zenify-trees">
      <div class="carousel-caption">
        <?php //bloginfo( 'name' ); ?>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<br>
<?php endif; ?>
