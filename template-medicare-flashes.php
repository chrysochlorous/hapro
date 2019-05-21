<!-- MEDICARE FLASHES -->
<?php /* Template Name: Medicare Flashes */ get_header(); ?>

<!-- start primary content -->
			<div class="primary">

				<div class="single-page">
					<h1 class="title"><?php the_title(); ?></h1>
					<!-- <p class="page-description">Insert description here</p> -->

					<?php
						//$current_site = get_blog_details();
						//print_r($current_site);
						if(strpos($_SERVER[HTTP_HOST], "group.healthalliance.org") !== false){
							$mailchimp_id = "2f0333c675";
						} else if(strpos($_SERVER[HTTP_HOST], "broker.healthalliance.org") !== false){
							$mailchimp_id = "1a18ba1590";
						}
					?>			
					<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup" class="panel text-center">
							<form action="//healthalliance.us12.list-manage.com/subscribe/post?u=6a55a9ae0c586bdd1a6a6ed4b&amp;id=<?php echo $mailchimp_id; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
										<p for="mce-EMAIL">Stay in the loop, <a href="/feed/?post_type=flash">subscribe to RSS</a> or sign up for emails of every new post!<br>
										<input type="email" value="" name="EMAIL" class="email input-group-field text-center" id="mce-EMAIL" placeholder="Your email address" required>
										<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button expanded" style="padding:0.8rem 1em;"></p>
									<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;" aria-hidden="true">
										<input type="text" name="b_6a55a9ae0c586bdd1a6a6ed4b_<?php echo $mailchimp_id; ?>" tabindex="-1" value="">
									</div>
								</div>
							</form>
						</div>
						<!--End mc_embed_signup-->





					<?php $wp_query = new WP_Query( array('post_type' => 'medicare-flash', 'paged' => get_query_var('paged')) ); ?>
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
