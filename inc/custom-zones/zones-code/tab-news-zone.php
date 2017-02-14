<?php
    $megahost_key = $megahost_value['rpt']; 
?>	

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
      <!-- Row -->
      <div class="row">
					<!-- tabs_varius-->
          <ul class="tabs_varius">
              <?php
               if($megahost_key['check_fac'][0] == '1'){
                echo '<li><a href="#tab1">'.$megahost_key['title_zone1'].'</a> </li>';         
               }
               if($megahost_key['check_story'][0] == '1'){
                echo '<li><a href="#tab2">'.$megahost_key['title_zone2'].'</a> </li>';
               }
               if($megahost_key['check_about'][0] == '1'){
                echo '<li><a href="#tab3">'.$megahost_key['title'].'</a> </li>';
               }
               ?>
          </ul>
        <!-- End tabs_varius--> 
        
        <!--CONTAINER TABS-->         
        <div class="tab_container">  
                      
          <!-- 1-content -->
          <?php if($megahost_key['check_fac'][0] == '1'){?>
          <div id="tab1" class="tab_content">
              <div class="row">
                	<div class="col-md-12">
                	<!-- carousel-facilities -->  
                  <ul id="carousel-facilities">
                      <?php
                          $megahost_facility= array();
                          foreach($megahost_key['facilities_to_show'] as $megahost_fac){
                              $megahost_facility[] = get_fields($megahost_fac->ID);
                          }
                          $megahost_c=0;
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
              </div>          
          </div>
          <!-- end 2-content -->
          <?php }

          if($megahost_key['check_story'][0] == '1'){?>
        
          <!-- 2-content -->
          <div id="tab2" class="tab_content">
              <div class="row">
                <div class="col-md-12">
                 <!-- carousel-stories -->
                 <ul id="carousel-stories">
                     <?php
                        $megahost_stories = array();
                        foreach($megahost_key['stories_to_show'] as $megahost_story){
                            $megahost_stories[] = get_fields($megahost_story->ID);
                        }     
                        $megahost_c=0;
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
              </div>
          </div>
          <!-- end 2-content -->
          <?php }

          if($megahost_key['check_about'][0] == '1'){?>
          <!-- 3-content -->
          <div id="tab3" class="tab_content">
              <div class="row center-responsive">
                <div class="col-md-12">
                   <div class="col-md-4">
                        <img src="<?php echo $megahost_key['image']['url']; ?>" alt="" class="img-responsive">
                   </div>
                   <div class="col-md-8">
                        <h3><?php echo $megahost_key['title'];?></h3>
                        <p><?php echo $megahost_key['description'];?></p>
                    </div>
                </div>
              </div>
          </div>
          <!-- End 3-content -->
          <?php }?>    
        
       </div>          
       <!--End CONTAINER TABS-->  

    </div>
    <!-- End Row-->
</div>