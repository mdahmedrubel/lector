<?php 
$lector_header_two = get_option( 'lector_options' );
?>
<!-- header section start here -->
<header class="header-section transparent-header style-2 d-none d-xl-block">
	<nav class="primary-menu">
		<div class="container">
			<div class="menu-area">
				<div class="row align-items-center justify-content-lg-between">
                    <?php
                        $logo_img_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $logo_img_id , 'full' );
                        if(!empty($logo_img_id)): 
                        ?>
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url($image[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                <img src="<?php echo esc_url($image[0]); ?>" alt="<?php bloginfo('name'); ?>"> 
                            </a>	
                        </div>
                        <?php else: ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h4 class="logo-heading"><?php esc_html(bloginfo( 'name' )); ?></h4></a>
                        <?php
                        endif; 
                    ?>
					<div class="main-menu-area d-flex align-items-center justify-content-between">
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
                        <?php
                         if(! empty($lector_header_two['header_two_switch']) && $lector_header_two['header_two_switch'] == true): 
                        ?>
						<div class="d-none d-xl-block">
							<div class="contact-header">
                                <?php if(!empty($lector_header_two['header_two_number'])): ?>
                                    <span><?php echo esc_html($lector_header_two['header_two_number']); ?></span>
                                <?php endif; ?>
                                <?php if(!empty($lector_header_two['quote_btn_txt'])): ?>
                                    <a href="<?php echo esc_url($lector_header_two['quote_btn_url']); ?>" class="btn"><?php echo esc_html($lector_header_two['quote_btn_txt']); ?></a>
                                <?php endif; ?>
							</div>
                        </div>
                        <?php
                        endif; 
                        ?>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- header section ending here -->