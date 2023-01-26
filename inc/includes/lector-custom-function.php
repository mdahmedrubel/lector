<?php
/* blog pagination */
if( ! function_exists('lector_blog_pagination')){
    function lector_blog_pagination(){

        global $wp_query;
        $lector_pagination = paginate_links(array(
            'current' => max(1, get_query_var('paged')),
            'total'   => $wp_query->max_num_pages,
            'type'    => 'list',
            'prev_next'    =>false,
        ));
        
        $lector_pagination = str_replace("<ul class='page-numbers'>", "<ul class='d-flex flex-wrap justify-content-center pagination'>", $lector_pagination);
        $lector_pagination = str_replace("<li>", "<li class='d-none d-sm-block'>", $lector_pagination);
        $lector_pagination = str_replace("<a class='page-numbers'", "<a class='page-link' ", $lector_pagination);
        echo wp_kses_post($lector_pagination);

    }
}


/*theme breakcurmbs*/
$lector_breadcrumb = get_option( 'lector_options' ); 

if(!empty($lector_breadcrumb['lector_breadcrumbs']) && $lector_breadcrumb['lector_breadcrumbs'] == true) {
    if( ! function_exists('Lector_Breadcurmbs')){
        function Lector_Breadcurmbs(){
        ?>
        <!-- page header section ending here -->
        <section class="page-header">
            <div class="container">
                <div class="page-header-item d-flex align-items-center justify-content-center">
                    <div class="post-content">
                        <h2>
                            <?php
                                $post_type = isset($_GET['post_type']) ? $_GET['post_type'] : '';
                                $search = isset($_GET['s']) ? $_GET['s'] : '';
                                if($post_type == 'event' && is_search()) {
                                    printf( esc_html__( 'lector Search Results for: %s', 'lector' ),
                                            '<span>' . get_search_query() . '</span>');
                                }elseif(is_search()){
                                    printf( esc_html__( 'Search Results for: %s', 'lector' ),
                                            '<span>' . get_search_query() . '</span>' );
                                } elseif( is_archive()  ) {
                                    the_archive_title();
                                } elseif (is_home()) {
                                    wp_title('');
                                } elseif(is_page()) {
                                    the_title();
                                } else {
                                    the_title();
                                }                             
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- page header section ending here -->

        <!-- page header section ending here -->
        <div class="breadcamp">
            <div class="container">
                <?php
                    if(function_exists('Lector_breadcrumbs')){
                        Lector_breadcrumbs(); 
                    }
                ?>
            </div>
        </div>
        <!-- page header section ending here -->
        <?php
        } 
    } 
} 


/** Lector single page related post**/
if( ! function_exists('lector_cats_related_post')){
    function lector_cats_related_post() {
        $post_id = get_the_ID();
        $cat_ids = array();
        $categories = get_the_category( $post_id );

        if(!empty($categories) && is_wp_error($categories)):
            foreach ($categories as $category):
                array_push($cat_ids, $category->term_id);
            endforeach;
        endif;

        $current_post_type = get_post_type($post_id);
        $query_args = array( 
            'category__in'   => $cat_ids,
            'post_type'      => $current_post_type,
            'post_not_in'    => array($post_id),
            'posts_per_page'  => '4',
            'ignore_sticky_posts' => 1

        );
        $related_cats_post = new WP_Query( $query_args );

        ?>
        <div class="related-post">
            <h3><?php esc_html_e('Related Post', 'lector'); ?></h3>
            <div class="row">
                <?php 
                if($related_cats_post->have_posts()):
                while($related_cats_post->have_posts()): $related_cats_post->the_post(); 
                ?>
                    <div class="col-xl-6 col-12">
                        <div class="post-item">
                            <div class="post-inner">
                                <?php
                                if ( has_post_thumbnail() ): 
                                ?>
                                <div class="post-thumb related-img">
                                    <a href="<?php the_permalink(); ?>">    
                                        <?php
                                            the_post_thumbnail('related-post-img-size');  
                                        ?>
                                    </a>
                                </div>
                                <?php
                                endif; 
                                ?>
                                <div class="post-content">
                                    <h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                                $repost_stitle = get_the_title();
                                                $lector_spost_title = wp_trim_words($repost_stitle, 7, '');
                                                echo esc_html($lector_spost_title);
                                            ?> 
                                        </a>
                                    </h5>
                                    <p><?php echo get_the_date('F j, Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                endwhile;
                wp_reset_query();
                endif;
                ?>
            </div>
        </div>
    <?php   
    }
}
