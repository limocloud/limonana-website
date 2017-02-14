<?php
    $megahost_key = $megahost_value['rpt'];
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

  <div class="row center-responsive">
      <?php
           if($megahost_key['position'] == '2'){
               echo '<div class="col-md-4"><img src="'.$megahost_key['image']['url'].'" alt="'.$megahost_key['alt_image'].'" class="img-responsive"></div>';
           }
       ?>

       <div class="col-md-8">
            <h3><?php echo $megahost_key['title'];?></h3>
            <p><?php echo $megahost_key['description'];?></p>
        </div>
        
        <?php
           if($megahost_key['position'] == '1'){
               echo '<div class="col-md-4"><img src="'.$megahost_key['image']['url'].'" alt="'.$megahost_key['alt_image'].'" class="img-responsive"></div>';
           }
       ?>
    </div>
</div>