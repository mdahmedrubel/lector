<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lector
 */
$footer_toption = get_option('lector_options');
?>
	<!-- foooter section start here -->
	<section class="footer padding-tb">
		<div class="container">
			<div class="section-wrapper">
				<div class="footer-top">
					<div class="footer-rounding">
						<?php
							if(is_active_sidebar('footer_circle')){
								dynamic_sidebar( 'footer_circle' );
							}
						?>
					</div>
					<div class="footer-content">
						<div class="footer-item footer-about">
							<?php
								if(is_active_sidebar('footer_about')){
									dynamic_sidebar( 'footer_about' );
								}
							?>
						</div>
						<div class="footer-item footer-service">
							<?php
								if(is_active_sidebar('footer_service')){
									dynamic_sidebar( 'footer_service' );
								}
							?>
						</div>
						<div class="footer-item footer-contact">
							<?php
								if(is_active_sidebar('footer_address')){
									dynamic_sidebar( 'footer_address' );
								}
							?>
						</div>
					</div>
				</div>
				<?php
				if(!empty($footer_toption['footer_settings'] == true)): 
				?>
				<div class="footer-bottom">
					<div class="fb-right">
						<?php
						if(is_active_sidebar('foter_bottom_right')){
							dynamic_sidebar( 'foter_bottom_right' );
						}
						?>
					</div>
					<div class="fb-left">
						<?php
						if(!empty($footer_toption['footer_copyright'])): 
							echo wp_kses_post($footer_toption['footer_copyright']); 
						 else: 
						?>
							<p><?php echo esc_html('Copyright 2019  &copy;', 'lector'); ?> <a href="<?php echo esc_url('https://codexcoder.com', 'lector'); ?>"><?php echo esc_html('Lector.', 'lector'); ?></a> <?php echo esc_html('Design & Developed by', 'lector'); ?><a href="<?php echo esc_url('https://codexcoder.com', 'lector'); ?>"> <?php echo esc_html('LabArtisan', 'lector'); ?></a></p>
						<?php
						endif; 
						?>
					</div>
				</div>
				<?php
				 endif; 
				?>
			</div>
		</div>
	</section>
	<!-- foooter section ending here -->
	
	<!-- scrollToTop start here -->
	<?php
	 if(!empty($footer_toption['lector_scroll_top'] == true)): 
	?>
		<a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
	<?php
	endif;
	?>
	<!-- scrollToTop ending here -->
	<?php wp_footer(); ?>
	</body>
</html>
