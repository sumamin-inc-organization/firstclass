    <footer class="wrapper">
        <div class="footer_inner">
            <a href="<?= home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo"></a>
            <ul class="footer_memu">
                <li><a href="<?= home_url() ?>" class="nav_link footer_link">TOP</a></li>
                <li><a href="<?= get_permalink(get_page_by_path('about')) ?>" class="nav_link footer_link">会社概要</a></li>
                <li><a href="<?= get_post_type_archive_link('news') ?>" class="nav_link footer_link">お知らせ</a></li>
                <li class="nav_products footer_link">商品</li>
                <li><a href="<?= get_permalink(get_page_by_path('contact')) ?>" class="nav_link footer_link">お問い合わせ</a></li>
            </ul>
            <p class="copyright">Copyright&copy; 2024 FIRST CLASS INC., All Rights Reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>