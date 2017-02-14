<?php
  $options[] = array(
      'name' =>'Footer',
      'type' => 'heading'
   );
   $options[] = array(
      'id' => 'show_footer',
      'desc' => 'Show Footer Section (Default True)',
      'std' => 1,
      'type' => 'checkbox'
   ); 

    //SECTION 1 SOCIAL NETWORK
    $options[] = array(
      'name' => 'Social network Section',
      'type' => 'info'
    );
    $options[] = array(
      'desc' =>'Display Social network Section on Footer, default true',
      'id' => 'show_1_footer',
      'std' => '1',
      'type' => 'checkbox'
    );
    $options[] = array(
      'id' => 'footer_social_net_title',
      'desc' => 'Title of social-net zone',
      'std' => 'Follow Mega Host',
      'type' => 'text'
    );
    $options[] = array(
      'id' => 'footer_social_num',
      'desc' => 'Number of Social Info',
      'std' => '4',
      'type' => 'text',
      'class' => 'mini',
    );
    if(of_get_option('footer_social_num')?$cant=of_get_option('footer_social_num'):$cant=3);
    for($i=1; $i<=$cant; $i++){
      foreach(font_awesome_icon('sfoot'.$i,'Social Info '.$i) as $val){
          $options[] = $val;
    }
    $options[] = array(
        'id' => 'footer_social_text'.$i,
        'desc' => 'Title',
        'std' => 'Follow on...',
        'type' => 'text',
    );
    $options[] = array(
        'id' => 'footer_social_link'.$i,
        'desc' => 'Link',
        'std' => '#',
        'type' => 'text',
    );
  }

  //ABOUT US ZONE
  $options[] = array(
    'name' => '',
    'type' => 'info'
  ); 
  $options[] = array(
    'name' => 'About us Section ',
    'type' => 'info'
  );        
  $options[] = array(
    'desc' => 'Display on Footer, default true',
    'id' => 'show_2_footer',
    'std' => '1',
    'type' => 'checkbox'
  );    
  $options[] = array(
    'name' => of_get_option('footer_about_title'),
    'id' => 'footer_about_title',
    'desc' => 'Title',
    'std' => '',
    'type' => 'text'
  ); 
  $options[] = array(
    'id' => 'footer_about_text',
    'desc' => 'Description',
    'std' => ' ',
    'type' => 'textarea'
  );  
  $options[] = array(
    'id' => 'footer_about_img',
    'desc' => 'Logo',
    'type' => 'upload'
  );    
  $options[] = array(
    'id' => 'footer_about_logo_link',
    'desc' => 'Logo link',
    'type' => 'text'
  );   

  //NEWSLETTER
  $options[] = array(
    'name' => '',
    'type' => 'info'
  );
  $options[] = array(
    'name' => 'Newsletter Section ',
    'type' => 'info'
  );
  $options[] = array(
    'desc' => 'Display on Footer, default true',
    'id' => 'show_3_footer',
    'std' => 1,
    'type' => 'checkbox'
  );
  $options[] = array(
    'id' => 'footer_news_title',
    'desc' => 'Title',
    'std' => 'Newsletter',
    'type' => 'text'
  );
  $options[] = array(
    'id' => 'footer_news_desc',
    'desc' => 'Description',
    'std' => 'Subscribe to our email newsletter for useful tips and valuable resources.',
    'type' => 'textarea'
  );
  $options[] = array(
    'id' => 'footer_news_sidebar',
    'desc' => 'Sidebar Name',
    'std' => 'newsletter',
    'type' => 'text'
  );
  //CONTACT US ZONE
  $options[] = array(
    'name' => 'Contact Section ',
    'type' => 'info'
  );
  $options[] = array(
    'desc' => 'Display on Footer, default true',
    'id' => 'show_4_footer',
    'std' => 1,
    'type' => 'checkbox'
  );
  $options[] = array(
    'id' => 'footer_cont_title',
    'desc' => 'Title',
    'std' => 'Contact Us',
    'type' => 'text',
  );
  $options[] = array(
    'id' => 'footer_cont_desc',
    'desc' => 'Description',
    'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit.',
    'type' => 'textarea',
  );
  $options[] = array(
    'id' => 'footer_cont_info_num',
    'desc' => 'Number of info',
    'std' => '3',
    'type' => 'text',
    'class' => 'mini',
  );
  if(of_get_option('footer_cont_info_num')?$cant=of_get_option('footer_cont_info_num'):$cant=3);
  for($i=1; $i<=$cant; $i++){
    foreach(font_awesome_icon('cont'.$i,'Contact Info '.$i) as $val){
      $options[] = $val;
    }
    $options[] = array(
      'id' => 'footer_cont_info_title'.$i,
      'desc' => 'Info Title',
      'type' => 'text'
    );
    $options[] = array(
      'id' => 'footer_cont_info_value'.$i,
      'desc' => 'Info Value',
      'type' => 'text'
    );
    $options[] = array(
      'id' => 'footer_cont_info_link'.$i,
      'desc' => 'Link Value',
      'type' => 'text'
    );
  }

	$options[] = array(
    'name' => '',
    'type' => 'info'
  );
  $options[] = array(
    'name' => 'Copyright',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'show_copyright',
    'desc' => 'Show copyright Section (Default True)',
    'std' => 1,
    'type' => 'checkbox'
  ); 
  $options[] = array(
    'id' => 'copyright_text',
    'desc' => 'Copyright description',
    'std' => '&copy; 2015 Mega Host. All rights reserved.',
    'type' => 'text'
  ); 
  $options[] = array(
    'id' => 'copyright_link',
    'desc' => 'Copyright URL',
    'type' => 'text'
  );
?>