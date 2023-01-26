<?php 
$header_toption = get_option( 'lector_options' );
?>
<!-- header section start here -->
<header class="header-section d-none d-xl-block">
	<?php
	 if($header_toption['header_top_switch'] == true): 
	?>
	<div class="header-top">
		<div class="container">
			<div class="htop-area row">
				<div class="htop-left">
					<?php if(!empty($header_toption['header_address'])): ?>
					<p><?php echo esc_html($header_toption['header_address']); ?></p>
					<?php endif; ?>
				</div>
				<div class="htop-right">
					<ul class="htop-information">
						<?php if(!empty($header_toption['header_number'])): ?>
							<li><?php echo esc_html($header_toption['header_number']); ?></li>
						<?php endif; ?>
						<?php if(!empty($header_toption['header_email'])): ?>
							<li><a href="mailto:"><?php echo esc_html($header_toption['header_email']); ?></a></li>
						<?php endif; ?>
					</ul>
					<ul class="social-link-list">
						<?php if(!empty($header_toption['header_facebook'])): ?>
							<li><a href="<?php echo esc_url($header_toption['header_facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
						<?php endif; ?>
						<?php if(!empty($header_toption['header_twittre'])): ?>
							<li><a href="<?php echo esc_url($header_toption['header_twittre']); ?>"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if(!empty($header_toption['header_youtube'])): ?>
							<li><a href="<?php echo esc_url($header_toption['header_youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
						<?php endif; ?>
						<?php if(!empty($header_toption['header_linkedin'])): ?>
							<li><a href="<?php echo esc_url($header_toption['header_linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
	endif; 
	?>
	<div class="header-bottom">
		<nav class="primary-menu">
			<div class="container">
				<div class="menu-area">
					<div class="row justify-content-between align-items-center">
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
						<div class="main-menu-area d-flex align-items-center">
							<?php                             
							if ( has_nav_menu('lecprimaty_menu')):
								wp_nav_menu( array(
									'theme_location' => 'lecprimaty_menu', 
									'menu_class' => 'main-menu d-flex align-items-center',
									'container' => '',
									'walker' => new Lector_Bootstrap_Navwalker(),
									'fallback_cb'=> false,
									'menu_id'    => '',
									'depth'     => 4
								) );
							endif;                             
							?>
							<div class="d-none d-xl-block">
								<ul class="search-cart">
									<?php
									 if($header_toption['lector_search'] == true): 
									 ?>
										<li class="search">
											<i class="fas fa-search"></i>
										</li>
									<?php
									endif; 
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<!-- header section ending here -->