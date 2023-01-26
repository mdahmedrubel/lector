<div id="post-<?php the_ID(); ?>" <?php post_class('post-item blockquote-post'); ?>>
    <div class="post-item-inner">
        <div class="post-thumb">
            <blockquote>
                <p>
                    <?php 
                        $lector_xcerpt = get_the_excerpt();
                        $shortexcerpt = wp_trim_words($lector_xcerpt, $num_words = 15, ' ');
                        echo esc_html($shortexcerpt);
                    ?>
                </p>
                <h6><?php echo get_the_author_meta('display_name'); ?></h6>
            </blockquote>
        </div>
        <?php
            get_template_part( 'template-parts/content', get_post_type() ); 
        ?>
    </div>
</div>