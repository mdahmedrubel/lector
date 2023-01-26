<?php 
/*Lector Theme options*/
if( class_exists( 'CSF' ) ) {

$prefix = 'lector_options';

CSF::createOptions( $prefix, array(
    'framework_title'         => wp_kses_post('Lector Theme Options <small>  By CodexCoder</small>', 'lector'),
    'framework_class'         => '',

    'menu_title'              => esc_html('Theme Options', 'lector'),
    'menu_slug'               => 'theme-options',
    'menu_type'               => 'menu',
    'menu_capability'         => 'manage_options',
    'menu_icon'               => null,
    'menu_position'           => null,
    'menu_hidden'             => false,
    'menu_parent'             => '',

    'show_bar_menu'           => true,
    'show_sub_menu'           => true,
    'show_in_network'         => true,
    'show_in_customizer'      => false,

    'show_search'             => false,
    'show_reset_all'          => true,
    'show_reset_section'      => true,
    'show_footer'             => true,
    'show_all_options'        => true,
    'sticky_header'           => true,
    'save_defaults'           => true,
    'ajax_save'               => true,

    'footer_text'             => wp_kses_post('Lector is a Business Theme <small>By codexcoder.com</small>', 'lector'),
    'footer_after'            => '',
    'footer_credit'           => esc_html('Lector Design and Developed by CodexCoder', 'lector'),

    'database'                => '', 
    'transient_time'          => 0,

    'contextual_help'         => array(),
    'contextual_help_sidebar' => '',

    'enqueue_webfont'         => true,
    'async_webfont'           => false,

    'output_css'              => true,
    'theme'                   => 'dark',
    'class'                   => '',
    'defaults'                => array(),

));


/*Lector back to top option*/
CSF::createSection( $prefix, array(
    'title'  => esc_html( 'General Options', 'lector' ),
    'fields' => array(
        array(
          'id'      => 'lector_preloader',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Lector Preloader Switch On / Off', 'lector'),
          'label'   => esc_html('If you want you can switch off or on for the Preloader.', 'lector'),
          'default' => true
        ),
        array(
          'id'      => 'lector_search',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Lector Search Switch On / Off', 'lector'),
          'label'   => esc_html('If you want you can switch off or on for the header search.', 'lector'),
          'default' => true
        ), 
        array(
          'id'      => 'lector_scroll_top',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Lector Scroll To Top On / Off', 'lector'),
          'label'   => esc_html('If you want you can switch off or on for the scroll to top', 'lector'),
          'default' => true
        ), 
        array(
          'id'      => 'lector_breadcrumbs',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Lector breadcrumbs On / Off', 'lector'),
          'label'   => esc_html('If you want you can switch off or on for the breadcrumbs', 'lector'),
          'default' => true
        ), 
      )
    ) 
  );


 /* header variation style options*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Lector Header', 'lector' ),
    'fields' => array(
          array(
            'id'      => 'header_top_switch',
            'type'    => 'switcher',
            'title'   =>  esc_html( 'Lector Header Top Switcher', 'lector'),
            'label'   => esc_html('If you want you can switch off or on for the header top', 'lector'),
            'default' => true
          ), 
          array(
            'id'      => 'header_address',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top left address', 'lector'),
            'desc'    => esc_html('Header top address text', 'lector'),
            'placeholder'    => esc_html('Add address here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_number',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right mobile number', 'lector'),
            'desc'    => esc_html('Add header top mobile number', 'lector'),
            'placeholder'    => esc_html('Add mobile number here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_email',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right email address', 'lector'),
            'desc'    => esc_html('Add header top email address', 'lector'),
            'placeholder'    => esc_html('Add email address here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_facebook',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right facebook profile', 'lector'),
            'desc'    => esc_html('Add header top right facebook url', 'lector'),
            'placeholder'    => esc_html('Add facebook url here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_twittre',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right twitter profile', 'lector'),
            'desc'    => esc_html('Add header top right twitter url', 'lector'),
            'placeholder'    => esc_html('Add twitter url here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_youtube',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right youtube profile', 'lector'),
            'desc'    => esc_html('Add header top right youtube url', 'lector'),
            'placeholder'    => esc_html('Add youtube url here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_linkedin',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right linkedin profile', 'lector'),
            'desc'    => esc_html('Add header top right linkedin url', 'lector'),
            'placeholder'    => esc_html('Add linkedin url here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'header_gplus',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header top right google plus profile', 'lector'),
            'desc'    => esc_html('Add header top right google plus url', 'lector'),
            'placeholder'    => esc_html('Add G+ url here', 'lector'),
            'dependency'     => array( 'header_top_switch', '==', 'true' ),
          ),
          /*Header two content*/
          array(
            'id'      => 'header_two_switch',
            'type'    => 'switcher',
            'title'   =>  esc_html( 'Header two button switcher', 'lector'),
            'label'   => esc_html('If you want you can switch off or on for the header topbutton and mobile number', 'lector'),
            'default' => true
          ),
          array(
            'id'      => 'header_two_number',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header two mobile number', 'lector'),
            'desc'    => esc_html('Add header mobile number here', 'lector'),
            'placeholder'    => esc_html('Add mobile number', 'lector'),
            'dependency'     => array( 'header_two_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'quote_btn_txt',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header two quote button text', 'lector'),
            'desc'    => esc_html('Add header quote button text', 'lector'),
            'placeholder'    => esc_html('Add button text', 'lector'),
            'dependency'     => array( 'header_two_switch', '==', 'true' ),
          ),
          array(
            'id'      => 'quote_btn_url',
            'type'    => 'text',
            'title'   =>  esc_html( 'Header two quote button url', 'lector'),
            'desc'    => esc_html('Add header quote button url', 'lector'),
            'placeholder'    => esc_html('Add button url', 'lector'),
            'dependency'     => array( 'header_two_switch', '==', 'true' ),
          ),
          array(
            'id'          => 'lector_header_style',
            'type'        => 'select',
            'title'       => esc_html('Select Header Variation', 'lector'),
            'options'     => array(
              '1'    => esc_html__('Header Style One', 'lector'),
              '2'    => esc_html__('Header Style Two', 'lector'),
              '3'    => esc_html__('Header Style Three', 'lector'),
            ),
            'default'     => 'header-1',
          ),
        )
      ) 
    );


  /*Lector search none text*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Search None Settings', 'lector' ),
    'fields' => array( 
        array(
          'id'    => 'search_none_title',
          'type'  => 'text',
          'title' => esc_html('Add search none title', 'lector' ),
          'desc'  => esc_html('search none title here.' , 'lector'),
          'default' =>  esc_html('Couldn\'t find what you\'re looking for!', 'lector'),
        ),
        array(
          'id'      => 'opps_text',
          'type'    => 'text',
          'title'   =>  esc_html( 'Search None Opps Text', 'lector'),
          'desc'          => esc_html('Opps text here' , 'lector'),
          'default' =>  esc_html('Opps', 'lector'),
        ),
      )
    ) 
  );


 /*Lector 404 page content*/
 CSF::createSection( $prefix, array(
  'title'  => esc_html( '404 Page Settings', 'lector' ),
  'fields' => array( 
      array(
        'id'    => '404_img',
        'type'  => 'media',
        'title' => esc_html('404 Page Image', 'lector' ),
        'desc'  => esc_html('404 page image goes here.' , 'lector'),
      ),
      array(
        'id'      => '404_title',
        'type'    => 'text',
        'title'   =>  esc_html( '404 Page Title', 'lector'),
        'desc'          => esc_html('Title goes here' , 'lector'),
        'default' =>  esc_html('Ooops! This Page Not Found', 'lector'),
      ),
      array(
        'id'      => '404_desc',
        'type'    => 'textarea',
        'title'   =>  esc_html( '404 Page Description', 'lector'),
        'desc'          => esc_html('Description goes here' , 'lector'),
        'default' =>  esc_html('The page you are looking for is no longer here. Maybe it was never here in the first place. In any case, we are sorry you were sent on this wild goose chase, and have already taken steps to have the person responsible fired.', 'lector'),
      ),
      array(
        'id'      => '404_btn_txt',
        'type'    => 'text',
        'title'   =>  esc_html( '404 Butotn Text', 'lector'),
        'desc'          => esc_html('Button text goes here' , 'lector'),
        'default' =>  esc_html('Click Here', 'lector'),
      ),
      array(
        'id'      => 'btn_right_txt',
        'type'    => 'text',
        'title'   =>  esc_html( '404 Butotn Right Text', 'lector'),
        'desc'          => esc_html('Button right text goes here' , 'lector'),
        'default' =>  esc_html('to go back home page', 'lector'),
      ),
    )
  ) 
);


/*Lector footer bottom*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Footer Settings', 'lector' ),
    'fields' => array( 
        array(
          'id'    => 'footer_settings',
          'type'  => 'switcher',
          'title' => esc_html('Switch on/off for footer bottom', 'lector' ),
          'default' => true,
        ),
        array(
          'id'      => 'footer_copyright',
          'type'    => 'wp_editor',
          'title'   =>  esc_html( 'Footer Copyright Text', 'lector'),
          'placeholder'   => esc_html('add footer copyright text', 'lector'),
          'desc'          => esc_html('Add copyright text here.' , 'lector'),
          'dependency'     => array( 'footer_settings', '==', 'true' ),
        ),
      )
    ) 
  );


/* Lector theme backup options */
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Theme Options Backup', 'lector' ),
    'fields' => array(
      array(
        'id'    => 'theme_bkp',
        'type'  => 'backup',
        'title' => esc_html( 'Lector Theme options backup', 'lector' ),
      ),
    )
  ) 
);


}
