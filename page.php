<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<?php if(is_front_page()){ ?>
					<!--Front page element here-->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/gmslide1.jpg" alt="gmagarwood">
							  	<div class="carousel-caption">
							    	gmagarwood
							  	</div>
							</div>
							<div class="item">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/gmslide2.jpg" alt="gmagarwood">
							  	<div class="carousel-caption">
							    	gmagarwood
							  	</div>
							</div>
							<div class="item">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/gmslide3.jpg" alt="gmagarwood">
							  	<div class="carousel-caption">
							    	gmagarwood
							  	</div>
							</div>
							<div class="item">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/gmslide4.jpg" alt="gmagarwood">
							  	<div class="carousel-caption">
							    	gmagarwood
							  	</div>
							</div>
							<div class="item">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/gmslide5.jpg" alt="gmagarwood">
							  	<div class="carousel-caption">
							    	gmagarwood
							  	</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<?php } ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                        <?php if(!is_front_page()){ ?>
						<header class="article-header">
							<h2><?php the_title(); ?></h2>
						</header>
                        <?php } ?>
						<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</section>

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>
						</footer>

						<?php // comments_template(); ?>

					</article>

					<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

					<?php endif; ?>

					<a href="#top" class="btn btn-primary" role="button">Return to Top</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
