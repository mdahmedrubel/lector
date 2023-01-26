<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Lector
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses lector_header_style()
 */

function lector_custom_header_setup() {
    $args = array(
        'default-image'      => '',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
        'wp-head-callback'   => 'lector_header_style',
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'lector_custom_header_setup');


function lector_custom_bg_setup() {
	$lec_args = array(
	    'default-color'      => '0000ff',
	    'default-image'      => get_template_directory_uri() . '/images/wapuu.jpg',
	    'default-position-x' => 'right',
	    'default-position-y' => 'top',
	    'default-repeat'     => 'no-repeat',     
	);
	add_theme_support( 'custom-background', $lec_args );
}
add_action( 'after_setup_theme', 'lector_custom_bg_setup');



if ( ! function_exists( 'lector_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see lector_custom_header_setup().
	 */
	function lector_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
