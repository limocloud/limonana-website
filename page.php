<?php
    if(function_exists('get_field')){
        $megahost_other = array();
        $megahost_pages = array();
        $megahost_string = '';
        $megahost_string = substr(get_post_meta( get_the_ID(), 'custom-zones-actives', true ),1);
        foreach(explode('|',$megahost_string) as $megahost_custom){
            $megahost_page = substr($megahost_custom,strpos($megahost_custom,'acf_')+4);  
            if(get_field('rpt-'.$megahost_page)!==false) {
        
                    if($megahost_page == 'slide-zone') {
                       $megahost_pages[] = array(
                                'custom' => $megahost_page,
                                'rpt' => array('slide_name' => get_field('slide_name')),
                                'bg' => '',
                                'color' => '',
                                'weight' => '0',
                            ); 
                    }
                    else{
                        foreach(get_field('rpt-'.$megahost_page) as $megahost_key){ 
                            $megahost_pages[] = array(
                                'custom' => $megahost_page,
                                'rpt' => $megahost_key,
                                'bg' => $megahost_key['back'],
                                'color' => $megahost_key['color_bg'],
                              	'image' => $megahost_key['image_bg'],
                              	'video' => $megahost_key['video_bg'],
                                'weight' => $megahost_key['weight_'.$megahost_page]
                            );
                        }
                    }
            }else{            
                $megahost_other[] = $megahost_page;
            }
        }
        function cmp($megahost_a, $megahost_b) {
            if ($megahost_a['weight'] == $megahost_b['weight']) {
                return 0;
            }
            return ($megahost_a['weight'] < $megahost_b['weight']) ? -1 : 1;
        };
        uasort($megahost_pages, 'cmp');
        
       
        get_header(); 
        
            $megahost_info = false;
            if(stripos($megahost_string,'slide-zone') > 0){
                foreach(get_field('rpt-slide-zone') as $megahost_rpt){
                   $megahost_value['rpt'] = $megahost_rpt;
               }
                include (dirname( __FILE__ ) .'/inc/custom-zones/zones-code/slide-zone.php');
                get_template_part('/inc/extra-codes/domain');
            }
            
            $megahost_post = get_post();
            if(!empty($megahost_post->post_content)){
                $megahost_info = true;
                echo '<section class="info_content paddings">
                        <div class="container">
                            <div class="row">
																<div class="col-md-12">';
 	                           				echo apply_filters('the_content', array_shift(explode('<!--more-->', $megahost_post->post_content)));
                echo '</div></div></div></section>';
            }else 
              if(empty($megahost_post->post_content)){
                $megahost_info = true;
                echo '<section class="info_content">
                            <div class="row">
																<div class="col-md-12">';
 	                           				echo apply_filters('the_content', array_shift(explode('<!--more-->', $megahost_post->post_content)));
                echo '</div></div></section>';
            }
            foreach($megahost_pages as $megahost_value){
                if($megahost_value['custom'] !== 'slide-zone'){
                  	
                  	if($megahost_value['bg'] == '4') { 
                       $overflow_video = 'overflow_video';   		
                    }
                  	else{ echo $overflow_video = '';}
                  
                 echo '<section class="info_content '.$overflow_video.'">';
                  
                   			if($megahost_value['bg'] == '3') { 
                          		echo ($megahost_value['bg'] == '3')?'
																	<div class="bg_parallax" style="background-position: 50% 120px; background-image: url(\''.$megahost_value['image'].'\');"></div>':'';
                          }
                  				if($megahost_value['bg'] == '4') { 
                          		echo ($megahost_value['bg'] == '4')?'
																	<video class="bg_section_video" preload="auto" autoplay="autoplay" loop muted>                        
                                      <source src="'.$megahost_value['video'].'" type="video/mp4">
                                  </video>':'';
                          	}
                  					$megahost_color = '';
                            if ($megahost_value['bg'] == '1'){
                              $megahost_color = 'gray shadows borders';
                            }else if($megahost_value['bg'] == '3' || $megahost_value['bg'] == '4'){
                              $megahost_color = 'opacy_bg';
                            }
                            else if($megahost_value['bg'] == '5'){
                              $megahost_color = 'skin_base';
                            }
                  
                  				echo '<div class="'.$megahost_color.' paddings" '; echo ($megahost_value['bg'] == '2')?'style="background-color:'.$megahost_value['color'].';">':'>';
                  						
                            include (dirname( __FILE__ ) .'/inc/custom-zones/zones-code/'.$megahost_value['custom'].'.php');
                            $megahost_info = false;
                  
                    echo '</div></section>';
                }            
            }
        get_footer();
    }else{
        get_header();
        $megahost_post = get_post();
        if(!empty($megahost_post->post_content)){
            $megahost_info = true;
            echo '<section class="info_content paddings">
                    <div class="container">
                        <div class="row">
						    						<div class="col-md-12">';
                        	    echo apply_filters('the_content', array_shift(explode('<!--more-->', $megahost_post->post_content)));
           					echo '</div>
												</div>
										</div>
								</section>';
        }
        get_footer(); 
    } 