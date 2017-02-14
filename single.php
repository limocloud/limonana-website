<?php
  get_header();
  $megahost_pos = isset($_REQUEST['post_side'])?$_REQUEST['post_side']:'3';
  $GLOBALS['sidebar_name'] = (function_exists('get_field'))?(get_field('sidebar_name') !== false)?get_field('sidebar_name'):'primary':'primary';
?>
<section class="info_content paddings">
   <div class="container">
       <div class="row">    
				<?php
            if($megahost_pos == '1'){
                echo '<div class="col-md-3">'; 
                    		get_sidebar(); 
                echo '</div>';
            }  
            $megahost_link = add_query_arg(array(
                    'post_side' => $megahost_pos,
                  ),get_permalink()
                                       );
            $megahost_icons = (function_exists('get_field'))?get_field('icons'):array();
            if(!empty($megahost_icons))
                $megahost_icons = $megahost_icons[0];
			?>
            
			<div class="<?php echo ($megahost_pos == 2) ? 'col-md-12' : 'col-md-9';?>">

				<?php
          $megahost_day = get_the_time('j');
          $megahost_month = get_the_time('M');
          the_post();
          $megahost_cate = get_the_category(get_the_id());
          foreach($megahost_cate as $megahost_k){
            $megahost_categoria = $megahost_k->slug;
          }
        ?>     
        <div class="post single">
          <div class="image_post">
            <?php
              if( has_post_thumbnail($post->ID) ) { the_post_thumbnail('full', array('alt'=>$post->post_title)); }
              else { echo '<img src="' . get_template_directory_uri('template_directory') . '/img/img-theme/default.jpg" />'; }
            ?>
            <ul>
              <li><?php echo $megahost_day;?><br><?php echo $megahost_month;?></li>
              <li>
                <a href="<?php echo $megahost_link;?>">
                  <i class="<?php echo !empty($megahost_icons)? $megahost_icons['post_icon'] : '';?>"></i>
                </a>
              </li>
            </ul>
          </div>
          
          <a href="<?php echo $megahost_link;?>"><h3><?php echo the_title();?></h3></a>
          
          <ul class="meta">
             <li><?php if(function_exists('of_get_option')){ echo of_get_option('posted_by_title');}?></li>
            <li><i class="fa fa-user"></i> <a href="#"><?php the_author();?></a></li>
            <li><i class="fa fa-tag"></i> <?php the_tags() ?></li>
            <li><i class="fa fa-comments"></i> <a href="<?php echo $megahost_link;?>#comments"><?php comments_number();?></a></li>
          </ul>
          <p>
          <?php 
            $megahost_post_content = get_the_content();
            echo apply_filters('the_content', array_shift(explode('<!--more-->', $megahost_post_content)));;
          ?>
          </p>
        </div>
        <!-- End Post-->
        
        <div>
          <?php comments_template(); ?>
        </div>  
          </div>         
    		<?php
            if($megahost_pos == '3'){
                echo '<div class="col-md-3">'; 
                    			get_sidebar(); 
                echo '</div>';
            }    
           ?>
        </div>
        <!-- End Blog Post-->
    </div>
</section>
<!-- end Blog --> 
<?php get_footer(); ?>