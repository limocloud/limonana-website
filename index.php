<?php
    $GLOBALS['ini'] = 1;
    $GLOBALS['img'] = 'ini';
    get_header();
?>

<section class="info_content paddings">
    <!-- Container-->
    <div class="container">
	    <div class="row">
            <div class="col-md-9">
                <?php get_template_part( 'loop' ); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>
<!-- End Container -->
<?php get_footer(); ?>