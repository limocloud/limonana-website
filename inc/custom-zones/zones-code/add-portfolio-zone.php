<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_portfolio = array();
    if($megahost_key['portfolio_to_show'] !== false){
        foreach($megahost_key['portfolio_to_show'] as $megahost_port){
            $megahost_portfolio[] = array(
                'obj' => get_fields($megahost_port->ID),
                'id' => $megahost_port->ID,
              	'name_category' => 'category',
            );
        }
    }

		if($megahost_key['portfolio_row'] == 1){
      $megahost_portfolio_row = 'col-xs-12 col-sm-6 col-md-6 col-lg-6';
    }else if($megahost_key['portfolio_row'] == 2){
      $megahost_portfolio_row = 'col-xs-12 col-sm-6 col-md-4 col-lg-4';
    }else if($megahost_key['portfolio_row'] == 3){
      $megahost_portfolio_row = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
    }else if($megahost_key['portfolio_row'] == 4){
      $megahost_portfolio_row = 'col-xs-12 col-sm-6 col-md-2 col-lg-2';
    }
?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    
    <!-- Nav Filters -->
    <div class="portfolioFilter">
      <a href="#" data-filter="*" class="current">
					<?php echo of_get_option('filter_show');?>
      </a>
        <?php 
           $categories = get_terms('categories_portfolio');   
            foreach( (array)$categories as $categorie){
              $cat_name = $categorie->name;
              $cat_slug = $categorie->slug;
        ?>
        		<a href="#<?php echo $cat_slug;?>" data-filter=".<?php echo $cat_slug;?>"><?php echo $cat_name;?></a>
        <?php
           }
        ?>
    </div>
    <!-- End Nav Filters -->
    
    <!-- Row Portfolio --> 
    <div class=" portfolioContainer tooltip-hover">
    <?php

        if(!function_exists('megahost_port_order')){
            function megahost_port_order($megahost_a, $megahost_b) {
                if ($megahost_a['obj']['weight'] == $megahost_b['obj']['weight']) {
                    return 0;
                }
                return ($megahost_a['obj']['weight'] < $megahost_b['obj']['weight']) ? -1 : 1;
            };
        }
        uasort($megahost_portfolio, 'megahost_port_order');



        foreach($megahost_portfolio as $megahost_port){
            $permalink = get_permalink($megahost_port['id']);
          		$cates = get_the_terms($megahost_port['id'],'categories_portfolio');
          
              $cate_name ='';
              $cate_slug = '';
              foreach((array)$cates as $cate){
                if(count($cates)>0){
                  $cate_name .= $cate->name.' ' ;
                  $cate_slug .= $cate->slug .' ';     
                } 
              } 
          	
    ?>
      	<!-- Item Portfolio --> 
        <div class="<?php echo $megahost_portfolio_row; ?> <?php echo $cate_slug; ?>">  
            <div class="item-work">
                <div class="hover">
                   	<img src="<?php echo $megahost_port['obj']['image'];?>" alt="">                            
                    <a href="<?php echo $megahost_port['obj']['image'];?>" class="fancybox"><div class="overlay"></div></a>
                </div>                                   
                <div class="info-work">
                    <h4><a href="<?php echo $permalink;?>"><?php echo $megahost_port['obj']['p_title'];?></a></h4>
                    <p><?php echo $megahost_port['obj']['p_description'];?></p>
                    <div class="icons-work">
                      <?php
                         foreach($megahost_port['obj']['portfolio_social'] as $megahost_social){
                             echo '<a href="'.$megahost_social['icon_link'].'" target="'.$megahost_social['target_icon_portfolio'].'">
                                      <i class='.$megahost_social['portfolio_icon'].' data-original-title="'.$megahost_social['icon_title'].'" data-toggle="tooltip" ></i>
                                    </a>';
                          }
                    ?>
                  </div>
              </div>  
          </div>
      </div>
     <!-- End Item Portfolio -->  
      <?php  
          }  
      ?>
    </div> 
    <!-- End Row Portfolio --> 
</div>