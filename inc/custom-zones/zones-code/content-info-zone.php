<?php
    $megahost_key = $megahost_value['rpt'];    
?>	

  <div class="container wow <?php echo $megahost_key['animation_zone']; ?>"> 
    	<div class="row">
         <div class="col-md-12">
          <?php                
              echo html_entity_decode($megahost_key['content']);
          ?>
         </div>
      </div>
	</div>