<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  $prefix = 'gallery_post';

  CSF::createMetabox( $prefix, array(
    'title'              => 'Lector Gallery Post',
    'post_type'          => 'post',
    'data_type'          => 'serialize',
    'context'            => 'side',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => 'gallery',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
    'class'              => '',
  ) );


  /*Gallery post section metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Post Format Gallery', 'lector' ),
    'fields' => array(
       array(
            'id'    => 'gallery-image',
            'type'  => 'gallery',
            'title' => esc_html('Insert your gallery image here', 'lector' ),
          ),
        )
      ) 
    );


}