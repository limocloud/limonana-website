<!DOCTYPE html>
<html lang="en">
  <head>
    	<!-- Basic -->
			<meta charset="<?php bloginfo( 'charset' );   ?>" />
			<title>
					<?php  
            	wp_title( '|', true, 'right' );
            	//Add blog name
            	bloginfo( 'name' );
            	// Add blog description in home page
            	$megahost_site_description = get_bloginfo( 'description', 'display' );
            	if ( $megahost_site_description && ( is_home() || is_front_page() ) )
            	echo " | $megahost_site_description";      
           ?>
			</title>
    	<meta name="description" content="<?php $megahost_site_description = get_bloginfo( 'description', 'display' ); ?>">

      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />  

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    	<!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->
    
      <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]--> 

      <?php wp_head(); ?>
	</head>

        <body <?php body_class();
          if(function_exists('of_get_option')){
            $megahost_style = '';
            if(of_get_option('style_layout') == 2 || of_get_option('style_layout') == 3){
              if(of_get_option('layout_style')=='1'){
              $megahost_style = ' style="background-color: '.of_get_option('layout_bg_color').'"';
            }else{
        	    $megahost_style = ' style="background-image: url('.get_template_directory_uri().'/img/backs/bg'.of_get_option('layout_bg').'.png)"';
            }
            }
            echo $megahost_style;
          }
        ?>> 
      
      <?php
        $megahost_layout = '';
      		if(function_exists('of_get_option')){
      			if(of_get_option('style_layout') == 2){
      				$megahost_layout = 'layout-boxed';
      			}else if(of_get_option('style_layout') == 3){
      				$megahost_layout = 'layout-boxed-margin';
      			}else{
      				$megahost_layout = '';    
      			}
      		}
      ?>
      
     <!-- layout-->
     <div id="layout" class="<?php echo $megahost_layout; ?>">

        <?php 
            if (function_exists('of_get_option'))  { 
                if (of_get_option('show_support'))  { 
        ?> 
        <!-- Login Client -->
        <div class="jBar">
            <div class="container"> 
                <div class="row">


                    <?php } } if (of_get_option('show_cont'))  { ?>
                      <div class="col-md-offset-1 col-md-4 contact_info">
                          <h1><?php echo of_get_option('cont_title');?></h1>
                          <ul>
                            <?php
                                for($megahost_i=1; $megahost_i<=of_get_option('cont_info_num'); $megahost_i++){
                                   echo '<li><span>'.of_get_option('cont_info_title'.$megahost_i).'</span>'.of_get_option('cont_info_value'.$megahost_i).'</li>';
                                }
                            ?>
                          </ul>
                      </div>
                  	<?php }  ?>

                    <?php
                    if (function_exists('of_get_option'))  {
                    if (of_get_option('show_form'))  {
                    ?>
                    <div class="col-md-offset-2 col-md-4">
                        <h1><?php echo of_get_option('form_title');?></h1>
                        <form id="frmlogin" name="frmlogin" action="<?php echo of_get_option('form_btn_link');?>/?ccce=dologin" method="post" >
                            <input name="username" type="email" placeholder="<?php echo of_get_option('form_mail');?>" required>
                            <input name="password" type="password" placeholder="<?php echo of_get_option('form_pass');?>" required>
                            <input type="submit" class="button" value="<?php echo of_get_option('form_btn');?>">
                        </form>
                    </div>
                  
                  	<div class="col-md-12">
                      	<?php
                     				dynamic_sidebar('login-top-whmcs-sidebar');
                        ?>
                    </div>
                  
                    <p class="jTrigger downarrow"><?php echo of_get_option('btn_close_title');?></p>
                </div>
            </div>
        </div>
        <span class="jRibbon jTrigger up"><?php echo of_get_option('btn_open_title');?></span>
        <div class="line"></div>
        <!-- End Login Client -->
	  
        <?php 
               }
            } 
        ?>
				
        <!-- Header -->
        <header>
          
           <?php 
            if (function_exists('of_get_option'))  { 
                if (of_get_option('show_first'))  { 
        		?> 
						<!-- Info Head -->
        		<section class="container">
              <div class="row info_head">
                <div class="col-md-12">
                  <ul>
                      <?php
                        if (function_exists('of_get_option')){ 
                          for($megahost_i=1; $megahost_i<=of_get_option('first_info_num'); $megahost_i++){
                              echo '<li>
																				<i '.font_awesome_icon_style('info'.$megahost_i).'></i>
																				<a href="'.of_get_option('info_link'.$megahost_i).'">'.of_get_option('info_title'.$megahost_i).'</a>
																</li>';
                            }
                          }
                      ?>
                  </ul>
                </div>
						</div>
        </section>
        <!-- Info Head -->
         <?php 
               }
            } 
        ?>

        <!-- Nav -->
        <nav class="gray">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-3">
                      <div class="logo">
                        <?php
                            if (function_exists('of_get_option'))  { 
                         ?>
                         <a href="<?php echo of_get_option('url_logo'); ?>">
                          		
                          		<?php
                              	if (function_exists('of_get_option'))  { 
                										if (of_get_option('show_bg_logo'))  { 
                              ?>
                               <span class="bg_logo" <?php $megahost_bg_width = of_get_option('width_bg_logo'); echo 'style="width: '.$megahost_bg_width.'; "' ?> ></span>
                                  
                              <?php  }  }  ?>
                                  
                                  
                                <?php
                                    $megahost_logo = of_get_option('text_logo');
                              			$megahost_styles_logo = of_get_option('type_logo');
                                    if(of_get_option('style_logo') == '1'){
                                        echo '<h1 style="color: '.$megahost_styles_logo['color'].'; font-weight: '.$megahost_styles_logo['style'].'; font-family: '.$megahost_styles_logo['face'].' !important; font-size: '.$megahost_styles_logo['size'].';">'.substr($megahost_logo,0,stripos($megahost_logo,' ')).'<span style="color: '.$megahost_styles_logo['color'].';">'.substr($megahost_logo,stripos($megahost_logo,' ')).'</span></h1>';
                                    }else{
                                ?>
                                 <img src="<?php echo of_get_option('img_logo');?>" style="width:<?php echo of_get_option('logo_image_width');?>;  height:<?php echo of_get_option('logo_image_height');?>; top:<?php echo of_get_option('logo_top_position');?>; left:<?php echo of_get_option('logo_left_position');?>;" alt="" />
                                <?php }?>
                            </a>
                        <?php
                             }else{
                                 echo '<a href="'.get_home_url().'"><h1>Mega <span>Host</span></h1></a>';
                             }    
                         ?>
                      </div>
                    </div>
                    <!-- End Logo -->

                    <div class="col-md-9">
                       <?php 
                           wp_nav_menu(array(
                                'theme_location' => 'HeaderMenu',
                                'container' => 'false',
                                'menu_class'      => 'sf-menu',
                                'menu_id'         => 'menu'
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        <?php get_template_part('/inc/extra-codes/header-admin'); ?>
 </header>