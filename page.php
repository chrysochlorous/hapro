<!-- PAGE -->
<?php get_header(); ?>



<!-- start primary content -->
			<div class="primary">
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
					<h3 class="title"><?php the_title(); ?></h3>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</article>
					<!-- /article -->
				
				<?php endwhile; ?>
				<?php else: ?>
				
					<!-- article -->
					<article>
						<h2>
							<?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
						</h2>
					</article>
					<!-- /article -->
				
				<?php endif; ?>
			</div>
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>
