<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_spon = array();
    if($megahost_key['sponsors_to_show'] !== false){
        foreach($megahost_key['sponsors_to_show'] as $megahost_story){
            $megahost_spon[] = get_fields($megahost_story->ID);
        }
    }

?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    
      <!-- Row sponsors-->
      <div class="row sponsors">                  
           <ul id="carousel-sponsors" class="tooltip-hover">
              <?php
                  $megahost_weightArray = array();
                  foreach ($megahost_spon as $megahost_key => $megahost_row)
                  {
                    $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
                  }
                  array_multisort($megahost_weightArray, SORT_ASC, $megahost_spon);
      
                  foreach($megahost_spon as $megahost_sponsors){
              ?> 
              <li data-toggle="tooltip" title data-original-title="<?php echo $megahost_sponsors['tooltips']?>"> 
                	<a href="<?php echo $megahost_sponsors['link']?>" target="<?php echo $megahost_sponsors['target_sponsors']?>">
                  		<img src="<?php echo $megahost_sponsors['image']?>" alt="<?php echo $megahost_sponsors['alt_image']?>">
                	</a>
              </li>
              
              <?php
                  }     
              ?>
          </ul>
      </div>
      <!-- End Row sponsors-->
  
</div>