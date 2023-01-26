<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <div class="post-item-inner">
        <?php
         if ( has_post_thumbnail() ): 
        ?>
        <div class="post-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php
                    the_post_thumbnail(); 
                ?>
            </a>
        </div>
        <?php 
        endif; 
        ?>
        <?php
            get_template_part( 'template-parts/content', get_post_type() ); 
        ?>
    </div>
</div>