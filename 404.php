<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Lector
 */

wp_head();
$option_404 = get_option('lector_options');
?>
<div class="not-found">
	<div class="container">
		<div class="section-wrapper">
			<div class="post-thumb">
				<?php	
					if(isset($option_404['404_img']['id'])) {
						$image_id = wp_get_attachment_image_src($option_404['404_img']['id'], 'large');
					}
				?>
				<?php
				 if(!empty($image_id)): 
				?>
					<img src="<?php echo esc_url($image_id[0]); ?>" alt="<?php bloginfo('name'); ?>">
				<?php
				endif; 
				?>
			</div>
			<div class="post-content">
				<?php
				if(!empty($option_404['404_title'])): 
				?>
					<h1><?php echo esc_html($option_404['404_title']); ?></h1>
				<?php
				endif; 
				?>
				<?php
				 if(!empty($option_404['404_desc'])): 
				 ?>
					<p><?php echo esc_html($option_404['404_desc']); ?></p>
				<?php
				endif; 
				?>
				<p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if(!empty($option_404['404_btn_txt'])): echo esc_html($option_404['404_btn_txt']); endif; ?>
					</a>  
					<?php if(!empty($option_404['btn_right_txt'])): echo esc_html($option_404['btn_right_txt']); endif; ?>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
wp_footer();
