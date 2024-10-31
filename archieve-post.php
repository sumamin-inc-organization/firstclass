<?php
/*
Template Name: お知らせ一覧
*/

get_header(); ?>

<main class="under_page_main">
    <section class="page">
        <div class="page_top wrapper">
            <div class="page_title">
                <span>お知らせ</span>
                <h2 class="fadeInRight">NEWS</h2>
            </div>
        </div>
            
        <div class="page_bottom wrapper">
            <div class="page_middle">
                <div class="column_content">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'      => 'post',     // ニュース投稿タイプ
                        'posts_per_page' => 10,          // 表示件数
                        'post_status'    => 'publish',  // 公開済みのみ
                        'orderby'        => 'date',     // 投稿日時で並び替え
                        'order'          => 'DESC',     // 新着順
                        'paged'          => $paged,     // 現在のページ数
                    );
                    $column_query = new WP_Query($args);

                    if ($column_query->have_posts()) :
                        while ($column_query->have_posts()) :
                            $column_query->the_post();
                            $terms = get_the_terms( get_the_ID(), 'column-cat' ); // 'column-cat' はカスタムタクソノミーの名前
                            $term_slugs = array();
                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    $term_slugs[] = $term->slug;
                                }
                            }
                    ?>
                    <a class="news_archive_item fadeInUp" href="<?php the_permalink(); ?>" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
                            <!-- 投稿日 -->
                            <span class="news_archive_date"><?php echo get_the_date('Y.m.d'); ?></span>
                            <!-- タイトル -->
                            <h3 class="news_archive_title for-pc"><?php the_title(); ?></h3>
                            <h3 class="news_archive_title for-tb"><?php the_title(); ?></h3>
                            <h3 class="news_archive_title for-sp"><?php echo wp_trim_words(get_the_title(), 10, '…'); ?></h3>
                            <h3 class="news_archive_title for-360"><?php echo wp_trim_words(get_the_title(), 9, '…'); ?></h3>
                    </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'ニュースが見つかりませんでした。';
                    endif;
                    ?>
                </div>
            </div>
            <div class="page_right"></div>
        </div>

        <div class="pagenation wrapper">
            <div class="pagenation_inner">
                <?php
                // ページネーションを表示
                echo '<div class="pagination_btn">';
                echo paginate_links(array(
                    'total'   => $column_query->max_num_pages,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                ));
                echo '</div>';
                ?>
                <script>
                    var prevLink = document.querySelector('a.prev');
                    if (prevLink) {
                        prevLink.innerHTML = '<div></div>';
                    }
                    var nextLink = document.querySelector('a.next');
                    if (nextLink) {
                        nextLink.innerHTML = '<div></div>';
                    }
                </script>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>