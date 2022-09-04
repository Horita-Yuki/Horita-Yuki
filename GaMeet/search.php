<?php get_header(); ?>
    <main id="search-result">
        <div id="wrapper">
            <div id="search-result-box">
                <?php if (get_search_query() !== '') { //検索キーワードがあったらそれを表示する?>
                    <h3>検索キーワード : 「<?php the_search_query(); ?>」</h3>
                <?php } ?>
                <?php 
                    $s = $_GET['s'];//検索キーワードの値を取得し代入
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;//ページ送りに必要
                    if(isset($_GET['check01'])){//チェックボックスの設定（タグで絞り込み）
                        $taxquerysp[] = array(
                            'taxonomy' => 'post_tag',//タグを取得
                            'terms' => $_GET['check01'],//タグはチェックボックスで判断
                            'operator' => 'IN',//OR検索にする
                            'include_children' => false
                        );
                        } else {
                        $taxquerysp[] = '';
                    }
                    $search_args = array(//検索ボックスの設定
                        's' => $s,
                        'tax_query' => $taxquerysp,
                        'post_type' => 'post',//投稿のデータのみ取得
                        'posts_per_page' => 9,//1ページに9件データを表示
                        'category_name' => 'game-Introduction,game-News,infomation-News',//カテゴリーでフィルターをかける（ゲーム紹介、アップデート情報、ニュース記事）
                        'paged' => $paged//今何ページ目なのか
                    );
                    $the_query = new WP_Query($search_args);  
                ?>   
                <h3>検索結果：全 <?php print $the_query -> found_posts.' 件';//検索結果の件数を取得して表示 ?></h3>
                <?php if ( $the_query -> found_posts ) { //もし検索結果があるなら?>
                    <div id="search-result-thumb">
                        <?php 
                            while ($the_query -> have_posts()) : 
                                $the_query -> the_post(); ?>
                                <article class="gamethumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); //サムネイルを出力?>
                                        <p>
                                            <?php if (mb_strlen ($post -> post_title) > 30) {
                                            $title = mb_substr ($post -> post_title, 0, 30) ;
                                                print $title . '...';
                                            } else {
                                                print $post -> post_title;
                                            }  //タイトルを文字数制限付きで出力する 
                                            ?>
								        </p>
                                    </a>
                                </article>
                        <?php 
                            endwhile; 
                        ?>
                            <h2><?php wp_pagenavi(array('query' => $the_query)); //ページ送りプラグインを設置?></h2>
                            <?php wp_reset_postdata(); ?>
                <?php } else { //検索結果がなかったら?>
                    <h3>検索キーワードに該当する記事がありませんでした。</h3>
                <?php } ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>