<?php
 global $typography_mixed_fonts;
  $options[] = array(
    'name' => 'Fonts',
    'type' => 'heading',
    'std' => 'eye-open'
  );  
  //TYPOGRAPHY STYLE
  $options[] = array(
    'name' => 'Optional Typography configuration',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'general_skin_color_ch',
    'desc' => 'Enable Typography configuration',
    'type' => 'checkbox'
  );
  //Body
  $options[] = array(
    'name' => 'Define Body Typography',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'general_color_body_ch',
    'desc' => 'Enable style color configuration',
    'type' => 'checkbox'
  );
  $options[] = array(
    'id' => 'general_color_body',
    'std' => 'Open Sans, sans-serif',
    "options" => $typography_mixed_fonts,
    'type' => 'select'
  );
	//paragraphs
  $options[] = array(
    'name' => 'Define Paragraph Typography',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'general_color_p_ch',
    'desc' => 'Enable style color configuration',
    'type' => 'checkbox'
  );
  $options[] = array(
    'id' => 'general_color_p',
    'std' => 'Open Sans, sans-serif',
    "options" => $typography_mixed_fonts,
    'type' => 'select'
  );
	//Headings
  $options[] = array(
    'name' => 'Define Headings Typography',
    'type' => 'info'
  );
  $options[] = array(
    'id' => 'general_color_headings_ch',
    'desc' => 'Enable style color configuration',
    'type' => 'checkbox'
  );
  $options[] = array(
    'id' => 'general_color_headings',
    'std' => 'Lora , serif',
    "options" => $typography_mixed_fonts,
    'type' => 'select'
  );  