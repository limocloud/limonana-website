<?php
  $options[] = array(
        'name' => 'Domain Section',
        'type' => 'heading',
  );  
    $options[] = array(
        'name' => 'Domain Zone Configuration',
        'type' => 'info'
    );                  
        $options[] = array(
            'id' => 'dom_title',
            'desc' => 'Title Zone',
            'std' => 'Search a domain',
            'type' => 'text'
        );
        $options[] = array(
            'id' => 'dom_text',
            'desc' => 'Domain Text',
            'std' => 'Enter Your Domain',
            'type' => 'text'
        );
        $options[] = array(
            'id' => 'dom_num',
            'desc' => 'Number of Domains',
            'std' => '4',
            'type' => 'text',
            'class' => 'mini'
        );
        if(of_get_option('dom_num')?$cant=of_get_option('dom_num'):$cant=4);
        for($i=1; $i<=$cant; $i++){
            $options[] = array(
                'id' => 'dom_dom'.$i,
                'desc' => 'Domain Title',
                'std' => '.com',
                'type' => 'text'
            );    
        }
        $options[] = array(
            'name' => 'Button Configuration',
            'id' => 'dom_btn_title',
            'desc' => 'Button Title',
            'std' => 'Search',
            'type' => 'text',
        );
        $options[] = array(
            'id' => 'dom_btn_link',
            'desc' => 'Button Link',
            'std' => '#',
            'type' => 'text',
        );
        $pages = array();
        foreach(get_pages() as $titles){
            $tit = strtolower(str_replace(' ','_',$titles->post_name));
            $pages[$tit] = $titles->post_title;
        }
        $pages['index'] = 'Index';
        $pages['404'] = '404 page';
        $options[] = array(
            'name' => 'Show Domain Configuration in Pages:',
            'id' => 'dom_show',
            'options' => $pages,
            'type' => 'multicheck'
        );