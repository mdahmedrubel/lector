<div id="post-<?php the_ID(); ?>" <?php post_class('post-item video-post'); ?>>
    <?php
     $video_posts = get_post_meta(get_the_ID(), 'video_post', true); 
    ?>
    <div class="post-item-inner">
        <div class="post-thumb">
            <video autoplay muted loop id="myVideo">
                <source src="<?php echo esc_url($video_posts['video-url']);?>" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
         
            <div class="btn-group">
                <a class="play"  onclick="playFunction()"><i class="far fa-pause-circle"></i></a>
                <a class="pause show"  onclick="playFunction()"><i class="far fa-play-circle"></i></a>
            </div>
        </div>
        <?php
            get_template_part( 'template-parts/content', get_post_type() );
        ?>
    </div>
</div>

