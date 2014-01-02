<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<?php if(is_front_page()): ?>
					<!--Front page element here-->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/splash01.png" alt="bone">
							  	<div class="carousel-caption">
							    	bone theme
							  	</div>
							</div>
							<div class="item">
							  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/splash01.png" alt="bone">
							  	<div class="carousel-caption">
							    	bone theme
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
                    <br>
					<?php endif; ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="article" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="article-header">
                            <?php if (is_front_page () && (get_post_type()=='page')): ?>
                                <!-- if this is front page -->
                                <br><br>
                            <?php elseif (is_front_page () && (get_post_type()=='post')): ?>
                                <!-- if this is front posts -->
                                <br>
                                <a href="<?php echo esc_url(get_permalink());?>">
                                <div class="h4">                                
                                    <?php the_title(); ?>
                                </div>
                                </a>
                                <small><i class="fa fa-clock-o"></i> <?php echo esc_html(get_the_date());?></small>
                                <br><br>
                            <?php else: ?>
                                <!-- if this is sub page -->
                                <a href="<?php echo esc_url(get_permalink());?>">
                                <div class="h3">                                
                                    <?php the_title(); ?>
                                    <hr>
                                </div>
                                </a>
                            <?php endif; ?>
						</header>
                                          
						<section class="entry-content clearfix" itemprop="articleBody">
							<?php 
                                // this fixes display as page points to this file.
                                // it should be full article, not excerpt <read more>
                                if(is_page()):
                                    the_content();
                                else:
                                    the_excerpt();
                                endif;
                            ?>
						</section>

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>
                            <div class="pull-right">
                                <i class="fa fa-arrow-circle-o-up"></i> <a href="#top">Top</a>
                                <i class="fa fa-home"></i> <a href="<?php echo home_url(); ?>"> Home</a>
                            </div>
                            <br>
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
                    
                    <?php if (!is_page()): ?> 
                    <hr>
                    <div class="article-footer-nav">
                        <div class="pull-left">
                            <?php next_posts_link( '<i class="fa fa-arrow-circle-o-left"></i> Older Entries', $the_query->max_num_pages ); ?>
                        </div>
                        <div class="pull-right">
                            
                            <?php previous_posts_link( '<i class="fa fa-arrow-circle-o-right"></i> Newer Entries' ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
