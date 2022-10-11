<?php

    register_nav_menus(array(
        'page_menu' => 'サイト内ページ遷移のメニューです',
    ) );
    add_theme_support( 'title-tag' );   //ブラウザのタイトルを取得表示
    add_theme_support('post-thumbnails');   //投稿に対してアイキャッチ画像が入れられるようにする

    function site_title( $title ){
        if( is_front_page() && is_home()) {
            $title = get_bloginfo('name','display');
        } elseif( is_singular()){
            $title = single_post_title('', false );
        }
        return $title;
    }
    add_filter('pre_get_document_title', 'site_title');
    
    function site_script(){
        wp_enqueue_style('ress','https://unpkg.com/ress/dist/ress.min.css',array(), 'all');
        wp_enqueue_style('style',get_template_directory_uri(). '/css/style.css',array('ress'), false, 'all' );
        wp_enqueue_style('NotoSansJP','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap',array() );
        wp_enqueue_style('Frederica','https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap',array() );
        wp_enqueue_style('M+1','https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100;200;300;400;500;600;700;800;900&display=swap',array() );
        wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery-3.6.0.min.js',array());
        wp_enqueue_script('hamburger',get_template_directory_uri(). '/js/hamburger.js',array(), false, true);
    }
    add_action('wp_enqueue_scripts','site_script');


    //カスタムメニューで出力したliからidとclassを削除する
    add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
    add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
    add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
    function my_css_attributes_filter($var) {
        return is_array($var) ? array_intersect($var, array( 'current-menu-item' )) : '';
    }
    