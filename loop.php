<?php
    $megahost_print = 1;
    $megahost_pos = 3
?>
   
     <?php
        $megahost_paginar=1;
        $megahost_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $megahost_args = array(
          'paged' => $megahost_paged,
          'post_status' => 'publish',                           
          'order_by' => 'date',
        );
        query_posts($megahost_args);
        while (have_posts()) {  
          the_post();                               
          $megahost_day = get_the_time('j');
          $megahost_month = get_the_time('M');
          $megahost_year = get_the_time('Y');
          
          $megahost_link = add_query_arg(array(
            'post_side' => $megahost_pos,
          ),get_permalink()
          );
          
          $megahost_icons = (function_exists('get_field'))?get_field('icons'):array();
          if(!empty($megahost_icons))
            $megahost_icons = $megahost_icons[0];
        ?>                                                                                    

      <!-- Post-->
      <div class="row">
        <div class="post">
          <div class="col-md-5">
            <div class="image_post">
              <?php
        					if( has_post_thumbnail($post->ID) ) { the_post_thumbnail('full', array('alt'=>$post->post_title)); }
                else { echo '<img src="' . get_template_directory_uri('template_directory') . '/img/img-theme/default.jpg" alt="Default "/>'; }
              ?>
              <ul>
                <li><?php echo $megahost_day;?> <br><?php echo $megahost_month;?></li>
                <li><a href="<?php echo $megahost_link;?>">
                  <i class="<?php echo !empty($megahost_icons)? $megahost_icons['post_icon'] : '';?>"></i></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-7">
            <a href="<?php echo $megahost_link;?>"><h3><?php the_title();?></h3></a>
            <ul class="meta">
              <li><?php if(function_exists('of_get_option')){ echo of_get_option('posted_by_title'); } ?></li>
              <li><i class="fa fa-user"></i> <a href="<?php echo $megahost_link;?>"> <?php the_author();?></a></li>
              <li><i class="fa fa-tag"></i> <?php the_tags() ?></li>
              <li><i class="fa fa-comments"></i> <a href="<?php echo $megahost_link;?>#comments"><?php comments_number();?></a></li>
            </ul>
            <p><?php echo wp_trim_words(get_the_content(),58,'...');?></p>
            <a href="<?php echo $megahost_link;?>" class="button">
              	<?php if(function_exists('of_get_option')){ echo of_get_option('boton_post_title'); }else echo 'Read More' ?>
            </a>
          </div>
        </div>
      </div>
      
      <?php } ?>
      
      <ul class="paginations">
        	<?php 
            if ($megahost_paginar == '1'){ 
              megahost_pagination();
            }else{
              next_posts_link('&larr; '.'Older posts', 'mythemeshop' ); 
              previous_posts_link('Maison posts'.' &rarr;', 'mythemeshop' ); 
            }
					?> 
      </ul>
	  
<?php ?>