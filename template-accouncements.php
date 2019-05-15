<?php /* Template Name: Announcements */ get_header(); ?>

<section class="row">
	<main role="main" id="skip-nav" class="large-9 columns">
		<div class="banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/banner-announcements.jpg);"></div>
		<h1 class="banner-title">
			<?php the_title(); ?>
		</h1>
		<?php $wp_query = new WP_Query( array('post_type' => 'announcement', 'paged' => get_query_var('paged')) ); ?>
		<?php if ( $wp_query->have_posts() ) : ?>
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('extra-dented-post'); ?>>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
				</a></h2>
			<div class="article-indent"><small>
				<?php the_time('F j, Y'); ?>
				</small>
				<?php the_content(); ?>
			</div>
		</article>
		<!-- /article -->
		
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
	</main>
	<!-- sidebar -->
	
	<aside class="sidebar large-3 columns" role="complementary">
		<div class="sidebar-widget">
<p class="text-center"><small><a href="/feed/?post_type=announcement">Subscribe to RSS</a></small></p>
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>
	</aside>
	<!-- /sidebar --> 
</section>
<!-- END main-content -->
</div>
<!-- end BODY WRAPPER -->
<?php get_footer(); ?>
