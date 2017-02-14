<?php
/*
Template Name: Sidebar
*/
    get_header();
    $GLOBALS['sidebar_name'] = (function_exists('get_field'))?get_field('sidebar_name'):'primary';
    $megahost_pos = (function_exists('get_field'))?get_field('position'):'3';
   	echo '<section class="info_content paddings">
						<div class="container">';
?>
    					<div class="row">  
              <?php
                   if($megahost_pos == '1'){
                       echo '<div class="col-md-3">';
                       		get_sidebar();
                       echo '</div>';
                   }
                
                    echo $megahost_pos == '2'?'<div class="col-md-12">':'<div class="col-md-9">';
															echo apply_filters('the_content', array_shift(explode('<!--more-->', $post->post_content)));
                    echo '</div>';
                    
                   if($megahost_pos == '3'){
                       echo '<div class="col-md-3">';
                       		get_sidebar();
                       echo '</div>';
                   }
               ?>
            </div>
       </div>
    </section>
   <?php 
			if(function_exists('of_get_option')){
        $megahost_string = substr(get_post_meta( get_the_ID(), 'custom-zones-actives', true ),1);
        if(stripos($megahost_string,'add-sponsor-zone') > 0){
            foreach(get_field('rpt-add-sponsor-zone') as $megahost_rpt){
                $megahost_value['rpt'] = $megahost_rpt;
            }
            $megahost_back = $megahost_value['rpt'];
            echo ($megahost_back['back'] == '1')?'<section class="info_content gray shadows borders paddings"><div class="container">':'<section class="info_content paddings" style="background-color: '.$megahost_back['color_bg'].';"><div class="container">';
    ?>     
            <?php
                include (dirname( __FILE__ ) .'/inc/custom-zones/zones-code/add-sponsor-zone.php');     
            ?>
        </div>
    </section>
<?php
    }
	}
     get_footer();
 ?>