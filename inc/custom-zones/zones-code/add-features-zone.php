<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_feat = array();
    if($megahost_key['features_to_show'] !== false){
        foreach($megahost_key['features_to_show'] as $megahost_story){
            $megahost_feat[] = get_fields($megahost_story->ID);
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
    
    <!-- Row Features --> 
    <div class="row">
    <?php
        $megahost_c=0;
    
        $megahost_weightArray = array();
        foreach ($megahost_feat as $megahost_key => $megahost_row)
        {
          $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
        }
        array_multisort($megahost_weightArray, SORT_ASC, $megahost_feat);
    
        foreach($megahost_feat as $megahost_features){
        $megahost_c++;
    ?>
      <!-- Item Feature --> 
      <div class="col-sm-6 col-md-4">
          <div class="item_feature <?php echo ($megahost_c%3==0)?'':'border_right';?>">
              <div class="row head_feature">
                  <div class="col-md-2">
                      <img src="<?php echo $megahost_features['image'];?>" alt="<?php echo $megahost_features['alt_image'];?>">                              
                  </div>
                  <div class="col-md-10">
                      <h4>
                        	<a href="<?php echo $megahost_features['link'];?>" target="<?php echo $megahost_features['target_features'];?>">
                        			<?php echo $megahost_features['title'];?>
                        	</a>
                    	</h4>
                      <h6><?php echo $megahost_features['subtitle'];?></h6>
                  </div>
              </div>                          
              <?php echo $megahost_features['description'];?>
          </div>
      </div> 
      <!-- End Item Feature -->  
      <?php
          }     
      ?>
      </div> 
      <!-- End Row Features --> 
</div>