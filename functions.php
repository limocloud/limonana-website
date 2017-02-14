<?php
/*
* Loads the Options Panel
* If you're loading from a child theme use stylesheet_directory
* instead of template_directory
*/
add_action( 'after_setup_theme', 'megahost_theme_setup' );

function megahost_theme_setup()
{
    global $content_width;
    /* Set the $content_width for things such as video embeds. */
    if ( !isset( $content_width ) )
    $content_width = 900;
    
    /* Add theme support for automatic feed links. */
    add_theme_support( 'automatic-feed-links' );
    
    /*Add theme support for post thumbnails (featured images).*/
    add_theme_support( 'post-thumbnails' );
    add_action( 'admin_head', 'megahost_favicon' );
    add_action('wp_head', 'megahost_favicon');
    
    /* Add your sidebars function to the 'widgets_init' action hook. */
    add_action( 'widgets_init', 'register_sidebars' );
    
    /* Load JavaScript files on the 'wp_enqueue_scripts' action hook. */
    add_action('wp_enqueue_scripts', 'megahost_load_scripts');
    
    /* Load Style files on the 'wp_enqueue_style' action hook. */
    add_action( 'wp_enqueue_scripts', 'megahost_load_styles' );
    add_action( 'admin_head', 'megahost_add_menu_icons_styles' );
    if(function_exists('of_get_option')){
      add_action( 'wp_enqueue_scripts', 'megahost_config_styles' );
    }
    /*Load Wordpress Logo to login page*/
    add_action('login_head', 'wp_login_mod'); 
}
   
if ( !defined( 'PRESSCORE_PLUGINS_DIR' ) ) {
    define( 'PRESSCORE_PLUGINS_DIR', get_template_directory_uri() . '/inc/plugins/' );
    require_once dirname( __FILE__ ) . '/inc/extensions/class-tgm-plugin-activation.php';
}
if ( !function_exists( '__construct' ) ) {
    define( 'CUSTOM_FIELD_DIRECTORY_LOCATION', get_template_directory_uri() . '/inc/acf-location-field/' );
    require_once dirname( __FILE__ ) . '/inc/acf-location-field/location-field.php';
}             
if ( !function_exists( '__construct' ) ) {
    define( 'CUSTOM_FIELD_DIRECTORY_REPEATER', get_template_directory_uri() . '/inc/acf-repeater/' );
    require_once dirname( __FILE__ ) . '/inc/acf-repeater/acf-repeater.php';
}
if ( !function_exists( '__construct' ) ) {
    define( 'CUSTOM_FIELD_DIRECTORY_GALERY', get_template_directory_uri() . '/inc/acf-gallery/' );
    require_once dirname( __FILE__ ) . '/inc/acf-gallery/acf-gallery.php';
}
if ( !function_exists( '__construct' ) ) {
    define( 'CUSTOM_FIELD_DIRECTORY_ICON', get_template_directory_uri() . '/inc/acf-icon/' );
    require_once dirname( __FILE__ ) . '/inc/acf-icon/acf-icon.php';    
}
if ( !function_exists( '__construct' ) ) {
    require_once dirname( __FILE__ ) . '/inc/custom-zones/include_custom.php';
    require_once dirname( __FILE__ ) . '/inc/custom-zones/zones.php';
    //EXTRA FUNCTIONS
    require_once dirname( __FILE__ ) . '/inc/extra-codes/extra-functions.php';
    require_once dirname( __FILE__ ) . '/inc/extra-codes/add-post_types.php';
}                                                                     

//ICONS WPRESS STYLE
if( !function_exists( 'megahost_add_menu_icons_styles' ) ) {
    function megahost_add_menu_icons_styles(){
         echo '<style>
            #adminmenu .menu-icon-team div.wp-menu-image:before {
            content: \'\f307\';
            }
            </style>
            <style>
            #adminmenu .menu-icon-facility div.wp-menu-image:before {
            content: \'\f308\';
            }
            </style>
            <style>
            #adminmenu .menu-icon-plan div.wp-menu-image:before {
            content: \'\f302\';
            }
            </style>
            <style>
            #adminmenu .menu-icon-location div.wp-menu-image:before {
            content: \'\f308\';
            }
        </style>
        '; 
     }
}
      
if( !function_exists( 'megahost_load_styles' ) ) {
  function megahost_load_styles(){
     global $wp_styles;
     
     if(!is_admin()){
      	wp_enqueue_style('megahost_style', get_stylesheet_uri());
     }
    
     if(function_exists('of_get_option')){
       	if(of_get_option('general_style') !== false){
           	wp_enqueue_style( 'style', get_template_directory_uri().'/css/'.of_get_option('general_style').'.css', array(), '', 'screen' );
        }else{
            wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', array(), '', 'screen' );   
        }
     }else{
        wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', array(), '', 'screen' );   
    	}
      if(function_exists('of_get_option')){
          if(of_get_option('general_config') !== false){
              wp_enqueue_style('skins', get_template_directory_uri().'/css/skins/'.of_get_option('general_config').'/'.of_get_option('general_config').'.css', array(), '', 'screen' ); 
          }else{
              wp_enqueue_style('skins', get_template_directory_uri().'/css/skins/blue/blue.css', array(), '', 'screen' ); 
          }
       }
    	else{
         wp_enqueue_style('skins', get_template_directory_uri().'/css/skins/blue/blue.css', array(), '', 'screen' ); 
      }
    
      wp_enqueue_style( 'iconf-font-awesome-styles', get_template_directory_uri() . '/inc/acf-	icon/assets/css/font-awesome.css', array());  
      wp_enqueue_style( 'iconf-font-awesome-corp-styles', get_template_directory_uri() . '/inc/acf-icon/assets/css/font-awesome-corp.css', array());
      wp_enqueue_style( 'iconf-font-awesome-ext-styles', get_template_directory_uri() . '/inc/acf-icon/assets/css/font-awesome-ext.css', array());
      wp_enqueue_style( 'iconf-font-awesome-social-styles', get_template_directory_uri() . '/inc/acf-icon/assets/css/font-awesome-social.css', array());
      wp_enqueue_style( 'iconf-font-awesome-more-ie7', get_template_directory_uri() . '/inc/acf-icon/assets/css/font-awesome-more-ie7.min.css', array()); 
  }
}

if( !function_exists( 'megahost_load_scripts' ) ) {
  function megahost_load_scripts(){
      wp_enqueue_script('tinynav', get_template_directory_uri().'/js/nav/tinynav.js', array('jquery'), false, true);
      wp_enqueue_script('hoverIntent', get_template_directory_uri().'/js/nav/hoverIntent.js', array('jquery'), false, true);
      wp_enqueue_script('superfish', get_template_directory_uri().'/js/nav/superfish.js', array('jquery'), false, true);
      wp_enqueue_script('sticky', get_template_directory_uri().'/js/nav/jquery.sticky.js', array('jquery'), false, true); 
      wp_enqueue_script('carousel', get_template_directory_uri().'/js/carousel/owl.carousel.js',array('jquery'), false, true);
      wp_enqueue_script('fancybox', get_template_directory_uri().'/js/fancybox/jquery.fancybox.js',array('jquery'), false, true);
      wp_enqueue_script('parallax1', get_template_directory_uri().'/js/parallax/jquery.inview.js',array('jquery'), false, true);
      wp_enqueue_script('parallax2', get_template_directory_uri().'/js/parallax/nbw-parallax.js',array('jquery'), false, true);
      wp_enqueue_script('video_bg', get_template_directory_uri().'/js/video/pi.init.videoResize.min.js',array('jquery'), false, true);
      wp_enqueue_script('animations', get_template_directory_uri().'/js/animations/wow.min.js', array('jquery'), false, true);
      wp_enqueue_script('filters', get_template_directory_uri().'/js/filters/jquery.isotope.js', array('jquery'), false, true);
      wp_enqueue_script('totop', get_template_directory_uri().'/js/totop/jquery.ui.totop.js', array('jquery'), false, true);
      wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap/bootstrap.min.js', array('jquery'), false, true);
    	wp_enqueue_script('styleswitcher', get_template_directory_uri().'/js/theme-options/theme-options.js', array('jquery'), false, true);
    	wp_enqueue_script('cookies', get_template_directory_uri().'/js/theme-options/jquery.cookies.js', array('jquery'), false, true);
      wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), false, true);
	}
}

if ( function_exists( 'wd_single_scripts')){
    function wd_single_scripts() {
       if(is_singular() || is_page()){
        wp_enqueue_script( 'comment-reply' );
       }
    }
}  

/*------------------------------------------------------------*/
/*   Register Menus WP3.0+
/*------------------------------------------------------------*/
if ( function_exists( 'register_nav_menus' ) ){
  register_nav_menus(
    array(
       'HeaderMenu' =>( 'Main Menu' ),
       'FooterMenu' =>( 'Footer Menu' ),
     )
  );
}
 
if(function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Primary Sidebar',
      'id'   => 'primary',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    )); 
    register_sidebar(array(
      'name' => 'Newsletter Sidebar',
      'id'   => 'newsletter',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));   
    register_sidebar(array(
      'name' => 'custom-whmcs-sidebar',
      'id'   => 'custom-whmcs-sidebar',
      'description'   => 'These are widgets for the sidebar of whmcs to sides.(Only Portal Theme whmcs)',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    )); 
    register_sidebar(array(
      'name' => 'Support Top widget',
      'id'   => 'login-top-whmcs-sidebar',
      'description'   => 'These are widgets Support Top widge',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));
    register_sidebar(array(
      'name' => 'custom-1-sidebar',
      'id'   => 'custom-1-sidebar',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    )); 
    register_sidebar(array(
      'name' => 'custom-2-sidebar',
      'id'   => 'custom-2-sidebar',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    )); 
    register_sidebar(array(
      'name' => 'custom-3-sidebar',
      'id'   => 'custom-3-sidebar',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    )); 
}  

function wp_login_mod() {
	if(of_get_option('login')){
		echo '<style type="text/css">
			#login h1 a { background-size: 100% auto; height: 100px; width: 100%; background-image:url('.of_get_option('login').'); }
		</style>';
		}else{
		echo '<style type="text/css">#login h1 a { background-size: 100% auto; height: 100px; margin-bottom: -39px; width: 100%; background-image: url("'.get_template_directory_uri().'/img/wp_logo.png"); } </style>'; 
	}
}

/* Favicon Function*/
if( !function_exists('megahost_favicon')){
    function megahost_favicon() {
    	$megahost_favicon = (function_exists('of_get_option'))?of_get_option('favicon'):get_template_directory_uri().'/img/icons/favicon.ico';
     	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$megahost_favicon.'" />';
    }
}

/* the_breadcrumb Function*/
if (! function_exists('the_breadcrumb')){
  function the_breadcrumb() {
    if (!is_home()) {
      echo '<a href="';
      echo get_option('home');
      echo '">';
      echo "Home";
      echo "</a> <span>/</span>";
      if (is_category() || is_single()) {
        the_category('title_li=');
        if (is_single()) {
          echo " » ";
          the_title();
        }
      } elseif (is_page()) {
        echo the_title();
      }
    }
  }
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section class="container woocommerce_styles">
					<div class="row">
							<div class="col-md-12">';
}

function my_theme_wrapper_end() {
  echo '</div></div></section>';
}
add_theme_support( 'woocommerce' );