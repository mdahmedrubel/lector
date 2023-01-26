<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <div class="post-item-inner">
		<div class="post-content">
			<div class="content-area">
				<h5>
					<a href="<?php the_permalink(); ?>">
						<?php
							$lector_title = get_the_title();
							$lector_short_title = wp_trim_words($lector_title, 12, ' ');
							echo esc_html($lector_short_title);
						?>	
					</a>
				</h5>
				<div class="meta-post">
					<span class="by">
						<a class="date"><?php echo get_the_date('F j, Y'); ?></a>
						<a class="name" href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name'); ?></a>
						<i class="far fa-comment"></i> <?php comments_popup_link('0 Comment', '1 Comment', '% Comments') ?>
					</span>
				</div>
				<p>
					<?php 
						$lector_xcerpt = get_the_excerpt();
						$shortexcerpt = wp_trim_words($lector_xcerpt, $num_words = 26, ' ');
						echo esc_html($shortexcerpt);
					?>
				</p>
				<a href="<?php the_permalink(); ?>" class="plain-button"><?php esc_html_e('Continue Reading....', 'lector'); ?></a>
			</div>
		</div>
    </div>
</div>