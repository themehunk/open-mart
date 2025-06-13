<?php
/**
 * Open Mart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Open Mart
 * @since 1.0.0
 */
/**
 * Theme functions and definitions
 */
if ( ! function_exists( 'open_mart_setup' ) ) :
define( 'OPEN_MART_THEME_VERSION','1.3.5');
define( 'OPEN_MART_THEME_DIR', get_template_directory() . '/' );
define( 'OPEN_MART_THEME_URI', get_template_directory_uri() . '/' );

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_open_mart_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function open_mart_setup(){
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'open-mart', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );
		add_editor_style( 'editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-spacing' );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

			apply_filters( 'open_mart_custom_header_args', array(
				'default-image' => '',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => false,
		) 


		) );

	// Recommend plugins
		add_theme_support( 'recommend-plugins', array(

			'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion (Highly Recommended)', 'open-mart' ),
                'img' => 'icon-128x128.png',
				'pro_link' =>'',
                'active_filename' => 'hunk-companion/hunk-companion.php',
            ),
			'vayu-blocks' => array(
			   'name' => esc_html__( 'Vayu blocks For Gutenberg', 'open-mart' ),
			   'img' => 'icon-128x128.png',
			   'pro_link' =>'',
			   'active_filename' => 'vayu-blocks/vayu-blocks.php',
			   ),

			   'th-advance-product-search' => array(
			   'name' => esc_html__( 'Th Advance Product Search', 'open-mart' ),
			   'img' => 'icon-128x128.gif',
			   'pro_link' => esc_url('https://themehunk.com/advance-product-search/'),
			   'active_filename' => 'th-advance-product-search/th-advance-product-search.php',
			   'pro-plugin' => array('slug'=>'th-advance-product-search-pro',
								   'init'=>'th-advance-product-search-pro/th-advance-product-search-pro.php',
									'admin_link'=>'th-advance-product-search-pro',
									'docs'=>esc_url('https://themehunk.com/docs/th-advance-product-search/'),

								   )
		   ),

			'th-all-in-one-woo-cart' => array(
			   'name' => esc_html__( 'Th All In One Woo Cart', 'open-mart' ),
			   'img' => 'icon-128x128.gif',
			   'pro_link' => esc_url('https://themehunk.com/th-all-in-one-woo-cart/'),
			   'active_filename' => 'th-all-in-one-woo-cart/th-all-in-one-woo-cart.php',
			   'pro-plugin' => array('slug'=>'th-all-in-one-woo-cart-pro',
								   'init'=>'th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php',
									'admin_link'=>'th-all-in-one-woo-cart-pro',
									'docs'=>esc_url('https://themehunk.com/docs/th-all-in-one-woo-cart/'),

								   )
		   ),
		   'th-product-compare' => array(
			   'name' => esc_html__( 'Th Product Compare', 'open-mart' ),
			   'img' => 'icon-128x128.gif',
			   'pro_link' => esc_url('https://themehunk.com/th-product-compare/'),
			   'active_filename' => 'th-product-compare/th-product-compare.php',
			   'pro-plugin' => array('slug'=>'th-product-compare-pro',
								   'init'=>'th-product-compare-pro/th-product-compare-pro.php',
									'admin_link'=>'th-product-compare-pro',
									'docs'=>esc_url('https://themehunk.com/docs/th-product-compare/'),

								   )
		   ),
		   'lead-form-builder' => array(
			   'name' => esc_html__( 'Lead Form Builder', 'open-mart' ),
			   'img' => 'icon-128x128.png',
			   'pro_link' => esc_url('https://themehunk.com/product/lead-form-builder-pro/'),
			   'active_filename' => 'lead-form-builder/lead-form-builder.php',
			   'pro-plugin' => array('slug'=>'lead-form-builder',
								   'init'=>'lead-form-builder/init.php',
									 'admin_link'=>'wplf-plugin-menu',
									 'docs'=>esc_url('https://themehunk.com/docs/lead-form-builder-pro/'),
								   )
		   ),
		   'th-variation-swatches' => array(
			   'name' => esc_html__( 'Th Variation Swatches', 'open-mart' ),
			   'img' => 'icon-128x128.gif',
			   'pro_link' => esc_url('https://themehunk.com/th-variation-swatches/'),
			   'active_filename' => 'th-variation-swatches/th-variation-swatches.php',
			   'pro-plugin' => array('slug'=>'th-variation-swatches',
								   'init'=>'th-variation-swatches-pro/th-variation-swatches-pro.php',
									'admin_link'=>'th-variation-swatches',
									'docs'=>esc_url('https://themehunk.com/docs/th-variation-swatches-plugin/'),
								   )
		   ), 
		   'wp-popup-builder' => array(
			   'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'open-mart' ),
			   'img' => 'icon-128x128.png',
			   'pro_link' => esc_url('https://themehunk.com/wp-popup-builder-pro/'),
			   'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
			   'pro-plugin' => array('slug'=>'wp-popup-builder',
								   'init'=>'wp-popup-builder-pro/wp-popup-builder.php',
								   'admin_link'=>'wppb',
								   'docs'=>esc_url('https://themehunk.com/docs/wp-popup-builder-pro/'),
								   )
		   ),
		   
	   ) );

       

        // Import Data Content plugins
        add_theme_support( 'import-demo-content', array(

             'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion', 'open-mart' ),
                'img' => 'icon-128x128.png',
                'active_filename' => 'hunk-companion/hunk-companion.php',
            )
        ));

        // Useful plugins
        add_theme_support( 'useful-plugins', array(
             'themehunk-megamenu-plus' => array(
                'name' => esc_html__( 'Megamenu plugin from Themehunk.', 'open-mart' ),
                'active_filename' => 'themehunk-megamenu-plus/themehunk-megamenu.php',
            ),
        ) );
		
		// Add support for Custom Background.
        if(get_theme_mod('open_mart_color_scheme')=='opn-dark'){
        $args = array(
	    'default-color' => '2f2f2f',
        );
        }else{
        $args = array(
	    'default-color' => 'f1f1f1',
        );	
        }
        add_theme_support( 'custom-background',$args );
        
        $GLOBALS['content_width'] = apply_filters( 'open_mart_content_width', 640 );
        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );
	}
endif;
add_action( 'after_setup_theme', 'open_mart_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
/**
 * Register widget area.
 */
function open_mart_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'open-mart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="open-mart-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header First Widget', 'open-mart' ),
		'id'            => 'top-header-widget-col1',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Second Widget', 'open-mart' ),
		'id'            => 'top-header-widget-col2',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Third Widget', 'open-mart' ),
		'id'            => 'top-header-widget-col3',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar(array(
		'name'          => esc_html__( 'Main Header Widget', 'open-mart' ),
		'id'            => 'main-header-widget',
		'description'   => esc_html__( 'Add widgets here to appear in main header.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar(array(
		'name'          => esc_html__( 'Footer Top First Widget', 'open-mart' ),
		'id'            => 'footer-top-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Second Widget', 'open-mart' ),
		'id'            => 'footer-top-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Third Widget', 'open-mart' ),
		'id'            => 'footer-top-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below First Widget', 'open-mart' ),
		'id'            => 'footer-below-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Second Widget', 'open-mart' ),
		'id'            => 'footer-below-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Third Widget', 'open-mart' ),
		'id'            => 'footer-below-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'open-mart' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	for ( $i = 1; $i <= 5; $i++ ){
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer Widget Area %d', 'open-mart' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
	for ( $i = 1; $i <= 4; $i++ ){
	//Widgets for First Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'First Custom Section Widget Area %d', 'open-mart' ), $i ),
			'id'            => 'first-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Second Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Second Custom Section Widget Area %d', 'open-mart' ), $i ),
			'id'            => 'second-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Third Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Third Custom Section Widget Area %d', 'open-mart' ), $i ),
			'id'            => 'third-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Four Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Fourth Custom Section Widget Area %d', 'open-mart' ), $i ),
			'id'            => 'four-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'open_mart_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function open_mart_scripts(){

	// enqueue css

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'font-awesome', OPEN_MART_THEME_URI . '/third-party/fonts/font-awesome/css/font-awesome.css', '', OPEN_MART_THEME_VERSION );

	wp_enqueue_style( 'open-mart-th-icon', OPEN_MART_THEME_URI . '/third-party/fonts/th-icon/style.css', '', OPEN_MART_THEME_VERSION );

	wp_enqueue_style( 'animate', OPEN_MART_THEME_URI . '/css/animate.css','',OPEN_MART_THEME_VERSION);

	wp_enqueue_style( 'open-mart-menu', OPEN_MART_THEME_URI . '/css/open-mart-menu.css','',OPEN_MART_THEME_VERSION);

	wp_enqueue_style( 'open-mart-style', get_stylesheet_uri(), array(), OPEN_MART_THEME_VERSION );

	wp_add_inline_style('open-mart-style', open_mart_custom_style());

    //enqueue js

    wp_enqueue_script("jquery-effects-core",array( 'jquery' ));

    wp_enqueue_script('jquery-ui-autocomplete',array( 'jquery' ),'',true );

    wp_enqueue_script('imagesloaded');

    wp_enqueue_script('open-mart-menu-js', OPEN_MART_THEME_URI .'/js/open-mart-menu.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script('open-mart-accordian-menu-js', OPEN_MART_THEME_URI .'/js/open-mart-accordian-menu.js', array( 'jquery' ), OPEN_MART_THEME_VERSION , true );

    wp_enqueue_script( 'open-mart-custom-js', OPEN_MART_THEME_URI .'/js/open-mart-custom.js', array( 'jquery' ), OPEN_MART_THEME_VERSION , true );

     $openmartlocalize = array(
				
				'open_mart_move_to_top_optn' => (bool) get_theme_mod('open_mart_move_to_top',false),

				'open_mart_sticky_header_effect' => esc_html(get_theme_mod('open_mart_sticky_header_effect','scrltop')),

				//End-to-End

				'open_mart_page_lyout_endtoend' => (bool) get_theme_mod('open_mart_page_lyout_endtoend',false),

			);
    wp_localize_script( 'open-mart-custom-js', 'open_mart_obj',  $openmartlocalize);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){

		wp_enqueue_script( 'comment-reply' );

	}
}
add_action( 'wp_enqueue_scripts', 'open_mart_scripts' );
/********************************************************/
// Adding Dashicons in WordPress Front-end
/********************************************************/
add_action( 'wp_enqueue_scripts', 'open_mart_load_dashicons_front_end' );
function open_mart_load_dashicons_front_end(){
  wp_enqueue_style( 'dashicons' );
}


/**
 * Load init.
 */
require_once trailingslashit(OPEN_MART_THEME_DIR).'inc/init.php';

//custom function conditional check for blog page
function open_mart_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
if ( ! function_exists( 'wp_body_open' ) ){

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}