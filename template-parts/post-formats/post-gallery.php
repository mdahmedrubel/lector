<div id="post-<?php the_ID(); ?>" <?php post_class('post-item slider-post'); ?>>
    <div class="post-item-inner">
        <div class="post-thumb blog-slider2">
            <div class="blog-slider-navigation">
                <div class="blog-prev flaticon-back-1"></div>
                <div class="blog-next flaticon-next-1"></div>
            </div>
            <div class="swiper-wrapper">
                <?php 
                    $gallery_posts = get_post_meta(get_the_ID(), 'gallery_post', true);
                    $post_gallery_img =  $gallery_posts['gallery-image'];
                    $gallery_images = explode( ',', $post_gallery_img );

                    if ( ! empty( $gallery_images ) ):
                        foreach($gallery_images as $gallery_image):
                        $post_gallery = wp_get_attachment_url($gallery_image);

                            if ( ! empty( $post_gallery ) ):
                            ?>
                            <div class="swiper-slide">
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($post_gallery);?>" alt="<?php bloginfo('name'); ?>">
                                    </a>
                                </div>
                            </div>
                            <?php
                            else: 
                            ?>
                                <div class="swiper-slide">
                                    <?php if ( has_post_thumbnail() ): ?>
                                        <div class="post-thumb">
                                            <?php the_post_thumbnail( ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php
                            endif;
                        endforeach; 
                    endif;
                ?>
            </div>
            <div class="blog-slider-pagination"></div>
        </div>
        <?php
            get_template_part( 'template-parts/content', get_post_type() );
        ?>
    </div>
</div>