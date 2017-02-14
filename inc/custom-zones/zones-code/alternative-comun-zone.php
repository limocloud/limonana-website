<?php
    $megahost_key = $megahost_value['rpt'];

?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
      <div class="row">
          <?php
               if($megahost_key['pos_img'] == '2'){
                  echo '<div class="col-md-4 padding_top"><img src="'.$megahost_key['image'].'" alt="'.$megahost_key['alt_image'].'" class="img-responsive"></div>';
               }
           ?>
          <div class="col-md-8">
              <h2><?php echo $megahost_key['title'];?></h2>
              <div class="text_resalted">
                  <h3><?php echo $megahost_key['subtitle'];?></h3>
              </div>
              <p><?php echo $megahost_key['description'];?></p>
          </div>
          <?php
               if($megahost_key['pos_img'] == '1'){
                  echo '<div class="col-md-4 padding_top"><img src="'.$megahost_key['image'].'" alt="'.$megahost_key['alt_image'].'" class="img-responsive"></div>';
               }
           ?>
      </div>
 
</div>