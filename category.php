<!-- CATEGORY -->
<?php get_header(); ?>

	<section class="primary">
		<div class="single-page">
			<h1 class="title"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
		
			<?php get_template_part('loop'); ?>
					<?php html5wp_pagination(); ?>


		</div>
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>
