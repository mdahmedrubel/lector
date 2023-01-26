<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lector
 */

get_header();

/* Theme Breadcrumbs*/ 
if(  function_exists('Lector_Breadcurmbs')){
    Lector_Breadcurmbs();
}

if(is_active_sidebar('lector_blog_sidebar')){
	$columns = "col-lg-9 col-12 sticky-widget";
}else{
	$columns = "col-lg-10 col-offset-1";
}
?>
<!-- blog section start here -->
<div class="blog-section style-2 blog-single">
    <div class="container">
        <div class="section-wrapper row">
            <div class="<?php echo esc_attr($columns); ?>">
                <article>
						<?php
						while ( have_posts() ) :
							the_post();
							
							get_template_part( 'template-parts/content', 'single');
					

							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
                </article>
            </div>
			<?php
			 if(is_active_sidebar('lector_blog_sidebar')):
			?>
				<div class="col-lg-3 col-md-6 col-12 sticky-widget">
					<aside>
						<?php 
							dynamic_sidebar('lector_blog_sidebar');
						?>
					</aside>
				</div>
			<?php
			endif; 
			?>
        </div>
    </div>
</div>
<!-- blog section ending here -->
<?php
get_footer();
