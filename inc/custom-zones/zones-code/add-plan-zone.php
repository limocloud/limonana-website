<?php
    $megahost_key = $megahost_value['rpt'];    

    $megahost_plans = array();
    if($megahost_key['plan_show'] !== false){
        foreach($megahost_key['plan_show'] as $megahost_plan){
            $megahost_plans[] = get_fields($megahost_plan->ID);
        }
    }
    $megahost_resalt = (isset($megahost_key['show_resalt_plan']))?$megahost_key['show_resalt_plan']:'';
    $megahost_resalt = (!empty($megahost_resalt) && $megahost_resalt[0] == 1)?'promotion_table':'';
		
		if($megahost_key['plan_row'] == 1){
      $megahost_plans_row = 'col-sm-6 col-md-offset-4 col-md-4 col-lg-4';
    }else if($megahost_key['plan_row'] == 2){
      $megahost_plans_row = 'col-sm-6 col-md-6 col-lg-6';
    }else if($megahost_key['plan_row'] == 3){
      $megahost_plans_row = 'col-sm-6 col-md-4 col-lg-4';
    }else if($megahost_key['plan_row'] == 4){
      $megahost_plans_row = 'col-sm-6 col-md-3 col-lg-3';
    }else if($megahost_key['plan_row'] == 5){
      $megahost_plans_row = 'col-sm-6 col-md-2 col-lg-2';
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
    
    <!-- Row Plans Zone -->  
    <div class="row">
    <?php
        $megahost_weightArray = array();
        foreach ($megahost_plans as $megahost_key => $megahost_row)
        {
           $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
        }
        array_multisort($megahost_weightArray, SORT_ASC, $megahost_plans);
    
        foreach($megahost_plans as $megahost_p){
          
        $megahost_image_table = $megahost_p["image_head_position"];
    ?>	
        <!-- Item Plan -->  
        <div class="<?php echo $megahost_plans_row; ?>">
              <div class="item_table <?php echo ($megahost_p['resalt_plan'][0]=='1')?$megahost_resalt:'';?>">
                	<div class="head_table">
                    	<?php
                          if($megahost_image_table == 1){
                             echo '<img src="'.$megahost_p["image_head"].'" alt="'.$megahost_p["alt_image"].'">';
                          }    
                       ?>
                      <h1><?php echo $megahost_p['title'];?></h1>
                      <h2><?php echo $megahost_p['price'].' <span>'.$megahost_p['freq'].'</span>';?></h2>
                      <h5><?php echo $megahost_p['other_price'];?></h5>
                    	<?php
                          if($megahost_image_table == 2){
                             echo '<img src="'.$megahost_p["image_head"].'" alt="'.$megahost_p["alt_image"].'">';
                          }    
                       ?>
                  </div>
                  <ul>
                      <?php 
                        $megahost_c = 1;
                        foreach($megahost_p['values'] as $megahost_v){
                            $megahost_color = ($megahost_c%2 == 0)?'color':'';
                            $megahost_c++;
                            echo '<li class="'.$megahost_color.'">'.$megahost_v['value'].'</li>';      
                        }
                      ?>  
                  </ul> 
                  <a href="<?php echo $megahost_p['btn_link'];?>" class="button"><?php echo $megahost_p['btn_title'];?></a>
              </div>
         </div>
        <!-- End Item Plan -->  
    <?php
         }
    ?>
    </div>
    <!-- End Row Plans Zone --> 

</div>