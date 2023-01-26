<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'service_single';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Lector single service content',
    'post_type'          => 'service',
    'data_type'          => 'serialize',
    'context'            => 'advanced',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => '',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
    'class'              => '',
  ) );


 /*service single page menu here*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Service Menu', 'lector' ),
  'fields' => array(
     array(
        'id'    => 'service_stitle',
        'type'  => 'text',
        'title' => esc_html('Add your title', 'lector' ),
        ),
        array(
            'id'        => 'service_menus',
            'type'      => 'group',
            'title'     => esc_html('Add service menu', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'service_me',
                'type'  => 'text',
                'title' => esc_html('Add your services tab menu', 'lector' ),
              ),
            ),
          ),
        )
      ) 
    );


  /*service single page content here*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Service Content', 'lector' ),
  'fields' => array(
        array(
            'id'        => 'service_content',
            'type'      => 'group',
            'title'     => esc_html('Add service content', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'content_title',
                'type'  => 'text',
                'title' => esc_html('Add your services single title', 'lector' ),
              ),
              array(
                'id'    => 'content_img',
                'type'  => 'media',
                'title' => esc_html('Add your services single tab image', 'lector' ),
              ),
              array(
                'id'    => 'main_content',
                'type'  => 'wp_editor',
                'title' => esc_html('Add your services single content', 'lector' ),
              ),
              array(
                'id'    => 'content_title2',
                'type'  => 'text',
                'title' => esc_html('Add your title two', 'lector' ),
              ),
              array(
                'id'    => 'main_content2',
                'type'  => 'wp_editor',
                'title' => esc_html('Add your services single content two', 'lector' ),
              ),
              array(
                'id'    => 'singlea_grap',
                'type'  => 'media',
                'title' => esc_html('Add your service single image', 'lector' ),
              ),
              array(
                'id'    => 'incom_text',
                'type'  => 'text',
                'title' => esc_html('Add your income text', 'lector' ),
              ),
              array(
                'id'    => 'incom_amount',
                'type'  => 'text',
                'title' => esc_html('Add your income amount', 'lector' ),
              ),
              array(
                'id'    => 'montyly_visit',
                'type'  => 'text',
                'title' => esc_html('Add your monthly visitor text', 'lector' ),
              ),
              array(
                'id'    => 'montyly_vist',
                'type'  => 'text',
                'title' => esc_html('Add your monthly visitor count', 'lector' ),
              ),
            ),
          ),
        )
      ) 
    );


/*service single page testimonial*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Service Sigle Testimonial', 'lector' ),
  'fields' => array(
        array(
            'id'        => 'ser_testis',
            'type'      => 'group',
            'title'     => esc_html('Add service single testimonial', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'stesti_name',
                'type'  => 'text',
                'title' => esc_html('Add single service testimonial name', 'lector' ),
              ),
              array(
                'id'    => 'stesti_nameurl',
                'type'  => 'text',
                'title' => esc_html('Add single service testimonial name url', 'lector' ),
              ),
              array(
                'id'    => 'stesti_posi',
                'type'  => 'text',
                'title' => esc_html('Add single service testimonial position', 'lector' ),
              ),
              array(
                'id'    => 'stesti_cont',
                'type'  => 'textarea',
                'title' => esc_html('Add single service testimonial content', 'lector' ),
              ),
              array(
                'id'    => 'stesti_img',
                'type'  => 'media',
                'title' => esc_html('Add single service testimonial image', 'lector' ),
              ),
            ),
          ),
          array(
            'id'        => 'testi_nav',
            'type'      => 'group',
            'title'     => esc_html('Add Testimonial Navigation', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'nav_name',
                'type'  => 'text',
                'title' => esc_html('Navigation name', 'lector' ),
              ),
              array(
                'id'    => 'nav_position',
                'type'  => 'text',
                'title' => esc_html('Navigation position', 'lector' ),
              ),
              array(
                'id'    => 'nav_img',
                'type'  => 'media',
                'title' => esc_html('Navigation thumbnail', 'lector' ),
              ),
            ),
          ),
        )
      ) 
    );



  /*service single page Brochure*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Service Brochure Content', 'lector' ),
  'fields' => array(
      array(
        'id'    => 'brouchur_tit',
        'type'  => 'text',
        'title' => esc_html('Add your title', 'lector' ),
      ),
      array(
        'id'    => 'brou_cont',
        'type'  => 'textarea',
        'title' => esc_html('Add your content', 'lector' ),
      ),
      array(
        'id'    => 'brouc_btn',
        'type'  => 'text',
        'title' => esc_html('Add button text', 'lector' ),
      ),
      array(
        'id'    => 'brouc_url',
        'type'  => 'text',
        'title' => esc_html('Add button url', 'lector' ),
        ),
      )
    ) 
  );


  /*service single page need help*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Help Content', 'lector' ),
  'fields' => array(
     array(
        'id'    => 'help_tit',
        'type'  => 'text',
        'title' => esc_html('Add your title', 'lector' ),
        ),
        array(
            'id'        => 'single_addr',
            'type'      => 'group',
            'title'     => esc_html('Add service single address', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'left_text',
                'type'  => 'text',
                'title' => esc_html('Add single service left text', 'lector' ),
              ),
              array(
                'id'    => 'right_add',
                'type'  => 'text',
                'title' => esc_html('Add single service address', 'lector' ),
              ),

            ),
          ),
        )
      ) 
    );




}