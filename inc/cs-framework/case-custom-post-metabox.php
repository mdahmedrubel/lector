<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'case_meta';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Sub Title',
    'post_type'          => 'case-study',
    'data_type'          => 'serialize',
    'context'            => 'side',
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
    'title'  => esc_html( 'Case Study Sub Title', 'lector' ),
    'fields' => array(
       array(
            'id'    => 'sub_title',
            'type'  => 'text',
            'title' => esc_html('Add your sub title here', 'lector' ),
          ),
        )
      ) 
    );


}