<!-- CATEGORY -->
<?php get_header(); ?>

	<section class="row">
		<div class="small-12 large-9 columns">
			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>
		
			
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
		
			<?php get_template_part('pagination'); ?>
		</div>
		<div class="small-12 large-3 columns">
			<?php get_sidebar(); ?>
		</div>
	</section>

<?php get_footer(); ?>
