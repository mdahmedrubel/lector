<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<div class="blog-section style-2 padding-tb">
    <div class="container">
        <div class="section-wrapper row">
            <div class="<?php echo esc_attr($columns); ?>">
                <article>
					<?php
						if ( have_posts() ) :
							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post-formats/post', get_post_format() );

                            endwhile;
                            ?>
                            <div class="blog-pagination style-2">
                                <?php
                                    if(  function_exists('lector_blog_pagination')){
                                        lector_blog_pagination(); 
                                    }
                                ?>
                                <ul class="navigation">
                                    <?php   
                                        $lecto_ppl = get_previous_posts_link();
                                        if(!$lecto_ppl):
                                    ?>
                                    <li>
                                        <?php previous_posts_link(__('<', 'lector')); ?>
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <?php previous_posts_link(__('<', 'lector')); ?>
                                    </li>
                                    <?php
                                    endif; 
                                    ?>

                                    <?php   
                                    $lector_npl = get_next_posts_link();
                                    if(!$lector_npl):
                                    ?>
                                    <li>
                                        <?php next_posts_link(__('>', 'lector')); ?>
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <?php next_posts_link(__('>', 'lector')); ?>
                                    </li>
                                    <?php
                                    endif; 
                                    ?>
                                </ul>
                            </div>
                        <?php   
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
                </article>
            </div>
			<?php
            if(is_active_sidebar('lector_blog_sidebar')): 
            ?>
                <div class="col-lg-3 col-md-6 col-12 sticky-widget">
                    <aside>
                        <?php
                            dynamic_sidebar( 'lector_blog_sidebar' );
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
