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
            <picture class="keyvisual_img"><source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual_sp.jpg" alt="" media="(max-width:767px)"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/keyvisual.jpg" alt=""></picture>
        </div>
        <!-- <div class="scrolldown">
                <span>scroll</span>
        </div> -->
    </section>

    <section class="about wrapper">
        <div class="about_inner">
            <div class="about_left">
                <div class="sec_title">
                    <h2>ABOUT US</h2>
                    <span>私たちについて</span>
                </div>
                <p>株式会社ファーストクラスは、<br>
                美容クリニック様や動物病院様、またその先の<br>
                お客様が安心して使っていただける製品をご提供致します。<br>
                <br>
                そして、更なる品質向上の為に企業努力を惜しまず、<br>
                価値向上に向けて品質を追い続けることをお約束致します。</p>
                <a href="<?= get_permalink(get_page_by_path('about')) ?>" class="about_link">会社概要</a>
            </div>
            <img class="about_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/about_ripple.jpg" alt="">
        </div>
    </section>
</main>
<?php get_footer(); ?>