<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_portfolio = array();
    if($megahost_key['portfolio_to_show'] !== false){
        foreach($megahost_key['portfolio_to_show'] as $megahost_port){
            $megahost_portfolio[] = array(
                'obj' => get_fields($megahost_port->ID),
                'id' => $megahost_port->ID,
            );
        }
    }
?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    
    <!-- Title Zone -->  
    <?php 
       if($megahost_key['title_zone'] !== ''){
    ?>
    <h1 class="titles">
         <span><?php echo $megahost_key['title_zone'];?></span>
    </h1>
    <?php }else{
            echo '';
         }
    ?>
    <!-- End Title Zone --> 
    
    
    <!-- Items Works -->
    <ul id="carousel-works" class="carousel-works tooltip-hover">
    <?php
         /*
        $megahost_weightArray = array();
        foreach ($megahost_portfolio as $megahost_key['obj'] => $megahost_row)
        {
          $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
        }
        array_multisort($megahost_weightArray, SORT_ASC, $megahost_portfolio); */         
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
    ?>
      <!-- Item Work -->
      <li class="item-work">
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
                          echo '<a href="'.$megahost_social['icon_link'].'">
              <i class='.$megahost_social['portfolio_icon'].' data-original-title='.$megahost_social['icon_title'].' data-toggle="tooltip" ></i>
              </a>';
                        }
              ?>
            </div>
          </div>  
      </li>  
      <!-- Item Work -->
      <?php
          } 
      ?>
    </ul>
    <!-- End Items Works -->
</div>