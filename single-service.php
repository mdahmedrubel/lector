<?php
/**
 * The template for displaying single service page
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
$service_single = get_post_meta(get_the_ID(), 'service_single', true);
?>
<!-- Service single section start here -->
<section class="service-single padding-tb">
    <div class="container">
        <div class="section-wrapper row justify-content-center flex-row-reverse">
            <div class="right-item sticky-widget">
                <div class="tab-cont">
                	<?php
                	if(!empty($service_single['service_content'])):
                	foreach($service_single['service_content'] as $service_conten):
                	?>
                    <div class="tab-pane">
                        <div class="post-thumb">
                            <?php 
			                if ( isset($service_conten['content_img']['id'])) {
									$service_single_img = wp_get_attachment_image_src($service_conten['content_img']['id'], 'large');
								}
			                ?>
			                <img src="<?php echo esc_url($service_single_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <?php if(!empty($service_conten['content_title'])): ?>
                    		<h3><?php echo esc_html($service_conten['content_title']); ?></h3>
                		<?php endif; ?>

                        <?php if(!empty($service_conten['main_content'])): ?>
                    		<p><?php echo esc_html($service_conten['main_content']); ?></p>
                		<?php endif; ?>
                        <div class="post-item d-flex flex-wrap ">
                            <div class="post-thumb">
                                <div class="thumb">
                                    <?php 
					                if ( isset($service_conten['singlea_grap']['id'])) {
											$service_grap = wp_get_attachment_image_src($service_conten['singlea_grap']['id'], 'large');
										}
					                ?>
					                <img src="<?php echo esc_url($service_grap[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <div class="ser-sing-items d-flex flex-wrap justify-content-between">
                                    <div class="item">
                                        <?php if(!empty($service_conten['incom_text'])): ?>
				                    		<p><?php echo esc_html($service_conten['incom_text']); ?></p>
				                		<?php endif; ?>
                                        <?php if(!empty($service_conten['incom_amount'])): ?>
				                    		<h5><?php echo esc_html($service_conten['incom_amount']); ?></h5>
				                		<?php endif; ?>
                                    </div>
                                    <div class="item">
                                        <?php if(!empty($service_conten['montyly_visit'])): ?>
				                    		<p><?php echo esc_html($service_conten['montyly_visit']); ?></p>
				                		<?php endif; ?>
                                        <?php if(!empty($service_conten['montyly_vist'])): ?>
				                    		<h5><?php echo esc_html($service_conten['montyly_vist']); ?></h5>
				                		<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">
                                <?php if(!empty($service_conten['content_title2'])): ?>
		                    		<h4><?php echo esc_html($service_conten['content_title2']); ?></h4>
		                		<?php endif; ?>
                                 <?php if(!empty($service_conten['main_content2'])): ?>
		                    		<p><?php echo esc_html($service_conten['main_content2']); ?></p>
		                		<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                	endforeach; 
                	endif;
                	?>
                </div>
                <div class="testimonial style-5">
                    <div class="section-wrapper">
                        <div class="tab-content">
                        	<?php
		                	if(!empty($service_single['ser_testis'])):
		                	$s_count = 0;
		                	foreach($service_single['ser_testis'] as $ser_testi):
		                	$s_count++;
		                	?>
                            <div class="tab-pane <?php if($s_count == 1){ echo esc_html_e('active', 'lector'); } ?>" id="one-<?php echo esc_attr($s_count); ?>">
                                <div class="post-item">
                                    <div class="post-thumb">
                                    	<?php 
                                    	if(isset($ser_testi['stesti_img']['id'])){
                                    	$service_timg = wp_get_attachment_image_src($ser_testi['stesti_img']['id'], 'large');
                                    	}
                                    	?>
                                        <img src="<?php echo esc_url($service_timg[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                    </div>
                                    <?php if(!empty($ser_testi['stesti_cont'])): ?>
                                    	<p><?php echo esc_html($ser_testi['stesti_cont']); ?></p>
                                	<?php endif; ?>
                                    <h6>
                                        <a href="<?php if(!empty($ser_testi['stesti_nameurl'])): echo esc_url($ser_testi['stesti_nameurl']); endif; ?>"><?php if(!empty($ser_testi['stesti_name'])): echo esc_html($ser_testi['stesti_name']); endif; ?></a> , 
                                    	<span><?php if(!empty($ser_testi['stesti_posi'])): echo esc_html($ser_testi['stesti_posi']); endif; ?></span>
                                    </h6>
                                </div>
                            </div>
                            <?php
		                	endforeach; 
		                	endif;
		                	?>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                        	<?php
		                	if(!empty($service_single['testi_nav'])):
		                	$nav_count = 0;
		                	foreach($service_single['testi_nav'] as $testi_na):
		                	$nav_count++;
		                	?>
                            <li class="<?php if($nav_count == 1){ echo esc_html_e('active', 'lector'); } ?> flaticon-upload">
                                <a href="#one-<?php echo esc_attr($nav_count); ?>" class="<?php if($nav_count == 1){ echo esc_html_e('active', 'lector'); } ?>" role="tab" data-toggle="tab">
                                    <div class="post-thumb">
                                    	<?php 
                                    	if(isset($testi_na['nav_img']['id'])){
                                    	$testi_nimg = wp_get_attachment_image_src($testi_na['nav_img']['id'], 'large');
                                    	}
                                    	?>
                                        <img src="<?php echo esc_url($testi_nimg[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                    </div>
                                    <h6><?php if(!empty($testi_na['nav_name'])): echo esc_html($testi_na['nav_name']); endif; ?><span><?php if(!empty($testi_na['nav_position'])): echo esc_html($testi_na['nav_position']); endif; ?></span></h6>
                                </a>
                            </li>
                            <?php
		                	endforeach; 
		                	endif;
		                	?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="left-item sticky-widget">
                <div class="service-tab">
                	<?php if(!empty($service_single['service_stitle'])): ?>
                    	<h3><?php echo esc_html($service_single['service_stitle']); ?></h3>
                	<?php endif; ?>
                    <ul class="tab-menu">
                    	<?php
                    	if(!empty($service_single['service_menus'])):
                    	$menus = 0;
                    	foreach($service_single['service_menus'] as $service_sing):
                    	$menus++;
                    	?>
                        	<li class="<?php echo esc_attr($menus); ?>"><?php if(!empty($service_sing['service_me'])): echo esc_html($service_sing['service_me']); endif; ?></li>
                    	<?php
                    	endforeach; 
                    	endif;
                    	?>
                    </ul>
                </div>
                <div class="brochure">
                    <?php if(!empty($service_single['brouchur_tit'])): ?>
                    	<h3><?php echo esc_html($service_single['brouchur_tit']); ?></h3>
                	<?php endif; ?>
                    <?php if(!empty($service_single['brou_cont'])): ?>
                    	<p><?php echo esc_html($service_single['brou_cont']); ?></p>
                	<?php endif; ?>
                	<?php if(!empty($service_single['brouc_btn'])): ?>
                    	<a href="<?php echo esc_url($service_single['brouc_url']); ?>" class="btn"><i class="far fa-file-pdf"></i><?php echo esc_html($service_single['brouc_btn']); ?></a>
                    <?php endif; ?>
                </div>
                <div class="need-help">
                	<?php if(!empty($service_single['help_tit'])): ?>
                    	<h3><?php echo esc_html($service_single['help_tit']); ?></h3>
                    <?php endif; ?>
                    <ul>
                    	<?php
                    	if(!empty($service_single['single_addr'])):
                    	foreach($service_single['single_addr'] as $single_add):
                    	?>
                        	<li><span><?php if(!empty($single_add['left_text'])): echo esc_html($single_add['left_text']); endif; ?></span><?php if(!empty($single_add['right_add'])): echo esc_html($single_add['right_add']); endif; ?></li>
                        <?php
                    	endforeach; 
                    	endif;
                    	?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Service single section ending here -->

<?php
get_footer();
