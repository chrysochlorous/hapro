<!-- RESOURCES -->
<?php /* Template Name: Resources */ get_header(); ?>
<?php get_header(); ?>

      <!-- <div class="banner">
        <div class="wrapper">
          <?php if(strpos($_SERVER['HTTP_HOST'], "provider.healthalliance.org") !== false){ ?>
                <p></p>
        <?php } ?>
        </div>
      </div>  -->

			<div class="text-container">
                <h2 class="title"><?php the_title(); ?></h2>
                <?php if(strpos($_SERVER['HTTP_HOST'], "group.healthalliance.org") !== false){ ?>
                <p class="page-description">Find resources to help you make informed decisions about your company’s health insurance.</p>
				<?php	} ?>

				<?php if(strpos($_SERVER['HTTP_HOST'], "provider.healthalliance.org") !== false){ ?>
                <p class="page-description">Find forms and resources to better work with us as you care for your patients.</p>
				<?php	} ?>

				<?php if(strpos($_SERVER['HTTP_HOST'], "broker.healthalliance.org") !== false){ ?>
                <p class="page-description">Find forms and resources you’ll need to sell our plans and work with your clients.</p>
				<?php	} ?>
            </div>


			<!-- start search -->
			<style>
				#results a { display: block; margin: 1.25rem 0; line-height: 1.3; }
			</style>
			<div class="search">
				<i class="icon-search"></i>
				<input list=search id="searchbar" class="searchbar" type="text" name="searchbar" placeholder="Search resources" onfocus="">
				<div id="results">
					<div class="container">
				
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<ul>
							<?php
								$string = '<b></b>'.strip_tags(get_the_content(),'<a>');
								$pattern = '/(<\/[^>]+>)[^<]*(<[^>]+>)/';
								$replacement = '$1$2';
								echo preg_replace($pattern, $replacement, $string);
							?>
							</ul>
						<?php endwhile; ?>
						
						<?php endif; ?>
						
					</div>
				</div>
			</div>
			<!-- end search -->


			<!-- start primary content -->
			<div class="primary">
				
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
<!-- end primary content -->

<!-- START SIDEBAR -->
			<?php get_sidebar(); ?>
<!-- end SIDEBAR -->
			<div class="clear"></div>
		</div>
<!-- end wrapper main -->

<?php get_footer(); ?>