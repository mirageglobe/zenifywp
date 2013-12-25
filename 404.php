<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
                    <section class="search">
                        <h1>Page does not exist <small>404 Error</small></h1>
                        <p>The page request is not found. Try searching for this.</p>
                        <p><?php get_search_form(); ?></p>
                    </section>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>