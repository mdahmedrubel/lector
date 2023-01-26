<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lector
 */
?>
<div class="post-item">
	<div class="post-item-inner">
		<div class="post-thumb">
		<?php
            if ( has_post_thumbnail() ): 
                the_post_thumbnail(); 
            endif; 
        ?>
		</div>
		<div class="post-content">
			<div class="content-area">
				<h2>
					<?php
						$lector_stitle = get_the_title();
						$lector_spost_title = wp_trim_words($lector_stitle, 8, '');
						echo esc_html($lector_spost_title);
					?> 
				</h2>
				<div class="meta-post">
					<span class="by">
						<a class="date" href="<?php echo the_permalink(); ?>"><?php echo get_the_date('F j, Y'); ?></a>
						<a class="name" href="#"><?php echo get_the_author_meta( 'display_name'); ?></a>
						<span class="comentss"><i class="far fa-comment"></i></span><?php comments_popup_link('0 Comment', '1 Comment', '% Comments') ?>
					</span>
				</div>
				<?php
				the_content(); 
				?>
				<?php
                if(get_the_tag_list()):
                ?>
					<h6 class="tag-title"><?php esc_html_e('Tags' , 'lector'); ?></h6>
                    <ul class="tags">
						<li><?php echo get_the_tag_list(' ',' '); ?></li>
                    </ul>
                <?php
                 endif; 
                ?>
				<?php 
                	if(function_exists('lector_social_share_blog_single')): 
                ?>
				<h6 class="share-title"><?php esc_html_e('Share This Post', 'lector'); ?></h6>
				<ul class="social-media-icons">
				 	<?php echo lector_social_share_blog_single(); ?>
				</ul>
				<?php
				endif; 
				?>
			</div>
			<div class="social-area">
				<div class="admin">
					<a href="<?php echo esc_url(get_the_author_link()); ?>">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
					</a>
				</div>
				<?php 
                if(function_exists('lector_social_share')): 
                ?>
				<div class="social-media">
					<span><?php esc_html_e('Share Now', 'lector'); ?></span>
					<ul>
					<?php echo lector_social_share(); ?>
					</ul>
				</div>
				<?php
				endif; 
				?>
			</div>
		</div>
	</div>
</div>
<?php
if(function_exists('lector_cats_related_post')){
	lector_cats_related_post();
 }
?>