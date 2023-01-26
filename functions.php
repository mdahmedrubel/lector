<?php
/*Lector theme setup required files*/
require get_template_directory() . '/inc/includes/lector-enqueue.php';
require get_template_directory() . '/inc/includes/lector-theme-setup.php';
require get_template_directory() . '/inc/includes/lector-widgets-register.php';
require get_template_directory() . '/inc/includes/lector-hooks.php';
require get_template_directory() . '/inc/includes/lector-custom-function.php';
require get_template_directory() . '/inc/includes/comments/comments-template.php';

/*Lector demo import*/
require get_template_directory() . '/inc/importer/demo-importer.php';

/*breadcrumbs*/
require get_template_directory() . '/template-parts/breadcrumbs/lector-breadcrumbs.php';

/*Lector tgm plugins activation*/
require get_template_directory() . '/inc/tgm-plugins-activation/lector-plugins-activation.php';

/*Lector theme option with framework*/
require_once get_template_directory() .'/inc/cs-framework/lector-theme-options.php';

require_once get_template_directory() .'/inc/cs-framework/post-gallery-metabox.php';
require_once get_template_directory() .'/inc/cs-framework/post-video-metabox.php';
require_once get_template_directory() .'/inc/cs-framework/service-custom-post-metabox.php';
require_once get_template_directory() .'/inc/cs-framework/service-custom-post-metabox-two.php';
require_once get_template_directory() .'/inc/cs-framework/case-custom-post-metabox.php';
require_once get_template_directory() .'/inc/cs-framework/case-custom-post-metabox-two.php';


/*Lector bootstrap nav walker*/
require_once get_template_directory(). '/inc/bootstrap-navwalker/lector-bootstrap-navwalker.php';





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


