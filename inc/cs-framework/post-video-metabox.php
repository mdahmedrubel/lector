<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'video_post';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Lector Video Post',
    'post_type'          => 'post',
    'data_type'          => 'serialize',
    'context'            => 'side',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => 'video',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
    'class'              => '',
  ) );


  /*Video post section metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Post Format Video', 'lector' ),
    'fields' => array(
       array(
            'id'    => 'video-url',
            'type'  => 'text',
            'title' => esc_html('Insert your embed video url only', 'lector' ),
          ),
        )
      ) 
    );


}