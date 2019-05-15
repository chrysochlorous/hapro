<!-- CODING COUNTS ARCHIVE -->
<?php /* Template Name: Coding Counts */ get_header(); ?>

<!-- start primary content -->
			<div class="primary">

				<div class="single-page">
					<h1 class="title">Coding Counts</h1>
					<p class="page-description">Insert description here</p>
					<div class="sub-nav">
						<ul>
							<a href="/coding-counts/"><li class="current">Main Feed</li></a>
							<a href="/coding-counts/coding-counts-subpage"><li>Why Coding Count?</li></a>
							<a href="/coding-counts/helpful-resources/"><li class="mobile">Helpful Resources</li><li class="no-mobile">Resources</li></a>
						</ul>
					</div>





					<?php $wp_query = new WP_Query( array('post_type' => 'coding-counts-post', 'paged' => get_query_var('paged')) ); ?>
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
