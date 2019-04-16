<!-- SEARCH -->
<?php get_header(); ?>

<!-- start primary content -->
			<div class="primary">
				<div class="single-page">
					<h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
				
						<?php if ( $wp_query->have_posts() ) : ?>
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
