<?php
    $megahost_key = $megahost_value['rpt'];
?>

<div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
   <div class="row">  
      <div class="col-md-7">    
      <?php
            $megahost_c=0;
            foreach($megahost_key['accordion_info'] as $megahost_acc){
                 $megahost_c++;
        ?>
            <div class="accordion-trigger"><?php echo $megahost_acc['title_acc']?></div>     
            <div class="accordion-container">       
              <?php 
               
                if(isset($megahost_acc['title']) && isset($megahost_acc['desc'])){
                    echo '<h4>';
                    echo $megahost_acc['title'];
                    echo '</h4>';
                    echo $megahost_acc['desc'];
                }
                if(isset($megahost_acc['vignette'])){
                    echo '<ul>';
                    foreach($megahost_acc['vignette'] as $megahost_vig){
                        echo '<li>'.$megahost_vig['value'].'</li>';    
                    }
                    echo '</ul>';
                }
               ?>
            </div>
            <?php
                echo ($megahost_c < count($megahost_key['accordion_info']))?'<div class="clearfix"></div>':'';     
            }
            ?>
      </div>
    
      <div class="col-md-5">
          <div class="video">
              <iframe src="<?php echo $megahost_key['video_link']?>"></iframe>
          </div>
      </div>
     
    </div>
</div>