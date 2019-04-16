<!-- HOME TEMPLATE -->
<?php /* Template Name: Home */ get_header(); ?>

<section class="row">
	<main role="main" id="skip-nav" class="large-12 columns"> 
				
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
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
	</main>
</section>
<!-- END main-content -->
</div>
<!-- end BODY WRAPPER -->
<?php get_footer(); ?>
