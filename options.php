<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'tecno'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	$options = array();
    
    //LOAD CONFIGURATIONS PAGES
    include 'options/option-general.php'; 
	  include 'options/option-background.php';  
	  include 'options/option-icons_top.php';  
  	include 'options/option-titles_varius.php';  
  	include 'options/option-fonts.php'; 
    include 'options/option-support.php';  
  	include 'options/option-domain.php'; 
    include 'options/option-footer.php';  
  	include 'options/option-404.php'; 
    
		return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
* This example shows/hides an option when a checkbox is clicked.
*/

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) { <?php
  $total_zone = of_get_option('tecno_zone_total',1);
  $total_zone = isset($total_zone) ? $total_zone : 1 ;

  for ($i=1; $i<=$total_zone; $i++){
  	$tecno_zone_content_type = of_get_option('tecno_zone_'.$i.'_content_type');
  	switch ($tecno_zone_content_type) {
  	    case 'page':?>
  $('#section-tecno_zone_<?php echo $i ?>_content_select_post').hide;
  $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').hide();  	
  	<?php	break;
  	    case 'category':?>
  $('#section-tecno_zone_<?php echo $i ?>_content_select_post').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').hide();
  	<?php	break;
  	    case 'tag':?>
  $('#section-tecno_zone_<?php echo $i ?>_content_select_post').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').hide();
  	<?php	break;
  	    default:?>
  $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').hide();
  $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').hide();
  	<?php	break;
  	  }?>
  $('#tecno-tecno_zone_<?php echo $i ?>_content_type-post').click(function(){
    $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').fadeOut('fast');

    $('#section-tecno_zone_<?php echo $i ?>_content_select_post').fadeIn('slow');
  });

  $('#tecno-tecno_zone_<?php echo $i ?>_content_type-page').click(function(){
    $('#section-tecno_zone_<?php echo $i ?>_content_select_post').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').fadeOut('fast');
    
    $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').fadeIn('slow');
  });

  $('#tecno-tecno_zone_<?php echo $i ?>_content_type-category').click(function(){
    $('#section-tecno_zone_<?php echo $i ?>_content_select_post').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').fadeOut('fast');

    $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').fadeIn('slow');
  });

  $('#tecno-tecno_zone_<?php echo $i ?>_content_type-tag').click(function(){
    $('#section-tecno_zone_<?php echo $i ?>_content_select_post').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_pages').fadeOut('fast');
    $('#section-tecno_zone_<?php echo $i ?>_content_select_categories').fadeOut('fast');

    $('#section-tecno_zone_<?php echo $i ?>_content_select_tags').fadeIn('slow');
  });
<?php  
  }?>  
});
</script>

<?php
}                                            