<!-- INFORMED -->
<?php /* Template Name: InforMED */ get_header(); ?>

<!-- start primary content -->
			<div class="primary">

				<div class="single-page">
					<h1 class="title">Informed</h1>
					<!-- <p class="page-description">Insert description here</p> -->
					<p><a href="/northwest-informed-signup/">Subscribe to Northwest Informed Emails</a><br>
					<a href="/reid-informed-signup/">Subscribe to Reid Informed Emails</a><br>
					<a href="/midwest-informed-signup/">Subscribe to Midwest Informed Emails</a></p>
					<a href="/fcc-informed-signup/">Subscribe to FCC Informed Emails</a></p>
					<div class="line"></div>






					<?php $wp_query = new WP_Query( array('post_type' => 'informed-post', 'paged' => get_query_var('paged')) ); ?>
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
