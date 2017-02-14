<?php
    get_header();
?>
        <!-- section area-->
        <section class="info_content paddings">
            <div class="container">
                <div class="row position-relative">
           
                    <div class="col-md-7">
                        <!-- carousel -->  
                      	<ul id="carousel-single" class="carousel-single">
                          <?php
                               $images = get_field('images') !== ''? get_field('images') : array();
                               foreach($images as $key){
                            ?>
                          	<li class="item-work"> 
                              <div class="hover">
                                  <img src="<?php echo  $key['url'];?>" alt="">                            
                                  <a href="<?php echo  $key['url'];?>" class="fancybox"><div class="overlay"></div></a>
                              </div>  
                          </li>
                          <?php
                               }
                            ?>
                        </ul>
                        <!-- End carousel -->
                    </div>
					
                    <div class="col-md-5">
                        <h1 class="title-subtitle">
                          <?php echo get_field('portf_title');?>
                          <span><?php echo get_field('portfolio_subtitle');?></span>
                      	</h1>
                        <p><?php echo get_field('portfolio_description');?></p>
                    		
                      	<div class="row">
                        		<ul class="col-md-6 list">
                              <?php
                                 foreach(get_field('vignette_1') as $key){
                               ?>
                          		 <li><?php echo '<i class="'.get_field('vignette_icon').'"></i>'; echo $key['value'];?></li>
                               <?php
                                 }
                                ?>
                        		</ul>
                        
                        		<ul class="col-md-6 list">
                                <?php
                                   foreach(get_field('vignette_2') as $key){
                                 ?>
                          			<li><?php echo '<i class="'.get_field('vignette_icon').'"></i>'; echo $key['value'];?></li>
                             <?php
                               }
                              ?>
                           </ul>
                        </div>

						
                        <div class="technologies">
                          <?php
                             foreach(get_field('technologies_icon') as $key){
                           ?>
                           <a href="<?php echo $key['tec_link']?>" target="<?php echo $key['target_icon_tec']?>">
                             	<i class="<?php echo $key['tec_icon']?>" data-original-title="<?php echo $key['icon_title_tec']?>" data-toggle="tooltip"></i>
                          	</a>
                           <?php } ?>
                        </div>
						
												<a href="<?php echo get_field('btn_link');?>" target="<?php echo get_field('target_portfolio');?>" class="btn btn-primary"><?php echo get_field('btn_title');?></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End section area-->

        <!-- section area-->
        <section class="info_content gray shadows borders paddings">
            <div class="container"> 
              <div class="row"> 
                  <?php
                     foreach(get_field('alt_info') as $key){
                   ?>
                      <div class="col-md-6">                      
                        <h3><?php echo $key['title']?></h3>                                                   
                         <p><?php echo $key['description']?></p>
                      </div>                    
                  <?php
                     }              
                  ?>      
              </div>
            </div>
        </section>
        <!-- End section area-->

        <section class="info_content paddings">
          <div class="container">
              <div class="row">
 
            <h1 class="titles">
                <span><?php echo of_get_option('single_port_title');?></span>
            </h1>  
                
    				<!-- Items Works -->
            <ul id="carousel-works" class="carousel-works tooltip-hover">
              
                <?php
                    $megahost_args = array(
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    );
                    $megahost_query = null;
                    $megahost_query = new WP_Query($megahost_args);
                    $megahost_portfolio = array();
                    
                    while ($megahost_query->have_posts()) {
                        $megahost_query->the_post();
                        $megahost_portfolio[] = array(
                            'permalink' => get_permalink(),
                            'title' => get_field('p_title'),
                            'description' => get_field('p_description'),
                            'social' => get_field('portfolio_social'),
                            'image' => get_field('image'),
                          	'alt_image' => get_field('alt_image'),
                        );
                    }
                    foreach($megahost_portfolio as $megahost_port){
                ?>
                
                <!-- Item Work -->
                <li class="item-work">
                   <div class="hover">
                        <img src="<?php echo $megahost_port['image'];?>" alt="<?php echo $megahost_port['alt_image'];?>">                            
												<a href="<?php echo $megahost_port['image'];?>" class="fancybox" title="Zoom Image"><div class="overlay"></div></a>
                    </div>                                   
                    <div class="info-work">
                        <a href="<?php echo $megahost_port['permalink'];?>"><h4><?php echo $megahost_port['title'];?></h4></a>
						    				<p><?php echo $megahost_port['description'];?></p>
                        <div class="icons-work">
                            <?php
                                foreach($megahost_port['social'] as $megahost_social){
                                echo '<a href="'.$megahost_social['icon_link'].'" target="'.$megahost_social['target_icon_portfolio'].'">
                                  			<i class='.$megahost_social['portfolio_icon'].' data-original-title="'.$megahost_social['icon_title'].'" data-toggle="tooltip"></i>
                                  </a>';
                                }
                             ?>
                        </div>
                    </div>  
                </li>  
                <!-- Item Work -->
                <?php
                     }
                ?>
              
            </ul>
            <!-- End Items Works -->
					</div>
       </div>
		</section>

<?php
     get_footer();
?>