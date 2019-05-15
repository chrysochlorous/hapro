<?php /* Template Name: B2B Right */get_header(); ?>

<section class="row">
	<main role="main" id="skip-nav" class="large-9 columns">
		<section class="row">
			<div class="small-12 columns"> 
				<h1>
					<?php the_title(); ?>
				</h1>
				 
                <div id="respond">
                    <?php echo $response; ?>
                    <form action="<?php the_permalink(); ?>" method="post">
                        <p><label for="name">Name: <span>*</span> <br><input type="text" name="name" value="<?php echo esc_attr($_POST['name']); ?>"></label></p>
                        <p><label for="email">Email: <span>*</span> <br><input type="text" name="email" value="<?php echo esc_attr($_POST['email']); ?>"></label></p>
                        <p><label for="address">Message: <span>*</span> <br><input type="text" name="address"><?php echo esc_textarea($_POST['address']); ?></input></label></p>
                        <p>Recaptcha goes here</p>
                        <p><input type="submit"></p>
                    </form>
                </div>
				
			</div>
		</section>
	</main>
	<!-- sidebar -->
	
	<aside class="sidebar large-3 columns" role="complementary">
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>
	</aside>
	<!-- /sidebar --> 
</section>
<!-- END main-content -->
</div>
<!-- end BODY WRAPPER -->
<?php get_footer(); ?>