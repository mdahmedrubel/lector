<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lector
 */

get_header();

/* Theme Breadcrumbs*/ 
if(!is_front_page() && !is_404() ):
	if(  function_exists('Lector_Breadcurmbs')){
		Lector_Breadcurmbs();
	}
endif;
?>
<div class="page-body">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
