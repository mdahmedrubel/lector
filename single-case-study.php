<?php
/**
 * The template for displaying case stydy single page 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lector
 */
get_header();

/* Theme Breadcrumbs*/ 
if(  function_exists('Lector_Breadcurmbs')){
    Lector_Breadcurmbs();
}

$case_meta22 = get_post_meta(get_the_ID(), 'case_two', true);
?>
<!-- case section start here -->
<section class="case-study-single padding-tb">
    <div class="container">
        <div class="head-cover">
            <div class="section-header">
                <h2><?php if(!empty($case_meta22['casem_title'])): echo esc_html($case_meta22['casem_title']); endif; ?></h2>
                <p class="meta-post">
                    <?php if(!empty($case_meta22['case_time'])): ?>
                        <span><i class="far fa-clock"></i><a href="<?php echo esc_url($case_meta22['time_url']); ?>"><?php echo esc_html($case_meta22['case_time']); ?></a></span>
                    <?php endif; ?>
                    <?php if(!empty($case_meta22['case_client'])): ?>
                        <span><?php esc_html_e('Client: ', 'lector'); ?><a href="<?php echo esc_url($case_meta22['client_url']); ?>"><?php echo esc_html($case_meta22['case_client']); ?></a> </span>
                    <?php endif; ?>
                    <?php if(!empty($case_meta22['case_service'])): ?>
                    <span><?php esc_html_e('Service: ', 'lector'); ?><a href="<?php echo esc_url($case_meta22['case_surl']); ?>"><?php echo esc_html($case_meta22['case_service']); ?></a></span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="post-thumb">
                <?php 
                if ( isset($case_meta22['casem_bimage']['id'])) {
						$test_top_img = wp_get_attachment_image_src($case_meta22['casem_bimage']['id'], 'large');
					}
                ?>
                <img src="<?php echo esc_url($test_top_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
        <div class="section-wrapper row justify-content-center">
            <div class="col-lg-8 col-12">
                <article>
                    <div class="case-info">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <div class="post-thumb">
                        	<?php 
		                	if(!empty($case_meta22['casem_timg'])):
		                	foreach($case_meta22['casem_timg'] as $casem_ti):
		                	?>
		                	<?php 
			                if ( isset($casem_ti['cn_image']['id'])) {
									$double_img = wp_get_attachment_image_src($casem_ti['cn_image']['id'], 'large');
								}
			                ?>
			                <img src="<?php echo esc_url($double_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </div>
                        <?php if(!empty($case_meta22['img_content'])): ?>
                        	<p><?php echo esc_html($case_meta22['img_content']); ?></p>
                    	<?php endif; ?>
                    </div>
                    <div class="task-challenge">
                    	<?php if(!empty($case_meta22['challente_title'])): ?>
                        	<h3><?php echo esc_html($case_meta22['challente_title']); ?></h3>
                        <?php endif; ?>
                         <?php if(!empty($case_meta22['challente_con'])): ?>
                        	<p><?php echo esc_html($case_meta22['challente_con']); ?></p>
                    	<?php endif; ?>
                        <ul>
                        	<?php 
		                	if(!empty($case_meta22['challentes'])):
		                	foreach($case_meta22['challentes'] as $challenge):
		                	?>
                            <li class="d-flex">
                                <div class="icon">
                                        <i class="fas fa-location-arrow"></i>
                                </div>
                                <div class="content">
                                   <?php if(!empty($challenge['cgroup_title'])): ?>
			                        	<h6><?php echo esc_html($challenge['cgroup_title']); ?></h6>
			                        <?php endif; ?>
                                    <?php if(!empty($challenge['cgroup_con'])): ?>
			                        	<p><?php echo esc_html($challenge['cgroup_con']); ?></p>
			                    	<?php endif; ?>
                                </div>
                            </li>
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </ul>
                    </div>
                    <div class="action-solution">
                        <?php if(!empty($case_meta22['action_title'])): ?>
                        	<h3><?php echo esc_html($case_meta22['action_title']); ?></h3>
                        <?php endif; ?>
                         <?php if(!empty($case_meta22['action_con'])): ?>
                        	<p><?php echo esc_html($case_meta22['action_con']); ?></p>
                    	<?php endif; ?>
                        <ul>
                        	<?php 
		                	if(!empty($case_meta22['actions'])):
		                	foreach($case_meta22['actions'] as $action):
		                	?>
                            	<li><?php if(!empty($action['action_list'])): echo esc_html($action['action_list']); endif; ?> </li>
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </ul>
                    </div>
                    <div class="result">
                        <?php if(!empty($case_meta22['result_title'])): ?>
                        	<h3><?php echo esc_html($case_meta22['result_title']); ?></h3>
                        <?php endif; ?>
                         <?php if(!empty($case_meta22['result_con'])): ?>
                        	<p><?php echo esc_html($case_meta22['result_con']); ?></p>
                    	<?php endif; ?>
                        <ul>
                        	<?php 
		                	if(!empty($case_meta22['results'])):
		                	foreach($case_meta22['results'] as $result):
		                	?>
                            	<li><?php if(!empty($result['result_list'])):echo esc_html($result['result_list']); endif; ?> </li>
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </ul>
                          <?php 
			                if ( isset($case_meta22['result_img']['id'])) {
									$rsult_img = wp_get_attachment_image_src($case_meta22['result_img']['id'], 'large');
								}
			                ?>
			                <img src="<?php echo esc_url($rsult_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-8 col-12">
                <aside>
                    <div class="case-mantor">
                    	<?php if(!empty($case_meta22['sidebar_title'])): ?>
                        	<h3><?php echo esc_html($case_meta22['sidebar_title']); ?></h3>
                    	<?php endif; ?>
                        <?php 
		                if ( isset($case_meta22['sidebar_img']['id'])) {
								$sidebar_img = wp_get_attachment_image_src($case_meta22['sidebar_img']['id'], 'large');
							}
		                ?>
		                <img src="<?php echo esc_url($sidebar_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
		                <?php if(!empty($case_meta22['sidebar_name'])): ?>
                        	<h4><a href="<?php echo esc_url($case_meta22['name_url']); ?>"><?php echo esc_html($case_meta22['sidebar_name']); ?></a></h4>
                        <?php endif; ?>
                        <?php if(!empty($case_meta22['sidebar_position'])): ?>
                        	<span><?php echo esc_html($case_meta22['sidebar_position']); ?></span>
                    	<?php endif; ?>
                    	<?php if(!empty($case_meta22['sidebar_cont'])): ?>
                        	<p><?php echo esc_html($case_meta22['sidebar_cont']); ?></p>
                    	<?php endif; ?>
                        <ul>
                        	<?php if(!empty($case_meta22['fac_url'])): ?>
                    	 	<li>
                                <a href="<?php echo esc_url($case_meta22['fac_url']); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <?php endif; ?>
                            <?php if(!empty($case_meta22['linke_url'])): ?>
                            <li>
                                <a href="<?php echo esc_url($case_meta22['linke_url']); ?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <?php endif; ?>
                            <?php if(!empty($case_meta22['insta_url'])): ?>
                            <li>
                                <a href="<?php echo esc_url($case_meta22['insta_url']); ?>" class="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="more-case">
                        <?php if(!empty($case_meta22['other_case'])): ?>
                        	<h3><?php echo esc_html($case_meta22['other_case']); ?></h3>
                    	<?php endif; ?>
                        <ul>
                        	<?php 
		                	if(!empty($case_meta22['other_list'])):
		                	foreach($case_meta22['other_list'] as $other_li):
		                	?>
                            	<li><?php if(!empty($other_li['list_other'])): echo esc_html($other_li['list_other']); endif; ?></li>
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </ul>
                    </div>
                    <div class="brochure">
                        <?php if(!empty($case_meta22['download_case'])): ?>
                        	<h3><?php echo esc_html($case_meta22['download_case']); ?></h3>
                    	<?php endif; ?>
                        <ul>
                        	<?php 
		                	if(!empty($case_meta22['down_btn'])):
		                	foreach($case_meta22['down_btn'] as $down_bt):
		                	?>
                            <li>
                            	<?php if(!empty($down_bt['button_text'])): ?>
                                	<a href="<?php echo esc_url($down_bt['button_url']); ?>" class="active">
                                		<i class="far fa-file-pdf"></i><?php echo esc_html($down_bt['button_text']); ?></a>
                            	<?php endif; ?>
                            </li>
                            <?php 
			                endforeach;
			            	endif;
		                    ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- case section ending here -->

<!-- client-slider section start here -->
<section class="testimonial style-4 padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="testi-slider4">
                <div class="swiper-wrapper">
                	<?php
                	if(!empty($case_meta22['case_slider'])):
                	foreach($case_meta22['case_slider'] as $case_met):

                	if ( isset($case_met['slider_img']['id'])) {
						$test_img = wp_get_attachment_image_src($case_met['slider_img']['id'], 'large');
					}
                	?>
                    <div class="swiper-slide">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <img src="<?php echo esc_url($test_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <div class="post-content">
                                	<?php if(!empty($case_met['slider_desc'])): ?>
                                    	<p><?php echo esc_html($case_met['slider_desc']); ?></p>
                                	<?php endif; ?>
                                    <h6><?php if(!empty($case_met['slider_title'])):  echo esc_html($case_met['slider_title']); endif; ?><span><?php if(!empty($case_met['slider_posi'])): echo esc_html($case_met['slider_posi']); endif; ?></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                 endforeach;
            	endif;
                ?>
                </div>
            </div>
        </div>
        <div class="testi-slider4-pagination">
        </div>
    </div>
</section>
<!-- client-slider section ending here -->

<!-- case section start here -->
<section class="case-study style-3 padding-tb">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Other Case Studies', 'lector'); ?></h2>
        </div>
        <div class="section-wrapper">
        	<?php 
        	$case_sq = new WP_Query(array(
				'post_type' => 'case-study',
				'post_status' => 'publish',
				'posts_per_page' =>3,
				'order' => 'DESC',
				)
			);
			if ($case_sq->have_posts()) :
			while($case_sq->have_posts()): $case_sq->the_post(); 
			$case_meta = get_post_meta(get_the_ID(), 'case_meta', true);
        	?>
            <div class="post-item">
                <div class="post-inner">
                	<?php if(has_post_thumbnail()): ?>
                    <div class="post-thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                	<?php endif; ?>
                    <div class="post-content">
                    	<?php if(!empty($case_meta['sub_title'])): ?>
                        	<p><?php echo esc_html($case_meta['sub_title']); ?></p>
                    	<?php endif; ?>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    </div>
                </div>
            </div>
            <?php 
            endwhile; 
			endif;
			wp_reset_query();
            ?>
        </div>
    </div>
</section>
<!-- case section ending here -->
<?php
get_footer();
