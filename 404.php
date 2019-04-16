<!-- 404 -->
<?php get_header(); ?>

<!-- start primary content -->
			<div class="primary">
				<h3><?php _e( 'Page not found', 'html5blank' ); ?></h3>
				<p><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a></p>
			</div>
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>