<?php  
		if(function_exists('of_get_option')){
  			if(of_get_option('show_footer')){
?>
<!-- Footer top-->
<div class="shadows">
    <footer class="container">
        <div class="row footer_top">
          
						<!-- Social Footer -->
          	<?php if(of_get_option('show_footer')){ ?>
            <div class="col-md-3">
                <?php
                  $megahost_title =of_get_option('footer_social_net_title');  
                  if(of_get_option('show_1_footer')){ 
                    echo '<h2>'.$megahost_title.'</h2>
                    <ul class="social_footer">';
                        for($megahost_i=1; $megahost_i<=of_get_option('footer_social_num'); $megahost_i++){
                        echo '<li>
                          <a href="'.of_get_option('footer_social_link'.$megahost_i).'" target="_blank">
                          <i '.font_awesome_icon_style('sfoot'.$megahost_i).'></i>'.of_get_option('footer_social_text'.$megahost_i).'
                          </a>
                        </li>';
                    }                              
                echo '</ul>';
                ?>
            </div>
           <?php } ?>
           	<!-- End Social Footer -->
          
						<!-- About Us Footer -->
            <?php  if(of_get_option('show_2_footer')){ ?>
            <div class="col-md-3">   
                <h2><?php echo of_get_option('footer_about_title');?></h2>
                <p><?php echo of_get_option('footer_about_text');?></p>
                <a href="<?php echo of_get_option('footer_about_logo_link');?>">
                  <img src="<?php echo of_get_option('footer_about_img');?>" alt="">
                </a>
            </div>
            <?php } ?>
           <!-- End About Us Footer -->

          	<!-- Newsletter-->
            <?php  if(of_get_option('show_3_footer')){ ?>
            <div class="col-md-3">    
                <h2><?php echo of_get_option('footer_news_title');?></h2>
                <p><?php echo of_get_option('footer_news_desc');?></p>
                <div class="newsletter" id="mc_embed_signup">
                 <?php
                   $GLOBALS['sidebar_name'] = of_get_option('footer_news_sidebar') !== false ? of_get_option('footer_news_sidebar') : 'newsletter';
                   get_sidebar($GLOBALS['sidebar_name']);  
  								?>
                </div>
            </div>
            <?php } ?>
            <!-- End Newsletter-->

            <!-- Contact Us Footer-->
            <?php if(of_get_option('show_4_footer')){ ?>
             <div class="col-md-3">   
                 <h2><?php echo of_get_option('footer_cont_title');?></h2>
                 <p><?php echo of_get_option('footer_cont_desc');?></p>
                 <ul class="contact_footer">
                    <?php
                       for($megahost_i=1; $megahost_i<=of_get_option('footer_cont_info_num'); $megahost_i++){
                        echo '<li>
  															<i '.font_awesome_icon_style('cont'.$megahost_i).'></i>'.of_get_option('footer_cont_info_title'.$megahost_i).'
																<a href="'.of_get_option('footer_cont_info_link'.$megahost_i).'">'.of_get_option('footer_cont_info_value'.$megahost_i).'</a>
														</li>' ;
                         }     
                     ?>
                </ul>
             </div>
             <?php } ?>
             <!-- End Contact Us Footer-->
              
            </div>
        </footer>
     </div>
	 	<?php } }?>
			
			<!-- Footer Down-->
  		<?php 
        if(function_exists('of_get_option')){
          if(of_get_option('show_copyright')==1){ 
      ?>
			<footer class="footer_down">
        <div class="container">
            <div class="row">
              	<!-- About Footer -->
                <div class="col-md-8">
                    <?php  
                    		wp_nav_menu(
                          	array(
                              'theme_location' => 'FooterMenu',
                              'container' => 'false',
                              'menu_class'      => 'nav_footer',
                              'menu_id'         => 'menu-footer'
                           ));
                    		?>
									</div>
              		<!-- End Nav Footer -->
									
              		<!-- copyright Footer -->
                  <div class="col-md-4 text_right">
                        <p><a href="<?php echo of_get_option('copyright_link');?>"><?php echo of_get_option('copyright_text');?></a></p>
                  </div>
              		<!-- End copyright Footer -->
              </div>
         	</div>
      </footer>
  		<?php } } ?>
      <!-- End Footer Down-->
		 <?php } wp_footer();?>

    </div>
    <!-- End layout-->

		<!-- Style Switcher Theme -->
		<?php  
				 if (function_exists('of_get_option')){ 
            if (of_get_option('show_style_switcher')){ 
							get_template_part('/inc/extra-codes/stylewitcher-options');  
						}
         }
		?>
		<!-- End Style Switcher Theme -->

	</body>
</html>