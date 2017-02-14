<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_facility= array();
    if($megahost_key['facility_show'] !== false){
        foreach($megahost_key['facility_show'] as $megahost_fac){
            $megahost_facility[] = get_fields($megahost_fac->ID);
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

  <!-- Row facilities --> 
  <div class="row">
      <!-- carousel-facilities -->  
      <ul id="carousel-facilities">
        <?php
            $megahost_weightArray = array();
             foreach ($megahost_facility as $megahost_key => $megahost_row)
             {
               $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
             }
             array_multisort($megahost_weightArray, SORT_ASC, $megahost_facility);

             foreach($megahost_facility as $megahost_f){
        ?>
           <!-- Item Facilities-->
           <li>
              <div class="item_facilities">
                   <a href="<?php echo $megahost_f['image'];?>" class="fancybox">
                     	<img src="<?php echo $megahost_f['image'];?>" alt="<?php echo $megahost_f['alt_image'];?>">
                	 </a>
                   <p><a href="<?php echo $megahost_f['link'];?>" target="<?php echo $megahost_f['target_facilitie'];?>"><?php echo $megahost_f['title'];?></a></p>
              </div>
            </li>
            <!-- End Item Facilities-->
        <?php
            }
        ?>
                    
     </ul>
     <!-- End carousel-facilities -->  
  </div> 
  <!-- End Row facilities --> 

</div>