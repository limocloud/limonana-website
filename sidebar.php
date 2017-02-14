<?php
  $megahost_sidebar = isset($GLOBALS['sidebar_name'])? strtolower($GLOBALS['sidebar_name']):'primary';
  if ( ! is_active_sidebar( $megahost_sidebar ) ) {
      return;
  }
?>
<div id="sidebar" role="complementary">
    <?php
       dynamic_sidebar($megahost_sidebar);
    ?>
</div>