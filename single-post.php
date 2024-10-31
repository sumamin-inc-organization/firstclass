<?php get_header();?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.news.css" type="text/css">

<main>
    <div class="news_single wrapper">
        <div class="news_single_inner">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <!-- 投稿日 -->
            <p class="news_single_date">
                <time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('Y/m/d'); ?>
                </time>
            </p>
            <!-- タイトル -->
            <h2 class="news_single_title"><?php the_title(); ?></h2>
            <div class="news_single_content">
                <!-- アイキャッチ -->
                <!-- <div class="news_single_thumb">
                    <img src="<?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>">
                </div> -->
                <?php
                if (has_post_thumbnail()) {
                    echo '<div class="news_single_thumb">';
                    the_post_thumbnail('full');
                    echo '</div>';
                }
                ?>
                <!-- 本文(全文) -->
                <div class="news_single_text">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>

            <div class="news_single_pagenation">
                <a class="gotoarchive" href="<?= get_permalink(get_page_by_path('news')) ?>">お知らせ一覧に戻る</a>
            </div>
            <?php the_post_navigation( array(
                'prev_text' => '前の記事',
                'next_text' => '次の記事'
                ) );
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>