<?php
/*Control core classes for avoid errors*/
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'case_two';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Case study main contnt',
    'post_type'          => 'case-study',
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


  /*Case study section metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Case Study Content', 'lector' ),
    'fields' => array(
        array(
            'id'    => 'casem_title',
            'type'  => 'text',
            'title' => esc_html('Add your case study title', 'lector' ),
            ),

              array(
                'id'    => 'case_time',
                'type'  => 'text',
                'title' => esc_html('Add your time', 'lector' ),
              ), 
              array(
                'id'    => 'time_url',
                'type'  => 'text',
                'title' => esc_html('Add your url', 'lector' ),
              ),
              array(
                'id'    => 'case_client',
                'type'  => 'text',
                'title' => esc_html('Add your client', 'lector' ),
              ), 
              array(
                'id'    => 'client_url',
                'type'  => 'text',
                'title' => esc_html('Add your url', 'lector' ),
              ),
              array(
                'id'    => 'case_service',
                'type'  => 'text',
                'title' => esc_html('Add your client', 'lector' ),
              ), 
              array(
                'id'    => 'case_surl',
                'type'  => 'text',
                'title' => esc_html('Add your url', 'lector' ),
              ),  


            array(
              'id'    => 'casem_bimage',
              'type'  => 'media',
              'title' => esc_html('Add your case study big image', 'lector' ),
            ),
            array(
              'id'        => 'casem_timg',
              'type'      => 'group',
              'max'       => 2,
              'title'     => esc_html('Add content image', 'lector' ),
              'fields'    => array(
                array(
                  'id'    => 'cn_image',
                  'type'  => 'media',
                  'title' => esc_html('Add your image', 'lector' ),
                ), 
              ),
            ),
            array(
              'id'    => 'img_content',
              'type'  => 'textarea',
              'title' => esc_html('Add your content', 'lector' ),
            ), 
          )
        ) 
      );


  /*challenge content here*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Challente Content', 'lector' ),
  'fields' => array(
     array(
          'id'    => 'challente_title',
          'type'  => 'text',
          'title' => esc_html('Add your title', 'lector' ),
          ),
          array(
            'id'    => 'challente_con',
            'type'  => 'textarea',
            'title' => esc_html('Add your content', 'lector' ),
          ),
          array(
              'id'        => 'challentes',
              'type'      => 'group',
              'title'     => esc_html('Add chalange section content', 'lector' ),
              'fields'    => array(
                array(
                  'id'    => 'cgroup_title',
                  'type'  => 'text',
                  'title' => esc_html('Add your title', 'lector' ),
                ),
                array(
                  'id'    => 'cgroup_con',
                  'type'  => 'textarea',
                  'title' => esc_html('Add your content', 'lector' ),
                ),
              ),
            ),
          )
        ) 
      );


  /*action and solutions content here*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Action & solution', 'lector' ),
  'fields' => array(
     array(
          'id'    => 'action_title',
          'type'  => 'text',
          'title' => esc_html('Add your title', 'lector' ),
          ),
          array(
            'id'    => 'action_con',
            'type'  => 'textarea',
            'title' => esc_html('Add your content', 'lector' ),
          ),
          array(
              'id'        => 'actions',
              'type'      => 'group',
              'title'     => esc_html('Add chalange section content', 'lector' ),
              'fields'    => array(
                array(
                  'id'    => 'action_list',
                  'type'  => 'text',
                  'title' => esc_html('Add your title', 'lector' ),
                ),
              ),
            ),
          )
        ) 
      );

   /*result and solutions content here*/
  CSF::createSection( $prefix, array(
  'title'  => esc_html( 'Result Content', 'lector' ),
  'fields' => array(
     array(
          'id'    => 'result_title',
          'type'  => 'text',
          'title' => esc_html('Add your title', 'lector' ),
          ),
          array(
            'id'    => 'result_con',
            'type'  => 'textarea',
            'title' => esc_html('Add your content', 'lector' ),
          ),
          array(
              'id'        => 'results',
              'type'      => 'group',
              'title'     => esc_html('Add result section content', 'lector' ),
              'fields'    => array(
                array(
                  'id'    => 'result_list',
                  'type'  => 'text',
                  'title' => esc_html('Add your list', 'lector' ),
                ),
              ),
            ),
            array(
            'id'    => 'result_img',
            'type'  => 'media',
            'title' => esc_html('Add your image', 'lector' ),
          ),
          )
        ) 
      );

  /*slider content here*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Case single slider', 'lector' ),
    'fields' => array(
         array(
            'id'        => 'case_slider',
            'type'      => 'group',
            'title'     => esc_html('Add slider here', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'slider_title',
                'type'  => 'text',
                'title' => esc_html('Add your title', 'lector' ),
              ), 
              array(
                'id'    => 'slider_desc',
                'type'  => 'textarea',
                'title' => esc_html('Add your content', 'lector' ),
              ), 
              array(
                'id'    => 'slider_img',
                'type'  => 'media',
                'title' => esc_html('Add your image', 'lector' ),
              ),
              array(
                'id'    => 'slider_posi',
                'type'  => 'text',
                'title' => esc_html('Add your position', 'lector' ),
              ),
            ),
          ),
        )
      ) 
    );

  /*slider content here*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Case Sidebar Content', 'lector' ),
    'fields' => array(
          array(
            'id'    => 'sidebar_title',
            'type'  => 'text',
            'title' => esc_html('Add your title', 'lector' ),
          ),
          array(
            'id'    => 'sidebar_img',
            'type'  => 'media',
            'title' => esc_html('Add your image', 'lector' ),
          ),
          array(
            'id'    => 'sidebar_name',
            'type'  => 'text',
            'title' => esc_html('Add your sidebar name', 'lector' ),
          ),
          array(
            'id'    => 'name_url',
            'type'  => 'text',
            'title' => esc_html('Add your sidebar name url', 'lector' ),
          ),
          array(
            'id'    => 'sidebar_position',
            'type'  => 'text',
            'title' => esc_html('Add your sidebar position', 'lector' ),
          ),
          array(
            'id'    => 'sidebar_cont',
            'type'  => 'textarea',
            'title' => esc_html('Add your sidebar position', 'lector' ),
          ),
          array(
            'id'    => 'fac_url',
            'type'  => 'text',
            'title' => esc_html('Add your facebook url', 'lector' ),
          ),
          array(
            'id'    => 'linke_url',
            'type'  => 'text',
            'title' => esc_html('Add your linkedin url', 'lector' ),
          ),
          array(
            'id'    => 'insta_url',
            'type'  => 'text',
            'title' => esc_html('Add your instagram url', 'lector' ),
          ),
          //other cases
          array(
            'id'    => 'other_case',
            'type'  => 'text',
            'title' => esc_html('Add your other case title', 'lector' ),
          ),
          array(
            'id'        => 'other_list',
            'type'      => 'group',
            'title'     => esc_html('Add other case list', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'list_other',
                'type'  => 'text',
                'title' => esc_html('Add your list', 'lector' ),
              ), 
            ),
          ),
          //download section
          array(
            'id'    => 'download_case',
            'type'  => 'text',
            'title' => esc_html('Add title', 'lector' ),
          ),
          array(
            'id'        => 'down_btn',
            'type'      => 'group',
            'max'       => 2,
            'title'     => esc_html('Add button content', 'lector' ),
            'fields'    => array(
              array(
                'id'    => 'button_text',
                'type'  => 'text',
                'title' => esc_html('Add your button text', 'lector' ),
              ),
              array(
                'id'    => 'button_url',
                'type'  => 'text',
                'title' => esc_html('Add your button url', 'lector' ),
              ),  
            ),
          ),

        )
      ) 
    );


  


}