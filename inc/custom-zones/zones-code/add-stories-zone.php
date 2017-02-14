<?php
    $megahost_key = $megahost_value['rpt'];

    $megahost_stories = array();
    if($megahost_key['stories_show'] !== false){
        foreach($megahost_key['stories_show'] as $megahost_story){
            $megahost_stories[] = get_fields($megahost_story->ID);
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
      
      <!-- Row stories --> 
      <div class="row">
          <!-- carousel-stories -->
          <ul id="carousel-stories">          
              <?php
                  $megahost_weightArray = array();
                  foreach ($megahost_stories as $megahost_key => $megahost_row)
                  {
                    $megahost_weightArray[$megahost_key] = $megahost_row['weight'];
                  }
                  array_multisort($megahost_weightArray, SORT_ASC, $megahost_stories);
      
                  foreach($megahost_stories as $megahost_story){
              ?>
                <!-- Item storie -->
                <li>
                    <div class="row item_storie">
                         <div class="col-md-3 image_storie">
                              <img src="<?php echo $megahost_story['photo']?>" alt="<?php echo $megahost_story['alt_image']?>">
                         </div>
                         <div class="col-md-9">
                              <div class="info_storie">
                                   <span class="quote-arrow"></span>
                                   <h4>
                                       <a href="<?php echo $megahost_story['link'];?>" target="<?php echo $megahost_story['target_storie']?>">
                                         <?php echo $megahost_story['name']?>
                                       </a>
                                  	</h4>
                                   <p><?php echo $megahost_story['story']?></p>
                               </div>
                         </div>
                    </div>
                </li>
                <!-- End Item storie -->
          <?php
             }     
          ?>
        </ul>
        <!-- End carousel-stories -->
      </div>
      <!-- End Row stories --> 

</div>