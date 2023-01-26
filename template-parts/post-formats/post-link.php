<div id="post-<?php the_ID(); ?>" <?php post_class('post-item link-post'); ?>>
    <div class="post-item-inner">
        <div class="post-content">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/link-post.png" alt="<?php bloginfo('name'); ?>"></a>
            <p>
                <?php 
                    $lector_xcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words($lector_xcerpt, $num_words = 15, ' ');
                    echo esc_html($shortexcerpt);
                ?>
            </p>
        </div>
    </div>
</div>