<!-- CATEGORY -->
<?php get_header(); ?>

	<section class="row">
		<div class="small-12 large-9 columns">
			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>
		
			<?php get_template_part('loop'); ?>
		
			<?php get_template_part('pagination'); ?>
		</div>
		<div class="small-12 large-3 columns">
			<?php get_sidebar(); ?>
		</div>
	</section>

<?php get_footer(); ?>
