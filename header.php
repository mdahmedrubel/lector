<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lector
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
wp_body_open();
?>

<div class="search-area">
	<div class="search-input">
		<div class="search-close">
			<span></span>
			<span></span>
		</div>
		<?php
       		get_search_form(); 
        ?>
	</div>
</div>

<!-- mobile-nav section start here -->
<?php
 get_template_part( 'template-parts/mobile-menu/mobile-menu');
?>
<!-- mobile-nav section ending here -->

<!-- header section start here -->
<?php
	$header_variation = get_option( 'lector_options' );
	if(!empty($header_variation['lector_header_style']) && $header_variation['lector_header_style']== 1):
		echo get_template_part('template-parts/header/header', '1'); 
	elseif(!empty($header_variation['lector_header_style']) && $header_variation['lector_header_style']== 2):
		echo get_template_part('template-parts/header/header','2');
	elseif(!empty($header_variation['lector_header_style']) && $header_variation['lector_header_style']== 3):
		echo get_template_part('template-parts/header/header','3');
	else:
		echo get_template_part('template-parts/header/header', '1');  
	endif;
?>
<!-- header section ending here -->