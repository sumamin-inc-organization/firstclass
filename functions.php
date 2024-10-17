<?php
// 基本設定
function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

// CSS/JSファイルの読み込み
function load_assets() {
    // 共通CSS
    wp_enqueue_style( 'resetcss', get_template_directory_uri() . '/assets/css/reset.css', array(), filemtime( get_template_directory() . '/assets/css/reset.css' ) );
    wp_enqueue_style( 'stylecss', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );

    // 共通JS
    wp_enqueue_script('common-script', get_template_directory_uri() . '/assets/js/common.js', array(), null, true);

    // 各ページCSS/JS
    if ( is_front_page() ) { 
        wp_enqueue_style( 'top-css', get_template_directory_uri() . '/assets/css/page.top.css', array(), filemtime( get_template_directory() . '/assets/css/page.top.css' ) );
        // wp_enqueue_script('top-script', get_template_directory_uri() . '/assets/js/page.top.js', array(), null, true);
        // wp_enqueue_style( 'loading-css', get_template_directory_uri() . '/assets/css/loading.css', array(), filemtime( get_template_directory() . '/assets/css/loading.css' ) );
        // wp_enqueue_script('loading-script', get_template_directory_uri() . '/assets/js/loading.js', array(), null, true);
    }
    if ( is_page( 'about' ) ) {
        wp_enqueue_style( 'about-css', get_template_directory_uri() . '/assets/css/page.about.css', array(), filemtime( get_template_directory() . '/assets/css/page.about.css' ) );
    }
    if ( is_singular( 'works' ) || is_post_type_archive( 'works' ) || is_page( 'works_roofleak' ) || is_page( 'works_wall' ) || is_page( 'works_balcony' ) ) {
        wp_enqueue_style( 'works-css', get_template_directory_uri() . '/assets/css/page.works.css', array(), filemtime( get_template_directory() . '/assets/css/page.works.css' ) );
        // wp_enqueue_script('works-script', get_template_directory_uri() . '/assets/js/page.works.js', array(), null, true);
    }
    if ( is_page( 'contact' ) ) {
        wp_enqueue_style( 'contact-css', get_template_directory_uri() . '/assets/css/page.contact.css', array(), filemtime( get_template_directory() . '/assets/css/page.contact.css' ) );
        // wp_enqueue_script('contact-script', get_template_directory_uri() . '/assets/js/page.contact.js', array(), null, true);
    }

    // jQuery
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'load_assets' );