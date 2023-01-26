<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lector
 */

$search_none = get_option('lector_options');
?>
 <div class="post-item">
	<div class="post-item-inner">
		<div class="post-content">
			<div class="content-area">
				<?php if(!empty($search_none['search_none_title'])): ?>
					<h2 class="not-ruselt"><?php echo esc_html($search_none['search_none_title']); ?></h2>
				<?php endif; ?>
				<?php if(!empty($search_none['opps_text'])): ?>
					<h2 class="opps"><?php echo esc_html($search_none['opps_text']); ?></h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

