<?php
    $megahost_key = $megahost_value['rpt'];   

    $megahost_members = array();
    if($megahost_key['team_show'] !== false){
        foreach($megahost_key['team_show'] as $megahost_team){
            $megahost_members[] = get_fields($megahost_team->ID);
        }
    }

		if($megahost_key['team_row'] == 1){
      $megahost_team_row = 'col-sm-6 col-md-offset-4 col-md-4 col-lg-4';
    }else if($megahost_key['team_row'] == 2){
      $megahost_team_row = 'col-sm-6 col-md-6 col-lg-6';
    }else if($megahost_key['team_row'] == 3){
      $megahost_team_row = 'col-sm-6 col-md-4 col-lg-4';
    }else if($megahost_key['team_row'] == 4){
      $megahost_team_row = 'col-xs-6 col-sm-4 col-md-3';
    }else if($megahost_key['team_row'] == 5){
      $megahost_team_row = 'col-sm-6 col-md-2 col-lg-2';
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
  
  <!-- Row Team Zone --> 
  <div class="row">
  <?php
       $megahost_weightArray = array();
       foreach ($megahost_members as $megahost_key => $megahost_row)
       {
         $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
       }
       array_multisort($megahost_weightArray, SORT_ASC, $megahost_members);
  
       foreach($megahost_members as $megahost_t){
  ?>		
        <!-- Item Team-->
        <div class="<?php echo $megahost_team_row; ?> ">
            <div class="item_team">
                <div class="img_team">
                    <a href="<?php echo $megahost_t['team_link'];?>" target="<?php echo $megahost_t['target_team'];?>">
                        <img src="<?php echo $megahost_t['photo'];?>" alt="<?php echo $megahost_t['alt_image']; ?>">
                    </a>
                    <div class="name_team">
                        <h5><?php echo $megahost_t['name'];?></h5>
                        <span><?php echo $megahost_t['ocupation'];?></span>
                    </div>
                </div>
                <div class="info_team">                                  
                   	<?php echo $megahost_t['description'];?>
                    <ul class="social_team tooltip-hover">
                      <?php
                          foreach($megahost_t['social_link'] as $megahost_social){
                            echo '<li data-toggle="tooltip" title data-original-title="'.$megahost_social['tooltip_team'].'">
                                    <a href="'.$megahost_social['link'].'" target="'.$megahost_social['target_social_team'].'">
                                    	<i class='.$megahost_social['icon'].'></i>
                                    </a>
                                  </li>';
                          }
                      ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Item Team-->
  <?php
      }
  ?>
  </div>
  <!-- End Row Team Zone --> 

</div>