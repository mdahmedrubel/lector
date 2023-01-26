<!-- mobile-nav section start here -->
<?php
 $header_toption = get_option('lector_options'); 
?>
<div class="mobile-menu">
	<nav class="mobile-header primary-menu d-xl-none">
		<div class="header-logo">
			<?php
				$logo_img_id = get_theme_mod( 'custom_logo' );
				if(!empty($logo_img_id)): 
				?>
				<div class="logo">
					<?php the_custom_logo(); ?>	
				</div>
				<?php else: ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h4 class="logo-heading"><?php esc_html(bloginfo( 'name' )); ?></h4></a>
				<?php
				endif; 
			?>
		</div>
		<div class="header-bar" id="open-button">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>
	<nav class="menu">
		<div class="mobile-menu-area d-xl-none">
			<div class="mobile-menu-area-inner" id="scrollbar">
				<?php                             
				if ( has_nav_menu('lecprimaty_menu')):
					wp_nav_menu( array(
						'theme_location' => 'lecprimaty_menu', 
						'menu_class' => 'm-menu',
						'container' => '',
						'walker' => new Lector_Bootstrap_Navwalker(),
						'fallback_cb'=> false,
						'menu_id'    => '',
						'depth'     => 4
					) );
				endif;                             
				?>
				<ul class="social-link-list d-flex flex-wrap">				
					<?php if(!empty($header_toption['header_facebook'])): ?>
						<li><a href="<?php echo esc_url($header_toption['header_facebook']); ?>" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($header_toption['header_twittre'])): ?>
						<li><a href="<?php echo esc_url($header_toption['header_twittre']); ?>" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($header_toption['header_linkedin'])): ?>
						<li><a href="<?php echo esc_url($header_toption['header_linkedin']); ?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($header_toption['header_gplus'])): ?>
						<li><a href="<?php echo esc_url($header_toption['header_gplus']); ?>" class="google"><i class="fab fa-google-plus-g"></i></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
</div>
<!-- mobile-nav section ending here -->