<?php
		global $typography_mixed_fonts; 

		$options[] = array(
        'name' => 'General',
        'type' => 'heading',
      	'std'  => 'cogs'
    );
    $options[] = array(
        'name' => 'Logo Configuration Area',
        'type' => 'info'
    );
 	 $options[] = array(
    'id' => 'style_logo',
    'std' => '1',
    'options' => array(
      '1' => 'Text Logo',
      '2' => 'Image Logo'                     
    ),
    'type' => 'radio',
    'class' => 'side ft'
  );
  $options[] = array(
    'id' => 'text_logo',
    'desc' => 'Logo Text',
    'std' => 'Logo Text',
    'type' => 'text',
    'class' => 'ft1 fhide',
  );
  $options[] = array(
    'id' => 'img_logo',
    'desc' => 'Logo Image',
    'type' => 'upload',
    'class' => 'ft2 fhide',
  );
  $options[] = array(
    'id' => 'logo_image_width',
    'desc' => 'Logo Image Width',
    'std' => '230px',
    'type' => 'text',
    'class' => 'mini ft2 fhide'
  );
  $options[] = array(
    'id' => 'logo_image_height',
    'desc' => 'Logo Image Height',
    'std' => '30px',
    'type' => 'text',
    'class' => 'mini ft2 fhide'
  );
  $options[] = array(
    'id' => 'logo_top_position',
    'desc' => 'Logo Top Position',
    'std' => '10px',
    'type' => 'text',
    'class' => 'mini ft2 fhide'
  );
  $options[] = array(
    'id' => 'logo_left_position',
    'desc' => 'Logo Left Position',
    'std' => '0',
    'type' => 'text',
    'class' => 'mini ft2 fhide'
  );
  $options[] = array(
    'id' => 'type_logo',
    'std' => array( 'size' => '24px', 'face' => 'Open Sans', 'weight'=>'normal', 'color'=> ''),
    'options' => array(
      'faces' => $typography_mixed_fonts,
    ),
    'type' => 'typography',
    'class' => 'ft1 fhide',
  );
  $options[] = array(
    'id' => 'show_bg_logo',
    'desc' => 'Show Background Logo',
    'std' => 1,
    'type' => 'checkbox',
  );
  $options[] = array(
    'id' => 'width_bg_logo',
    'desc' => 'Width Background Logo',
    'std' => '90px',
    'type' => 'text',
    'class' => 'mini'
  );
  $options[] = array(
    'id' => 'url_logo',
    'desc' => 'Url Logo',
    'type' => 'text'
  );
  $options[] = array(
    'name' => '',
    'type' => 'info'
  );
  $options[] = array(
    'name' => 'Favico Logo',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'favicon',
    'desc' => 'Favicon',
    'type' => 'upload'
  );
	$options[] = array(
    'name' => 'Login Logo',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'login',
    'desc' => 'Logo Login',
    'type' => 'upload'
  ); 