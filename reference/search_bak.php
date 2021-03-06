<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
          <div class="col-md-12">
            <div class="pull-right small">
              <?php get_search_form(); ?>
              <br>
            </div>
          </div>
          
          <h1><i class="fa fa-search"></i> Results</h1>
          
          <hr>
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="article" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="article-header">
							<a href="<?php echo esc_url(get_permalink());?>">
                <h3>
                  <?php the_title(); ?>
                </h3>
              </a>

              <small><i class="fa fa-clock-o"></i> <?php echo esc_html(get_the_date());?></small>
              <br>
              <br>
            </header>
                                          
						<section class="entry-content clearfix" itemprop="articleBody">
              <div class="small">
                <?php the_excerpt(); ?>
              </div>
						</section>

						<footer class="article-footer">
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
							<h1>Oops, Post Not Found!</h1>
						</header>
						<section class="entry-content">
							<p>Uh Oh. Something is missing. Try other search terms.</p>
						</section>
						<footer class="article-footer">
							<p>
              </p>
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
