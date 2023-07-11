<?php /* Template Name: Flashes */ get_header(); ?>

<section class="row">
	<main role="main" id="skip-nav" class="large-9 columns">
		<div class="banner" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/banner-flashes.jpg);"></div>
		<h1 class="banner-title">
			<?php the_title(); ?>
		</h1>
		<?php $wp_query = new WP_Query( array('post_type' => 'flash', 'paged' => get_query_var('paged')) ); ?>
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
		<?php
			//$current_site = get_blog_details();
			//print_r($current_site);
			if(strpos($_SERVER['HTTP_HOST'], "group.healthalliance.org") !== false){
				$mailchimp_id = "2f0333c675";
			} else if(strpos($_SERVER['HTTP_HOST'], "broker.healthalliance.org") !== false){
				$mailchimp_id = "1a18ba1590";
			}
		?>
	</main>
	<!-- sidebar -->
	
	<aside class="sidebar large-3 columns" role="complementary">
		<div class="sidebar-widget">
		    
		<div id="mailchimpit">
			<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup" class="panel text-center">
					<form action="//healthalliance.us12.list-manage.com/subscribe/post?u=6a55a9ae0c586bdd1a6a6ed4b&amp;id=<?php echo $mailchimp_id; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
								<p for="mce-EMAIL">Stay in the loop,<br>get emails of every new post!<br><br>
								<input type="email" value="" name="EMAIL" class="email input-group-field text-center" id="mce-EMAIL" placeholder="email address" required>
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button expanded" style="padding:0.8rem 1em;"></p>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_6a55a9ae0c586bdd1a6a6ed4b_<?php echo $mailchimp_id; ?>" tabindex="-1" value="">
							</div>
						</div>
					</form>
				</div>
			<!--End mc_embed_signup-->
			<p style="margin:-3rem 0 0" class="text-center"><small><a href="/feed/?post_type=flash">Subscribe to RSS</a></small></p>
		</div>
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>
	</aside>
	<!-- /sidebar --> 
</section>
<!-- END main-content -->
</div>
<!-- end BODY WRAPPER -->
<?php get_footer(); ?>
