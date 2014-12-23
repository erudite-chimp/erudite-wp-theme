<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">
				<div id="main" class="col-sm-12 clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<section class="row post_content">
							<div class="col-sm-8 col-sm-offset-2">
								<?php the_content(); ?>
							</div>
						</section> <!-- end article header -->
					</article> <!-- end article -->
					<?php endwhile; ?>

					<?php else : ?>
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					<?php endif; ?>

				</div> <!-- end #main -->

			</div> <!-- end #content -->

<?php get_footer(); ?>