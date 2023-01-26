<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lector_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'lector' ),
			'id'            => 'lector_blog_sidebar',
			'description'   => esc_html__( 'Add blog widgets here.', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Circle Widget', 'lector' ),
			'id'            => 'footer_circle',
			'description'   => esc_html__( 'Add footer circle widgets here.', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer About Us Widget', 'lector' ),
			'id'            => 'footer_about',
			'description'   => esc_html__( 'Add footer about us widgets here.', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Service Widget', 'lector' ),
			'id'            => 'footer_service',
			'description'   => esc_html__( 'Add footer service widgets here.', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Address Widget', 'lector' ),
			'id'            => 'footer_address',
			'description'   => esc_html__( 'Add footer address widgets here.', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title"',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Bottom Right', 'lector' ),
			'id'            => 'foter_bottom_right',
			'description'   => esc_html__( 'Add footer bottom right menu', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Search Page Widget', 'lector' ),
			'id'            => 'search_page_widget',
			'description'   => esc_html__( 'Add search widget goes here', 'lector' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'lector_widgets_init' );