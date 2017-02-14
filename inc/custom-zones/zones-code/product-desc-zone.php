<?php
    $megahost_key = $megahost_value['rpt'];

?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    <div class="row">    
        <div class="col-md-5 text_right">
            <h1><?php echo $megahost_key['right_title'];?></h1>
            
            <?php
                foreach($megahost_key['right_info'] as $megahost_info){
                    echo '<h4>'.$megahost_info['title'].'</h4><p>'.$megahost_info['desc'].'</p>';
                }
            ?>
        </div>
    
        <div class="col-md-2 more_vertical"></div>
    
        <div class="col-md-5">
            <h1><?php echo $megahost_key['left_title'];?></h1>
    
            <?php
                foreach($megahost_key['left_info'] as $megahost_info){
                    echo '<h4>'.$megahost_info['title'].'</h4><p>'.$megahost_info['desc'].'</p>';
                }
            ?>
        </div>      
  		</div>
  </div>