<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lector
 */

?>
<div class="post-item">
    <div class="post-item-inner">
        <div class="post-content">
            <div class="content-area">
                <div class="meta-post">
                    <span class="by">
                        <a class="name" href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name'); ?></a>
                        <a href="<?php the_permalink(); ?>" class="date"><?php echo get_the_date('F j, Y'); ?></a>
                    </span>
                </div>
                <h5><a href="<?php the_permalink(); ?>">
				<?php
					$serch_title = get_the_title();
					$search_short_title = wp_trim_words($serch_title, 12, ' ');
					echo esc_html($search_short_title);
				?>	
				</a></h5>
                <a href="<?php the_permalink(); ?>" class="btn"><?php esc_html_e('Read More', 'lector'); ?></a>
            </div>
        </div>
    </div>
</div>
