<?php
    $megahost_key = $megahost_value['rpt'];  

    $megahost_c=0;
    foreach($megahost_key['locations'] as $megahost_loc){
         $megahost_c++;
         if($megahost_c == 1){echo '<div class="row">';}  
    
?>
  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="item_location">
            <div class="row">
                 <div class="col-md-6">
                    <img src="<?php echo $megahost_loc['images'];?>" alt="<?php echo $megahost_loc['alt_image']; ?>" class="img-responsive">                              
                </div>
                <div class="span6">
                    <h4><?php echo $megahost_loc['title']?></h4>
                    <ul>
                      <?php
                           foreach($megahost_loc['info'] as $megahost_v){
                               echo '<li>'.$megahost_v['value'].'</li>';
                           }
                       ?>
                    </ul>
                </div>
                <div class="col-md-12">
                     <p><?php echo $megahost_loc['description']?></p>
                </div>
            </div> 
        </div>
      </div>      
      
<?php
        if($megahost_c%3 == 0){
            echo '</div>';
            if($megahost_c != count($megahost_key['locations'])){echo '<div class="row">';}
        }else {
            if($megahost_c == count($megahost_key['locations'])){echo '</div>';}
        }
     }
?>	</div>
</div>