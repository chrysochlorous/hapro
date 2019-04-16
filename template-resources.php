<!-- CODING COUNTS -->
<?php /* Template Name: Resources */ get_header(); ?>
<?php get_header(); ?>



			<div class="text-container">
                <h2 class="title"><?php the_title(); ?></h2>
                <p class="page-description">Find forms and resources to better work with us as you care for your patients.</p>
            </div>


			<!-- start search -->
			<div class="search">
				<i class="icon-search"></i>
				<input list=search id="searchbar" class="searchbar" type="text" name="searchbar" placeholder="Search resources" onfocus="">
				<div id="results">
					<div class="container">
				
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
							<?php
								$string = '<b></b>'.strip_tags(get_the_content(),'<a>');
								$pattern = '/(<\/[^>]+>)[^<]*(<[^>]+>)/';
								$replacement = '$1$2';
								echo preg_replace($pattern, $replacement, $string);
							?>
						
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