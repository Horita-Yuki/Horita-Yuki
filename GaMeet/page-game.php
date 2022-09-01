<?php get_header(); ?>
<main id="page-game">
    <div id="wrapper">
        <h2>ゲーム一覧<h2>
        <div class="placement">
			<div class="infoTable">
                <?php  //wordpressの基本的な出力
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 9,//投稿ページのデータを全件取得
                    'category_name' => 'game-Introduction',//タグを参照して表示
                    'paged' => get_query_var('paged')
                ];//投稿ページからデータを取得する
                $the_query = new WP_Query($args);
                    if($the_query -> have_posts()): //データが存在するかチェック(お約束)
                        while($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
                            $the_query -> the_post(); //ループされたデータを1件分取得(お約束)
                ?>
                    <article class="gamethumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); //サムネイルを出力?>
                            <p><?php the_title();  //タイトルを出力する ?></p>
                        </a>
                    </article>
                <?php
                        endwhile;
                    endif;
                ?>
            </div><!--infoTableおしまい-->
            <!-- <a href="<?php echo esc_url(home_url('/')); ?>game#header" id="show-more-game">
				<div class="show-more2"><div class="end-arrow2"></div></div>
			</a>もっと見るボタン -->
        </div><!--placementおしまい-->
        <?php wp_pagenavi(array('query' => $the_query)); ?><!--ページ送りプラグインを設置-->
    </div><!--wrapperおしまい-->  	
</main>
<?php get_footer(); ?>