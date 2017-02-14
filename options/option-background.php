<?php
  $options[] = array(
        'name' => 'Skins And Layouts',
        'type' => 'heading',
  );  
    $options[] = array(
        'name' => 'Skins Colors',
        'type' => 'info'
    );
        $options[] = array(
            'id' => 'general_config',
            'desc' => 'Select you Color skin',
            'std' => 'blue',
            'options' => array(
                'green' => get_template_directory_uri().'/img/skins/green.jpg',
                'red' => get_template_directory_uri().'/img/skins/red.jpg',
                'blue' => get_template_directory_uri().'/img/skins/blue.jpg',
                'yellow' => get_template_directory_uri().'/img/skins/yellow.jpg',
                'orange' => get_template_directory_uri().'/img/skins/orange.jpg',
                'purple' => get_template_directory_uri().'/img/skins/purple.jpg',
                'pink' => get_template_directory_uri().'/img/skins/pink.jpg',
                'cocoa' => get_template_directory_uri().'/img/skins/cocoa.jpg'
            ),
            'type' => 'images',
        );
    $options[] = array(
        'name' => 'Skins Versions',
        'type' => 'info'
    );
        $options[] = array(
            'id' => 'general_style',
            'desc' => 'Select You Skin Version',
            'std' => 'style',
            'options' => array(
                'style' => 'Light',
                'style-dark' => 'Dark',
            ),
            'type' => 'select'
       );

//**********************Layout Options********************//

        $options[] = array(
            'name' => 'Layout Styles',
            'type' => 'info'
        );
            $backs = array(
                '0' => get_template_directory_uri().'/img/backs/bg0.png',
				'2' => get_template_directory_uri().'/img/backs/bg2.png',
				'3' => get_template_directory_uri().'/img/backs/bg3.png',
				'4' => get_template_directory_uri().'/img/backs/bg4.png',
				'5' => get_template_directory_uri().'/img/backs/bg5.png',
				'6' => get_template_directory_uri().'/img/backs/bg6.png',
				'7' => get_template_directory_uri().'/img/backs/bg7.png',
				'8' => get_template_directory_uri().'/img/backs/bg8.png',
				'9' => get_template_directory_uri().'/img/backs/bg9.png',
				'10' => get_template_directory_uri().'/img/backs/bg10.png',
				'11' => get_template_directory_uri().'/img/backs/bg11.png',
				'12' => get_template_directory_uri().'/img/backs/bg12.png',
				'13' => get_template_directory_uri().'/img/backs/bg12.png',
				'14' => get_template_directory_uri().'/img/backs/bg14.png',
				'15' => get_template_directory_uri().'/img/backs/bg15.png',
				'16' => get_template_directory_uri().'/img/backs/bg16.png',
				'17' => get_template_directory_uri().'/img/backs/bg17.png',
				'18' => get_template_directory_uri().'/img/backs/bg18.png',
				'19' => get_template_directory_uri().'/img/backs/bg19.png',
				'20' => get_template_directory_uri().'/img/backs/bg20.png',
				'21' => get_template_directory_uri().'/img/backs/bg21.png',
				'22' => get_template_directory_uri().'/img/backs/bg22.png',
				'23' => get_template_directory_uri().'/img/backs/bg23.png',
				'24' => get_template_directory_uri().'/img/backs/bg24.png',
				'25' => get_template_directory_uri().'/img/backs/bg25.png',
      );
      if(of_get_option('layout_bg_num')?$cant=of_get_option('layout_bg_num'):$cant=0);
      for($i=1; $i<=$cant; $i++){
        $backs[$i] = of_get_option('layout_bg_img'.$i);
      }
      $options[] = array(
        'id' => 'style_layout',
        'desc' => 'Select you Layout Style',
        'std' => '1',
        'options' => array(
          '1' => 'Layout Wide',
          '2' => 'Layout Boxed',
          '3' => 'Layout Boxed Margin',
        ),
        'type' => 'select',
        'class' => 'st'
      );
      $options[] = array(
        'id' => 'layout_style',
        'desc' => 'Layout Style Background',
        'std' => '1',
        'options' => array(
          '1' => 'Color',
          '2' => 'Image',
        ),
        'type' => 'radio',
        'class' => 'side ft st2 st3 shide'
      );
      $options[] = array(
        'id' => 'layout_bg_color',
        'desc' => 'Color Background (only Boxed And Boxed Margin Versions)',
        'type' => 'color',
        'class' => 'ft1 fhide shide',
      );
			$options[] = array(
        'id' => 'layout_bg',
        'desc' => 'Background (only Boxed And Boxed Margin Versions)',
        'std' => '0',
        'options' => $backs,
        'type' => 'images',
        'class' => 'ft2 fhide shide',
      );

			/*======== Style switcher Theme=============*/
      $options[] = array(
        'name' => '',
        'type' => 'info',
      );
      $options[] = array(
        'name' => 'style switcher Theme',
        'type' => 'info',
      );
      $options[] = array(
        'id' => 'show_style_switcher',
        'desc' => 'Show Configuration - style switcher',
        'std' => 1,
        'type' => 'checkbox',
      );
?>