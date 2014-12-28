<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-8 col-sm-offset-2 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

							<?php the_post_thumbnail( 'wpbs-featured' ); ?>

							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>

							<p class="meta pull-right"><a href="#comments"><?php echo get_comments_number(); ?> comments</a></p>
							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>

						</section> <!-- end article section -->

						<footer>
							<div id="categories" class="text-center">
								<p class="meta">~<span style="display: inline-block;" class="label label-ed"><?php the_category('</span><span style="display: inline-block;" class="label label-ed">'); ?></span>~</p>
							</div>
							<div class="clearfix">
								<p id="prev_post" class="pull-left"><?php previous_post_link() ?></p>
								<p id="next_post" class="pull-right"><?php next_post_link() ?></p>
							</div>

							<?php
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) {
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php comments_template('',true); ?>

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