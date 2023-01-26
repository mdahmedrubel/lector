<?php 
/**
 * Enqueue scripts and styles.
 */
if ( ! defined( 'LECTOR_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'LECTOR_VERSION', '1.0.0' );
}


/**
 * Enqueue scripts and styles.
 */
function lector_scripts() {
	wp_enqueue_style(  'google-font', '//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i');
	wp_enqueue_style(  'google-roboto-fonts', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');
	wp_enqueue_style( 'lector-style', get_stylesheet_uri(), array(), LECTOR_VERSION );
	wp_style_add_data( 'lector-style', 'rtl', 'replace' );

	wp_enqueue_style( 'animate-css' ,    	get_template_directory_uri() .  '/assets/css/animate.css', array(),       	LECTOR_VERSION, false);
	wp_enqueue_style( 'bootstrap-css' ,     get_template_directory_uri() .  '/assets/css/bootstrap-grid.css', array(),  LECTOR_VERSION, false);
	wp_enqueue_style( 'all.min-css' ,    	get_template_directory_uri() .  '/assets/css/all.min.css', array(),       	LECTOR_VERSION, false);
	wp_enqueue_style( 'lightcase-css' ,     get_template_directory_uri() .  '/assets/css/lightcase.css', array(),       LECTOR_VERSION, false);
	wp_enqueue_style( 'flaticon-css' ,      get_template_directory_uri() .  '/assets/flaticon/flaticon.css', array(),   LECTOR_VERSION, false);
	wp_enqueue_style( 'swiper-css' ,    	get_template_directory_uri() .  '/assets/css/swiper.min.css', array(),      LECTOR_VERSION, false);
	wp_enqueue_style( 'slick-css' ,    		get_template_directory_uri() .  '/assets/css/slick.css', array(),       	LECTOR_VERSION, false);
	wp_enqueue_style( 'slick-theme-css' ,   get_template_directory_uri() .  '/assets/css/slick-theme.css', array(),     LECTOR_VERSION, false);
	wp_enqueue_style( 'jquery.nstSlider-css' ,  get_template_directory_uri() .  '/assets/css/jquery.nstSlider.css', array(),  LECTOR_VERSION, false);
	wp_enqueue_style( 'main-style-css' ,    	get_template_directory_uri() .  '/assets/css/style.css', array(),       	  LECTOR_VERSION, false);
	wp_enqueue_style( 'developer-css' ,    		get_template_directory_uri() .  '/assets/css/developer.css', array(),         LECTOR_VERSION, false);


	wp_enqueue_script( 'fontawesome-js',  get_template_directory_uri() . 	 '/assets/js/fontawesome.min.js', array('jquery'),LECTOR_VERSION, true );
	wp_enqueue_script( 'counterup-js',    get_template_directory_uri() . 	 '/assets/js/jquery.counterup.min.js', array('jquery'),    	LECTOR_VERSION, true );
	wp_enqueue_script( 'easing-js',  	  get_template_directory_uri() . 	 '/assets/js/jquery.easing.js', array('jquery'),    	    LECTOR_VERSION, true );
	wp_enqueue_script( 'slick-js',  	  get_template_directory_uri() . 	 '/assets/js/slick.min.js', array('jquery'),    			LECTOR_VERSION, true );
	wp_enqueue_script( 'lightcase-js',    get_template_directory_uri() . 	 '/assets/js/lightcase.js', array('jquery'),    			LECTOR_VERSION, true );
	wp_enqueue_script( 'countdown-js',    get_template_directory_uri() . 	 '/assets/js/circular-countdown.js', array('jquery'),    	LECTOR_VERSION, true );
	wp_enqueue_script( 'jquery.countdown-js', get_template_directory_uri().  '/assets/js/jquery.countdown.min.js', array('jquery'), LECTOR_VERSION, true );
	wp_enqueue_script( 'waypoints-js',    get_template_directory_uri() . 	 '/assets/js/waypoints.min.js', array('jquery'),    		LECTOR_VERSION, true );
	wp_enqueue_script( 'bootstrap-js',    get_template_directory_uri() . 	 '/assets/js/bootstrap.min.js', array('jquery'),    		LECTOR_VERSION, true );
	wp_enqueue_script( 'isotope-js',      get_template_directory_uri() . 	 '/assets/js/isotope.pkgd.min.js', array('jquery'),    		LECTOR_VERSION, true );
	wp_enqueue_script( 'wow-js',  		  get_template_directory_uri() . 	 '/assets/js/wow.min.js', array('jquery'),    				LECTOR_VERSION, true );
	wp_enqueue_script( 'theia-js',  	  get_template_directory_uri() . 	 '/assets/js/theia-sticky-sidebar.js', array('jquery'),    	LECTOR_VERSION, true );
	wp_enqueue_script( 'swiper-js',  	  get_template_directory_uri() . 	 '/assets/js/swiper.min.js', array('jquery'),    			LECTOR_VERSION, true );
	wp_enqueue_script( 'nstSlider-js',    get_template_directory_uri() . 	 '/assets/js/jquery.nstSlider.js', array('jquery'),    		LECTOR_VERSION, true );
	wp_enqueue_script( 'navigation-js',   get_template_directory_uri() . 	 '/assets/js/navigation.js', array('jquery'),    			LECTOR_VERSION, true );
    //wp_enqueue_script( 'customizer-js',   get_template_directory_uri() . 	 '/assets/js/customizer.js', array('jquery'),    			LECTOR_VERSION, true );
	wp_enqueue_script( 'functions-js',    get_template_directory_uri() . 	 '/assets/js/functions.js', array('jquery'),    			LECTOR_VERSION, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lector_scripts' );