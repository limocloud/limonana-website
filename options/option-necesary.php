<?php
  comments_template( );
  register_sidebar(  );
  posts_nav_link(); 
  the_post_thumbnail();
  add_editor_style();
?>
 <?php wp_link_pages(  ); ?>

 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php comment_form(); ?>
 <?php add_theme_support( 'custom-background'); ?>

 <?php add_theme_support( 'custom-header' ); 
 add_theme_support( 'automatic-feed-links' ); ?>

 <?php language_attributes(); ?>

 <?php the_tags() ?>


 <?php dynamic_sidebar(  ); ?>


 <?php body_class(  ); ?>