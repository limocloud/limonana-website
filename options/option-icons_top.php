<?php
		global $google_faces;
		$options[] = array(
        'name' => 'Icons Top Section',
        'type' => 'heading',
    );
    $options[] = array(
        'name' => 'Icons Top',
        'type' => 'info'
    );
    $options[] = array(
        'id' => 'show_first',
        'desc' => 'Show header Section (Default True)',
        'std' => 1,
        'type' => 'checkbox',
    );
    $options[] = array(
        'id' => 'first_info_num',
        'desc' => 'Number Header Items',
        'std' => '4',
        'type' => 'text',
        'class' => 'mini',
    );
    if(of_get_option('first_info_num')?$cant=of_get_option('first_info_num'):$cant=4);
    for($i=1; $i<=$cant; $i++){
      foreach(font_awesome_icon('info'.$i,'Header Item '.$i) as $val){
          $options[] = $val;
      }
      $options[] = array(
          'id' => 'info_title'.$i,
          'desc' => 'Info Title',
          'type' => 'text'
      );
      $options[] = array(
          'id' => 'info_link'.$i,
          'desc' => 'Info Link',
          'type' => 'text'
      );
  }