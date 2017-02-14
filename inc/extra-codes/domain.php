<?php
     if(function_exists('of_get_option')){
         $array_pages = (of_get_option('dom_show') !== false)?of_get_option('dom_show'):array();         
         $tit = (get_the_title() == '')?'404':$post->post_name;//strtolower(str_replace(' ','_',get_the_title()));
         if(array_key_exists($tit,$array_pages))
            if($array_pages[$tit] == '1'){
 ?>

<!-- Search Domain -->
<section class="search_domain gray">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <div class="arrow_domain">
                   <h1><?php echo of_get_option('dom_title');?></h1>
               </div>
          </div>

          <div class="col-md-9 form_domain">
              <span>www.</span>
              <form action="<?php echo of_get_option('dom_btn_link');?>/?ccce=domainchecker" method="post">  
                  <input type="hidden" name="token" value="<?php echo of_get_option('dom_value'); ?>" />
                  <input type="hidden" name="direct" value="true" /> 
                  <input type="text" name="domain" required placeholder="<?php echo of_get_option('dom_text'); ?>">
                  <select name="ext">
                  <?php
                       for($i=1; $i<=of_get_option('dom_num'); $i++){
                   ?>
                      <option><?php echo of_get_option('dom_dom'.$i);?></option>
                   <?php
                       }
                    ?>
                  </select>
                  <input type="submit" class="button" value="<?php echo of_get_option('dom_btn_title');?>">
              </form> 
          </div>                  
      </div>
  </div>
</section>
<!-- End Search Domain -->
<?php
        }
     }
 ?>