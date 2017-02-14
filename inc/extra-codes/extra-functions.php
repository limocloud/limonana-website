<?php
global $typography_mixed_fonts; 
if(function_exists('optionsframework_init')){
    require_once dirname( __FILE__ ).'/../theme-icon/icon.php';

    if( !function_exists( 'megahost_config_styles' ) ) {
        function megahost_config_styles(){
            $pl_styles = '';
            $pl_style = '';
            
        		//TYPOGRAPHY CONFIGURATION
            if(!is_admin()){
                if(of_get_option('general_color_headings_ch') == '1'){
                    $pl_styles = of_get_option('general_color_headings');
                    $pl_style .= 'h1,h2,h3,h4,h5,h6{font-family: '.$pl_styles.' !important;}';
                }
                if(of_get_option('general_color_body_ch') == '1'){
                    $pl_styles = of_get_option('general_color_body');
                    $pl_style .= 'body{font-family: '.$pl_styles.' !important; }';
                }
              	if(of_get_option('general_color_p_ch') == '1'){
                    $pl_styles = of_get_option('general_color_p');
                    $pl_style .= 'p{font-family: '.$pl_styles.' !important; }';
                }
              	if(of_get_option('style_logo') == '1'){
                  	$megahost_font_logo = of_get_option('type_logo');
                    $pl_styles = $megahost_font_logo['face'];
                    $pl_style .= '.logo h1{font-family: '.$pl_styles.' !important; }';
                }
                
                if(of_get_option('general_skin_color_ch')){
                    echo '<style>'.$pl_style.'</style>';
                }
                $pl_style = '';
                
              }
        }
    } 

} 


/**
 * Returns an array of system fonts
 * Feel free to edit this, update the font fallbacks, etc.
 */

function options_typography_get_os_fonts() {
  // OS Font Defaults
  $os_faces = array(
    'Arial, sans-serif' => 'Arial',
    '"Avant Garde", sans-serif' => 'Avant Garde',
    'Cambria, Georgia, serif' => 'Cambria',
    'Copse, sans-serif' => 'Copse',
    'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',
    'Georgia, serif' => 'Georgia',
    '"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',
    'Tahoma, Geneva, sans-serif' => 'Tahoma'
  );
  return $os_faces;
}

/**
 * Returns a select list of Google fonts
 * Feel free to edit this, update the fallbacks, etc.
 */

function options_typography_get_google_fonts() {
  // Google Font Defaults
  $google_faces = array(
    'Abel, sans-serif' => 'Abel',
    'Arvo, serif' => 'Arvo',
    'Arrimo, sans-serif' => 'Arrimo',
    'Bree Serif, serif' => 'Bree Serif',
    'Copse, sans-serif' => 'Copse',
    'Droid Sans, sans-serif' => 'Droid Sans',
    'Droid Serif, serif' => 'Droid Serif',
    'Lato, sans-serif' => 'Lato',
    'Lobster, cursive' => 'Lobster',
    'Lora, serif' => 'Lora',
    'Nobile, sans-serif' => 'Nobile',
    'Open Sans, sans-serif' => 'Open Sans',
    'Oswald, sans-serif' => 'Oswald',
    'Pacifico, cursive' => 'Pacifico',
    'PT Sans, sans-serif' => 'PT Sans',
    'Quattrocento, serif' => 'Quattrocento',
    'Rokkitt, serif' => 'Rokkit',
    'Roboto, serif' => 'Roboto',
    'Raleway, cursive' => 'Raleway',
    'Shadows Into Light, cursive' => 'Shadows Into Light',
    'Ubuntu, sans-serif' => 'Ubuntu',
    'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
  );
  return $google_faces;
}

$typography_mixed_fonts = array_merge( options_typography_get_os_fonts() , options_typography_get_google_fonts() );
asort($typography_mixed_fonts);


/**
 * Checks font options to see if a Google font is selected.
 * If so, options_typography_enqueue_google_font is called to enqueue the font.
 * Ensures that each Google font is only enqueued once.
 */
 
if ( !function_exists( 'options_typography_google_fonts' ) ) {
  function options_typography_google_fonts() {
    $all_google_fonts = array_keys( options_typography_get_google_fonts() );
    // Define all the options that possibly have a unique Google font
     $general_color_headings = '';
     $general_color_body = '';
     $general_color_p = '';
     $family_logo = '';
    
     if (function_exists('of_get_option'))  { 
        $general_color_headings =  of_get_option('general_color_headings', 'Lora, serif');
        $general_color_body = of_get_option('general_color_body', 'Open Sans, serif');
	      $general_color_p = of_get_option('general_color_p', 'Open Sans, serif');
       	$megahost_font_logo = of_get_option('type_logo');
       	$family_logo = $megahost_font_logo['face'];
    }
    // Get the font face for each option and put it in an array
    $selected_fonts = array(
      $general_color_headings,
      $general_color_body,
      $general_color_p,
			$family_logo
    );
    // Remove any duplicates in the list
    $selected_fonts = array_unique($selected_fonts);
    // Check each of the unique fonts against the defined Google fonts
    // If it is a Google font, go ahead and call the function to enqueue it
    foreach ( $selected_fonts as $font ) {
      if ( in_array( $font, $all_google_fonts ) ) {
        options_typography_enqueue_google_font($font);
      }
    }
  }
}

add_action( 'wp_enqueue_scripts', 'options_typography_google_fonts' );


/**
 * Enqueues the Google $font that is passed
 */
 
function options_typography_enqueue_google_font($font) {
  $font = explode(',', $font);
  $font = $font[0];
  // Certain Google fonts need slight tweaks in order to load properly
  // Like our friend "Raleway"
  if ($font == 'Raleway' )
    $font = 'Raleway:100';
    $font = str_replace(" ", "+", $font);
  wp_enqueue_style( "options_typography_$font", "http://fonts.googleapis.com/css?family=$font", false, null, 'all' );
}


/* 
 * Pagination
 */

if (! function_exists('megahost_pagination')){
    function megahost_pagination($pages = '', $range = 3){ 
        $showitems = ($range * 3)+1;
        global $paged; if(empty($paged)) $paged = 1;
        if($pages == ''){
            global $wp_query; $pages = $wp_query->max_num_pages;
            if(!$pages){
                $pages = 1; 
            } 
        }
        if(1 != $pages){
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a rel='nofollow' href='".get_pagenum_link(1)."'>&laquo;</a></li>";
            if($paged > 1 && $showitems < $pages) echo "<li><a rel='nofollow' href='".get_pagenum_link($paged - 1)."' class='inactive'>&lsaquo;</a></li>";
            for ($i=1; $i <= $pages; $i++){
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                    echo ($paged == $i) ? "<li class='active'><a rel='nofollow' href='".get_pagenum_link($i)."' >".$i."</a></li>":"<li><a rel='nofollow' href='".get_pagenum_link($i)."' >".$i."</a></li>";
                } 
            } 
            if ($paged < $pages && $showitems < $pages) 
                echo "<li><a rel='nofollow' href='".get_pagenum_link($paged + 1)."' >&rsaquo;</a></li>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
                echo "<li><a rel='nofollow'  href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
        }
    }
}

if(!function_exists('megahost_time_ago')){
    function studio_time_ago($year='2000',$month='01',$day='01'){
        
        $fecha_pos = new DateTime($year.'-'.$month.'-'.$day);
        $fecha_act = new DateTime(date('Y-m-d'));        

        $interval = $fecha_pos->diff($fecha_act);

        $year   = $interval->format('%y');
        $month  = $interval->format('%m');
        $day    = $interval->format('%d');

        if($year > 0){
            return $year.' years ago';            
        }else if($month > 0){
            return $month.' months ago';
        }else if($day > 1){
            return ($day-1).' days ago';
        }

        return 'Right now!!!';
    }
}

if( !function_exists( 'insert_br' ) ) {
    function insert_br($string){
        $cad1 = '';
        $cad2 = '';
        $cad1 = $string;
        $order   = array("\r\n", "\n", "\r");
        $replace = '<br />';
        $cad2 = str_replace($order, $replace, $cad1);

        return $cad2;        
    }
}