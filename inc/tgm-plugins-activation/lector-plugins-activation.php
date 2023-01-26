<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Lector for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/tgm-plugins-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'lector_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function lector_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Codestar Framework', 
			'slug'               => 'codestar-framework', 
			'source'             => get_template_directory() . '/inc/plugins/codestar-framework.zip', 
			'required'           => true, 
			'version'            => '2.1.7', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Lector Companion', 
			'slug'               => 'lector-companion', 
			'source'             => get_template_directory() . '/inc/plugins/lector-companion.zip', 
			'required'           => true, 
			'version'            => '1.0.0', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => 'Lector Elementor Toolkit', 
			'slug'               => 'lector-elementor-toolkit', 
			'source'             => get_template_directory() . '/inc/plugins/lector-elementor-toolkit.zip', 
			'required'           => true, 
			'version'            => '1.0.0', 
			'force_activation'   => false, 
			'force_deactivation' => false,
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'      => 'Elementor',
			'slug'      => 'elementor',
			'required'  => false,
		),
		array(
			'name'      => 'Smash Balloon Social Photo Feed',
			'slug'      => 'instagram-feed',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),


	);


	$config = array(
		'id'           => 'lector',                 
		'default_path' => '',                     
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      

		
	);

	tgmpa( $plugins, $config );
}
