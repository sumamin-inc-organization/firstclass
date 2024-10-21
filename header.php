<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Firstclass</title>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js" defer></script>
        <?php wp_head(); ?>
    </head>

<body>
    <header>
        <h1 class="header_logo"><a href="<?= home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo"></a></h1>
        <div class="header_right">
            <ul class="nav_pc">
                <li><a href="<?= home_url() ?>" class="nav_link">TOP</a></li>
                <li><a href="<?= get_permalink(get_page_by_path('about')) ?>" class="nav_link">会社概要</a></li>
                <li><a href="<?= get_post_type_archive_link('news') ?>" class="nav_link">お知らせ</a></li>
                <li class="nav_products">商品</li>
            </ul>
            <a class="nav_contact" href="<?= get_permalink(get_page_by_path('contact')) ?>">お問い合わせ</a>
        </div>
    </header>