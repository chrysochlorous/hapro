<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
				</a></h3>
	<div class="row">
		<div class="small-12 large-9 columns">
			<small>
				<?php the_time('F j, Y'); ?> <span class="categories"><?php the_category( ' ' ); ?></span>
				</small>
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
		<div class="small-12 large-3 columns text-center">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="margin:2.5rem 0 0; border-radius:256px; width:128px; height:128px; display:inline-block; background-position:center; background-repeat:no-repeat; background-size:cover; background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); // Declare pixel size you need inside the array ?>);"> </a>
			<?php endif; ?>
		</div>
	</div>
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
