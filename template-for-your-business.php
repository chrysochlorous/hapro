<!-- CODING COUNTS -->
<?php /* Template Name: For Your Business Subpage */ get_header(); ?>

<!-- start primary content -->
			<div class="primary">

				<div class="single-page">
					<h1 class="title">For Your Business</h1>
					<p class="page-description">Whitepapers, infographics, and resources to help you make the most of health insurance.</p>
					<div class="sub-nav">
						<?php wp_nav_menu( array('menu' => '17' ) ); ?>
					</div>





				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- <h2 class="title"><?php the_title(); ?></h2> -->
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
			</div>
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>