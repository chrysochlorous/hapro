<?php /* Template Name: B2B */get_header(); ?>

<section class="row">
	<main role="main" id="skip-nav" class="large-9 columns">
		<section class="row">
			<div class="small-12 columns"> 
				
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php else: ?>
				<h1>
					<?php the_title(); ?>
				</h1>
				<?php endif; ?>
				<!-- /post thumbnail -->
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
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
			</div>
		</section>
	</main>
	<!-- sidebar -->
	
	<aside class="sidebar large-3 columns" role="complementary">
	    
		    <p>Stay up-to-date with these resources and help your employees be their best.</p>
<strong>Subscribe to <em>For Your Business</em> Emails</strong>
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="text-center"><form id="mc-embedded-subscribe-form" class="validate" action="//healthalliance.us12.list-manage.com/subscribe/post?u=6a55a9ae0c586bdd1a6a6ed4b&amp;id=03ed997003" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
<div id="mc_embed_signup_scroll">
<div class="input-group">

<input id="mce-EMAIL" class="input-group-field" name="EMAIL" required="" type="email" value="" placeholder="email address" />
<div class="input-group-button"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
</div>
</div>
<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_6a55a9ae0c586bdd1a6a6ed4b_03ed997003" type="text" value="" /></div>
</form></div>
<!--End mc_embed_signup-->
<hr>
<p><strong>Helpful Member Resources</strong></p>
<ul>
<li><a href="https://healthalliance.org/health-and-wellness">Health and Wellness, Preventive Care, and Disease Management</a></li>
<li><a href="https://healthalliance.org/understand-insurance">Understand Insurance</a></li>
<li><a href="http://medicare.healthalliance.org/understand-medicare">Understand Medicare</a></li>
<li><a href="http://blog.healthalliance.org/healthy-living/">Healthy Living</a></li>
<li><a href="http://blog.healthalliance.org/ask-for-generics/">Ask for Generics</a></li>
<li><a href="https://www.healthalliance.org/benefits">Member Benefits</a></li>
<li><a href="http://yourhealthalliance.org">Your Health Alliance</a></li>
<li><a href="https://www.healthalliance.org/guests/groupsearch">Plan Details Search</a></li>
</ul>
<hr>
<div class="sidebar-widget"><div id="linkedin"><?php echo do_shortcode("[li-company-updates limit='5' company='34776']"); ?></div>
			<?php /*if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1'))*/ ?>			
		</div>
	</aside>
	<!-- /sidebar --> 
</section>
<!-- END main-content -->
</div>
<!-- end BODY WRAPPER -->
<?php get_footer(); ?>