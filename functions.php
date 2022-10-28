<?php

register_nav_menus(array(
    'page_menu' => 'サイト内ページ遷移のメニューです',
    'year_menu'  => '年代別投稿一覧ページに遷移するメニューです',
));
add_theme_support('title-tag');   //ブラウザのタイトルを取得表示
add_theme_support('post-thumbnails');   //投稿に対してアイキャッチ画像が入れられるようにする

function site_title($title)
{
    if (is_front_page() && is_home()) {
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) {
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'site_title');

function site_script()
{
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
    wp_enqueue_style('NotoSansJP', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap', array());
    wp_enqueue_style('Frederica', 'https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap', array());
    wp_enqueue_style('M+1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100;200;300;400;500;600;700;800;900&display=swap', array());
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array());
    wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/hamburger.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'site_script');


//カスタムメニューで出力したliからidとclassを削除する
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var)
{
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}


/**********************
OGP設定　参照：https://www.torat.jp/wordpress-setting-ogp/
 *********************/
function my_meta_ogp()
{
    if (is_front_page() || is_home() || is_singular()) {

        /*初期設定*/

        // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
        $ogp_image = './imgs/top-page-img.jpg';
        // Twitterのアカウント名 (@xxx)
        $twitter_site = '@WasshoiYuta';
        // Twitterカードの種類（summary_large_image または summary を指定）
        $twitter_card = 'summary_large_image';
        // Facebook APP ID
        $facebook_app_id = 'wasshoiyuta';

        /*初期設定 ここまで*/

        global $post;
        $ogp_title = 'わっしょいゆ〜た';
        $ogp_description = '';
        $ogp_url = 'https://www.wasshoiyuta.com/';
        $html = '';
        if (is_singular()) {
            // 記事＆固定ページ
            setup_postdata($post);
            $ogp_title = $post->post_title;
            $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif (is_front_page() || is_home()) {
            // トップページ
            $ogp_title = get_bloginfo('name');
            $ogp_description = get_bloginfo('description');
            $ogp_url = home_url();
        }

        // og:type
        $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

        // og:image
        if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $ogp_image = $ps_thumb[0];
        }

        // 出力するOGPタグをまとめる
        $html = "\n";
        $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
        $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
        $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
        $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
        $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
        $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
        $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
        $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
        $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

        if ($facebook_app_id != "") {
            $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
        }

        echo $html;
    }
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');
