<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="article-header">
							<a href="<?php echo esc_url(get_permalink());?>">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <small><i class="fa fa-clock-o"></i> <?php echo esc_html(get_the_date());?></small>
                            <small><i class="fa fa-user"></i> <?php echo get_the_author();?></small>
                            <br><br>
						</header>
                                          
						<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</section>

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>
                            <div class="pull-right">
                                <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-arrow-circle-o-left"></i>', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?>
                                <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-arrow-circle-o-right"></i>', 'Next post link', 'twentytwelve' ) . '</span>' ); ?>
                                <i class="fa fa-ellipsis-h"></i> 
                                <a href="#top"><i class="fa fa-arrow-circle-o-up"></i> Top</a>
                                <a class="" href="<?php echo home_url(); ?>"><i class="fa fa-home"></i> Home</a>
                            </div>
                            <br><br>
				            <?php comments_template(); ?>
						</footer>

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
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
