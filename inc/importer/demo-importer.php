<?php 
/*Import content data*/
if ( ! function_exists( 'lector_demo_import_files' ) ) :
	function lector_demo_import_files() {
	    return array(
	        array(
	            'import_file_name'             => esc_html__( 'Lector Demo Import', 'lector' ),
	            'import_file_url'              => 'http://codexcoder.com/demos/lectordemodata/tmonster/demodata-content.xml',
	            'import_widget_file_url'       => 'http://codexcoder.com/demos/lectordemodata/tmonster/demodata-widgets.wie',
	            'import_customizer_file_url'   => 'http://codexcoder.com/demos/lectordemodata/tmonster/demodata-customizer.dat',
	            'import_preview_image_url'     => 'http://codexcoder.com/demos/lectordemodata/tmonster/screenshot.png',
	            'preview_url'                  => 'http://codexcoder.com/demos/medic-',
	            'import_notice'                => esc_html__( 'After you import the demo data, just set widgets from Appearance > Widgets home page & blog page will automatically set. If you want to use different home page you can do that from Settings > Reading. Also import lector-themeoption.json through theme options > theme options backup importer thats all.', 'lector' ),
	        ),  
	    );
	}
	add_filter( 'pt-ocdi/import_files', 'lector_demo_import_files' );
endif;


function ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text" style="width:400px"><p>Please click on the <strong>Import Demo Data</strong> button and wait for importing demo data. It may take a few minutes.</p>
	</div>';

	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );



/*after demo data import*/
function ocdi_after_import_setup() {
	$main_menu      	= get_term_by( 'name', 'Primary Menu', 'nav_menu' );
	$footer_about      	= get_term_by( 'name', 'Footer About Menu', 'nav_menu' );
	$footer_service     = get_term_by( 'name', 'Footer Service Menu', 'nav_menu' );
	$footer_bot_right   = get_term_by( 'name', 'Footer Bottom Right Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'lecprimaty_menu'   	=> $main_menu->term_id, 
			'footer_about_us'   	=> $footer_about->term_id, 
			'footer_service'  	 	=> $footer_service->term_id, 
			'footer_bottom_right'   => $footer_bot_right->term_id, 
		)
	);

	
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );







