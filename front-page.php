<?php get_header();?>

<main>
    <section class="keyvisual wrapper">
        <div class="kv_inner">
            <div class="kv_title">
                <span class="title_fcq">First Class Quality</span>
                <h2>
                    <span>ファーストクラスの</span>
                    <span>品質を。</span>
                </h2>
            </div>
            <div class="scrolldown for-sp">
                <div class="scrolldown_inner fadeIn-delay"><span>scroll</span></div>
            </div>
            <div class="kv_right">
                <picture class="keyvisual_img fadeIn-delay"><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual_sp.jpg" alt="" media="(max-width:767px)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual.jpg" alt=""></picture>
                <div class="kv_btn for-sp fadeIn-delay"><a href="<?= get_permalink(get_page_by_path('contact')) ?>">お問い合わせは<br>こちら</a></div>
            </div>
        </div>
        <div class="scrolldown for-pc">
            <div class="scrolldown_inner"><span>scroll</span></div>
        </div>
        <div class="scrolldown for-tb">
            <div class="scrolldown_inner"><span>scroll</span></div>
        </div>
    </section>

    <section class="about wrapper">
        <div class="about_inner">
            <div class="about_left">
                <div class="sec_title">
                    <h2 class="fadeInRight">ABOUT US</h2>
                    <span>私たちについて</span>
                </div>
                <div class="about_text">
                    <p>株式会社ファーストクラスは、<br>
                    美容クリニック様や動物病院様、<br class="for-sp">またその先の<br class="for-pc">お客様が<br class="for-sp">安心して使っていただける製品を<br class="for-sp">ご提供致します。</p>
                    <p>そして、更なる品質向上の為に<br class="for-sp">企業努力を惜しまず、<br>
                    価値向上に向けて品質を追い続けることを<br class="for-sp">お約束致します。</p>
                </div>
                <a href="<?= get_permalink(get_page_by_path('about')) ?>" class="about_link">会社概要</a>
            </div>
            <img class="about_img fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ripple.jpg" alt="">
        </div>
    </section>

    <section class="service">
        <div class="service_deco wrapper">
            <div class="service_inner">
                <div class="sec_title">
                    <span>サービス</span>
                    <h2 class="fadeInRight">SERVICE</h2>
                </div>
                <div class="service_flex">
                    <div class="service_flex_item">
                        <span class="number">01</span>
                        <h3>ヒト臍帯由来間葉系幹細胞<br>培養上清液<span class="no">の</span>製造・販売</h3>
                        <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed_sp.svg" alt="" media="(max-width:767px)"><img class="service_line" src="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed.svg" alt=""></picture>
                        <div class="service_contents fadeInUp">
                            <p>美容クリニック様</p>
                            <img class="service_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_img_01.webp" alt="">
                        </div>
                    </div>
                    <div class="service_flex_item">
                        <span class="number">02</span>
                        <h3>犬由来間葉系幹細胞<br>培養上清液<span class="no">の</span>製造・販売</h3>
                        <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed_sp.svg" alt="" media="(max-width:767px)"><img class="service_line" src="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed.svg" alt=""></picture>
                        <div class="service_contents fadeInUp-delay">
                            <p>動物病院様</p>
                            <img class="service_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_img_02.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature wrapper">
        <div class="feature_left"></div>
        <div class="feature_inner">
            <div class="sec_title">
                <span>強み</span>
                <h2 class="fadeInRight">FEATURE</h2>
                <div class="subtitle">
                    <div class="line"></div>
                    <p>すべては安全と品質のために</p>
                    <div class="line"></div>
                </div>
            </div>

            <img class="feature_img_01 fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature_img_01.jpg" alt="">
            
            <div class="feature_flex">
                <ul>
                    <li><span class="number">01</span>
                    <span class="feature_item"><span class="navy">最高級の素材・材料</span>を使用した<br class="for-tb"><br class="for-sp">最高品質の製品</span></li>
                    <li><span class="number">02</span>
                    <span class="feature_item">炎症性サイトカイン量まで測定した<br class="for-tb"><br class="for-sp">厳格な<span class="navy">安全性試験を実施</span></span></li>
                    <li><span class="number">03</span>
                    <span class="feature_item">細胞は、最も若く活性の高い<br class="for-tb"><br class="for-sp"><span class="navy">４継代目までの臍帯由来幹細胞を使用</span></span></li>
                    <li><span class="number">04</span>
                    <span class="feature_item">ファーストクラス品質にもかかわらず、<br class="for-tb"><br class="for-sp"><span class="navy">安価でのご提供が可能</span></span></li>
                </ul>
                <img class="feature_img_02 fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature_img_02.jpg" alt="">
            </div>
        </div>
        <div class="feature_right"></div>
    </section>

    <section class="customer wrapper">
        <div class="customer_inner">
            <h2>主要取引先</h2>
            <div class="costomer_logo">
                <img class="gmobeauty" src="<?php echo get_template_directory_uri(); ?>/assets/images/gmobeauty.png" alt="GMOビューティー株式会社">
                <div class="bottom">
                    <img class="wizclinic" src="<?php echo get_template_directory_uri(); ?>/assets/images/wizclinic.png" alt="WiZ CLINIC">
                    <!-- <img class="wizclinic" src="<?php echo get_template_directory_uri(); ?>/assets/images/wizclinic.png" alt="WiZ CLINIC"> -->
                </div>
            </div>
        </div>
    </section>

    <section class="news wrapper">
        <div class="news_inner">
            <div class="sec_title">
                <h2 class="fadeInRight">NEWS</h2>
                <span>お知らせ</span>
            </div>
            <!-- 投稿一覧 -->
            <div class="news_list">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'      => 'post',     // ニュース投稿タイプ
                        'posts_per_page' => 4,          // 表示件数
                        'post_status'    => 'publish',  // 公開済みのみ
                        'orderby'        => 'date',     // 投稿日時で並び替え
                        'order'          => 'DESC',     // 新着順
                        'paged'          => $paged,     // 現在のページ数
                    );
                    $column_query = new WP_Query($args);

                    if ($column_query->have_posts()) :
                        while ($column_query->have_posts()) :
                            $column_query->the_post();
                            $terms = get_the_terms( get_the_ID(), 'post' ); // 'post' はカスタムタクソノミーの名前
                            $term_slugs = array();
                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    $term_slugs[] = $term->slug;
                                }
                            }
                    ?>
                    <a class="news_item fadeInUp" href="<?php the_permalink(); ?>" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
                        <!-- 投稿日 -->
                        <span class="news_date"><?php echo get_the_date('Y/m/d'); ?></span>
                        <!-- タイトル -->
                        <h3 class="news_title for-1024"><?php the_title(); ?></h3>
                        <h3 class="news_title for-390"><?php echo wp_trim_words(get_the_title(), 15, '…'); ?></h3>
                        <h3 class="news_title for-375"><?php echo wp_trim_words(get_the_title(), 14, '…'); ?></h3>
                        <h3 class="news_title for-360"><?php echo wp_trim_words(get_the_title(), 13, '…'); ?></h3>
                    </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'ニュースが見つかりませんでした。';
                    endif;
                    ?>
                <a class="btn_news" href="<?= get_permalink(get_page_by_path('news')) ?>">お知らせ</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>