<?php
    $options[] = array(
        'name' => 'Support Top Bar',
        'type' => 'heading',
        'std'  => 'cogs'
    );
    $options[] = array(
        'id' => 'show_support',
        'desc' => 'Show Style Configuration',
        'std' => 1,
        'type' => 'checkbox',
    );
    $options[] = array(
        'id' => 'btn_open_title',
        'desc' => 'Button Open Title',
        'std' => 'Support',
        'type' => 'text',
    );
    $options[] = array(
        'id' => 'btn_close_title',
        'desc' => 'Button Close Title',
        'std' => 'Close Support',
        'type' => 'text',
    );
		// Form Support Zone
	  $options[] = array(
      'name' => 'Form Configuration Zone',
      'type' => 'info'
    );
    $options[] = array(
      'id' => 'show_form',
      'desc' => 'Show Style Configuration',
      'std' => 1,
      'type' => 'checkbox',
    );
    $options[] = array(
      'id' => 'form_title',
      'desc' => 'Form Title',
      'std' => 'Client Login',
      'type' => 'text',
    );
    $options[] = array(
      'id' => 'form_mail',
      'desc' => 'Mail Title',
      'std' => 'Your Mail',
      'type' => 'text',
    );
    $options[] = array(
      'id' => 'form_pass',
      'desc' => 'Your Password',
      'std' => 'Client Login',
      'type' => 'text',
    );
    $options[] = array(
      'id' => 'form_btn',
      'desc' => 'Button Title',
      'std' => 'Sign in',
      'type' => 'text',
    );
    $options[] = array(
      'id' => 'form_btn_link',
      'desc' => 'Button Link',
      'std' => '#',
      'type' => 'text',
    );
		//Info Support Zone
    $options[] = array(
      'name' => 'Contact Configuration Zone',
      'type' => 'info'
    );
    $options[] = array(
      'id' => 'show_cont',
      'desc' => 'Show Style Configuration',
      'std' => 1,
      'type' => 'checkbox',
    );
    $options[] = array(
      'id' => 'cont_title',
      'desc' => 'Title',
      'std' => 'Contact Us',
      'type' => 'text',
    );
    $options[] = array(
      'id' => 'cont_info_num',
      'desc' => 'Number of info',
      'std' => '3',
      'type' => 'text',
      'class' => 'mini',
    );
    if(of_get_option('cont_info_num')?$cant=of_get_option('cont_info_num'):$cant=3);
    for($i=1; $i<=$cant; $i++){
      $options[] = array(
        'name' => 'Info '.$i,
        'id' => 'cont_info_title'.$i,
        'desc' => 'Info Title',
        'type' => 'text'
      );
      $options[] = array(
        'id' => 'cont_info_value'.$i,
        'desc' => 'Info Value',
        'type' => 'text'
      );
	}