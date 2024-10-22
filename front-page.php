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
                <div class="scrolldown_inner"><span>scroll</span></div>
            </div>
            <div class="kv_right">
                <picture class="keyvisual_img"><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual_sp.jpg" alt="" media="(max-width:767px)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual.jpg" alt=""></picture>
            </div>
        </div>
        <div class="scrolldown for-pc">
            <div class="scrolldown_inner"><span>scroll</span></div>
        </div>
    </section>

    <section class="about wrapper">
        <div class="about_inner">
            <div class="about_left">
                <div class="sec_title">
                    <h2>ABOUT US</h2>
                    <span>私たちについて</span>
                </div>
                <p>株式会社ファーストクラスは、<br>
                美容クリニック様や動物病院様、<br class="for-sp">またその先の<br class="for-pc">お客様が<br class="for-sp">安心して使っていただける製品を<br class="for-sp">ご提供致します。<br>
                <br>
                そして、更なる品質向上の為に<br class="for-sp">企業努力を惜しまず、<br>
                価値向上に向けて品質を追い続けることを<br class="for-sp">お約束致します。</p>
                <a href="<?= get_permalink(get_page_by_path('about')) ?>" class="about_link">会社概要</a>
            </div>
            <img class="about_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ripple.jpg" alt="">
        </div>
    </section>

    <section class="service wrapper">
        <div class="service_inner">
            <div class="sec_title">
                <span>サービス</span>
                <h2>SERVICE</h2>
            </div>
            <div class="service_flex">
                <div class="service_flex_item">
                    <span class="number">01</span>
                    <h3>ヒト臍帯由来間葉系幹細胞<br>培養上清液<span class="no">の</span>製造・販売</h3>
                    <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed_sp.svg" alt="" media="(max-width:767px)"><img class="service_line" src="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed.svg" alt=""></picture>
                    <p>美容クリニック様</p>
                    <img class="service_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_img_01.png" alt="">
                </div>
                <div class="service_flex_item">
                    <span class="number">02</span>
                    <h3>犬由来間葉系幹細胞<br>培養上清液<span class="no">の</span>製造・販売</h3>
                    <picture><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed_sp.svg" alt="" media="(max-width:767px)"><img class="service_line" src="<?php echo get_template_directory_uri(); ?>/assets/images/line_dashed.svg" alt=""></picture>
                    <p>動物病院様</p>
                    <img class="service_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service_img_02.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="feature wrapper">
        <div class="feature_inner">
            <div class="sec_title">
                <span>強み</span>
                <h2>FEATURE</h2>
                <div class="subtitle">
                    <div class="line"></div>
                    <p>すべては安全と品質のために</p>
                    <div class="line"></div>
                </div>
            </div> 

            <img class="feature_img_01" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature_img_01.jpg" alt="">
            
            <div class="feature_flex">
                <ul>
                    <li><span class="number">01</span>
                    <span class="feature_item"><span class="navy">最高級の素材・材料</span>を使用した<br class="for-tb for-sp">最高品質の製品</span></li>
                    <li><span class="number">02</span>
                    <span class="feature_item">炎症性サイトカイン量まで測定した<br class="for-tb for-sp">厳格な<span class="navy">安全性試験を実施</span></span></li>
                    <li><span class="number">03</span>
                    <span class="feature_item">細胞は、最も若く活性の高い<br class="for-tb for-sp"><span class="navy">４継代目までの臍帯由来幹細胞を使用</span></span></li>
                    <li><span class="number">04</span>
                    <span class="feature_item">ファーストクラス品質にもかかわらず、<br class="for-tb for-sp"><span class="navy">安価でのご提供が可能</span></span></li>
                </ul>
                <img class="feature_img_02" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature_img_02.jpg" alt="">
            </div>
        </div>
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
                <h2>NEWS</h2>
                <span>お知らせ</span>
            </div>
            <?php get_template_part('template-parts/article', 'page'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>