<!-- CATEGORY -->
<?php get_header(); ?>

	<div class="primary">
		<div class="single-page">
			<h1 class="title"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
		
			<?php 
			// Modify the default loop, include custom post types
			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'post_type' => 'any' ) );
			query_posts( $args );
			
			// Check if there are any posts to display
			if ( have_posts() ) : ?>
			 
			<?php
			 
			// The Loop
			while ( have_posts() ) : the_post(); ?>

				<!-- entry -->
				<div class="content" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small class="postdate"><?php the_time('F j, Y'); ?></small>
					<?php
						// the_content();
						echo get_first_paragraph(); 
					?>
					<p><a href="<?php the_permalink(); ?>">View Full Post</a></p>
				</div>
			 
			<?php endwhile; ?>
			<?php html5wp_pagination(); ?>
			<?php else: ?>
					
				<!-- article -->
				<article>
					<p>
						<?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
					</p>
				</article>
				<!-- /article -->
			 
			<?php endif; ?>





				</div>
			</div>
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>
