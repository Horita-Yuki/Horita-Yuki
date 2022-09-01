<?php get_header(); ?>
    <main id="search-result">
        <div id="wrapper">
            <div id="search-result-box">
                <h3>検索キーワード : 「<?php the_search_query(); ?>」</h3>
                <?php 
                $s = $_GET['s'];       
                if(isset($_GET['check01'])){
                    $taxquerysp[] = array(
                        'taxonomy' => 'post_tag',
                        'terms' => $_GET['check01'],
                        'operator' => 'IN',
                        'include_children' => false,
                    );
                    } else {
                    $taxquerysp[] = '';
                }
                $search_args = array(
                    's' => $s,
                    'tax_query' => $taxquerysp,
                    'post_type' => 'post',
                    'posts_per_page' => -1,//投稿ページのデータを全件取得
                    'category_name' => 'game-Introduction,game-News,infomation-News',//タグを参照して表示
                );
                $the_query = new WP_Query($search_args); ?>
                <h3>検索結果：全 <?php echo $the_query->found_posts.' 件'; ?></h3>
                <?php /* Start the Loop */ ?>
                <?php if ( $the_query -> found_posts ) { ?>
                <div id="search-result-thumb">
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <article class="gamethumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); //サムネイルを出力?>
                                <p><?php the_title();  //タイトルを出力する ?></p>
                            </a>
                        </article>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php } else { ?>
                        <h3>検索キーワードに該当する記事がありませんでした。</h3>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>