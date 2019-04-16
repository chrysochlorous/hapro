<!-- SINGLE -->
<?php get_header(); ?>


<!-- start primary content -->
			<div class="primary">
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>> 
					
					<!-- post title -->
					<h3><?php the_title(); ?></h3>
					<!-- /post title --> 
					
					<!-- post details --> 
					<small class="postdate"><?php the_time('F j, Y'); ?></small> 
					<!-- /post details --> 
					
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<div class="right" style="margin:2.5rem; border-radius:384px; width:384px; height:384px; display:inline-block; background-position:center; background-repeat:no-repeat; background-size:cover; background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); // Declare pixel size you need inside the array ?>);"></div>
					<?php endif; ?>
					<!-- /post thumbnail -->
					
					<?php the_content(); // Dynamic Content ?>
				</article>
				<!-- /article -->
				
				<?php endwhile; ?>
				<?php else: ?>
				
				<!-- article -->
				<article>
					<h1>
						<?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
					</h1>
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