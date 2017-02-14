    <?php
         global $post;
         $string = substr(get_post_meta( get_the_ID(), 'custom-zones-actives', true ),1);
				 $megahost_header_show = (function_exists('get_field'))?get_field('show_page_header'):'1';
				 $megahost_cat_name = get_category(get_query_var('cat'));
				 $megahost_tag_name = get_tags(array('slug' => get_query_var('tag')));
				 if(function_exists('get_field')){
           $maison_img = (get_field('image_header') !== false)?get_field('image_header'):'';
         }else{
           $maison_img = ''; 
         }

         if(stripos($string,'slide-zone') == 0 || substr($post->page_template,0,8) == 'template'){
  					if($megahost_header_show == 1){        
	  ?>
    <section class="section_title"style="background-image: url('<?php echo $maison_img;?>');">
      	<div class="overlay_title"></div>
        <div class="container">
            <div class="row">
              		<div class="col-md-4">
                    	<div class="breadcrumb_section">
		                  		<?php the_breadcrumb(); ?>  
                      </div>
                  </div>
              
              
              		<div class="col-md-8">
                    <?php
                      echo '<h1>';
                      if(is_category()){ 
                           echo "Category Archive: ".$megahost_cat_name->name;
                      }
                      else
                      if(is_tag()){ 
                           echo "Tag Archive: ".$megahost_tag_name[0]->name;
                      }
                      else
                      if(is_archive()){ 
                          if ( is_day() ) :
                              printf( __( 'Daily Archives: %s', 'megahost' ), get_the_date() );
  
                          elseif ( is_month() ) :
                              printf( __( 'Monthly Archives: %s', 'megahost' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'megahost' ) ) );
  
                          elseif ( is_year() ) :
                              printf( __( 'Yearly Archives: %s', 'megahost' ), get_the_date( _x( 'Y', 'yearly archives date format', 'megahost' ) ) );
  
                          else :
                              _e( 'Archives', 'megahost' );
                          endif;
                      }
                      else
                      if(is_search()){ 
                           echo "Search Results";
                      }
                      else
                      if(($post->page_template) !== null){
                          echo get_the_title();   
                      }
                       else{
                          if(function_exists('of_get_option'))
                              echo (of_get_option('banner_title') !== '')?of_get_option('banner_title'):'';   
                          else
                              echo '';
                      }
                      echo '</h1>';
                  	?>
                </div>
            </div>
        </div>
    </section>
    <?php
           }
           get_template_part('/inc/extra-codes/domain');
         }
    ?>