<article class="row">
<?php 
    $megahost_pos = (function_exists('get_field'))?get_field('position'):'3';
   if( $megahost_pos == '1'){
       echo '<div class="col-md-3">';
       		get_sidebar();
       echo '</div>';
   }
?>  
<section class="<?php echo ($megahost_pos == '2')?'col-md-12':'col-md-9';?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
</section><!-- #post-<?php the_ID(); ?> -->

<?php
   if( $megahost_pos == '3'){
       echo '<div class="col-md-3">';
       		get_sidebar();
       echo '</div>';
   }
?>
</article>