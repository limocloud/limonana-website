<?php get_header();?>

<!-- Content Error Page-->
<section class="info_content paddings">
    <!-- Container-->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <div class="error_page">
                <div class="col-md-4">
                    <h1><?php echo of_get_option('404_title') ?></h1>
                </div>
                <div class="col-md-8">
                    <h2><?php echo of_get_option('404_text') ?></h2>
                </div>    
            </div>
        </div>
			  
        <!-- End -->
        <div class="row message_error center">
            <h3><?php echo of_get_option('404_explain') ?></h3>
            <a href="<?php echo of_get_option('404_url') ?>" class="button big"><?php echo of_get_option('404_botton') ?></a>
        </div>
    </div>
    <!-- End Container-->
</section>
<!-- End Content Error Page-->
        
<?php get_footer(); ?>