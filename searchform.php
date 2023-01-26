<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage medicap
 * @since 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label if
 * one was passed to get_search_form() in the args array.
 */
?>
<!-- search area -->
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" name="s" placeholder="<?php echo esc_attr_e('*Search & Press Enter', 'lector'); ?>" value="<?php echo get_search_query(); ?>">
</form>
<!-- search area -->

