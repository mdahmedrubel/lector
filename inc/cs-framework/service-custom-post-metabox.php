<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'service_meta';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Lector Service Icon',
    'post_type'          => 'service',
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


  /*Services section metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Service Icon', 'lector' ),
    'fields' => array(
       array(
            'id'    => 'service_icon',
            'type'  => 'media',
            'title' => esc_html('Add your service icon here', 'lector' ),
          ),
        )
      ) 
    );


}