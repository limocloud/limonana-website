<?php
    $megahost_key = $megahost_value['rpt'];
?>

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    <div class="row">
      <div class="col-md-5 contact">
          <h2><?php echo (function_exists('get_field'))?$megahost_key['form_title']:'Contact Form';?></h2>
          <?php echo (function_exists('get_field'))?do_shortcode($megahost_key['form_id']):'No form to load';?>                      
      </div>
      <div class="col-md-7 map">
          <?php echo (function_exists('get_field'))?(do_shortcode($megahost_key['map_name']) !== '')?do_shortcode($megahost_key['map_name']):'No Map to load':'No Map to load';?>
          <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'Megahost' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>  
    </div>
	</div>
