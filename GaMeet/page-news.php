<?php get_header(); ?>
<main id="page-news">
    <div id="wrapper">
        <h2>更新情報一覧<h2>
        <div id="news-list">
        <?php  //wordpressの基本的な出力
        $args = [
            'post_type' => 'post',
            'posts_per_page' => -1,//投稿ページのデータを全件取得(-1)
            'category_name' => 'game-news,infomation-news',//タグを参照して表示
            'paged' => get_query_var('paged'),
        ];//投稿ページからデータを取得する
        $the_query = new WP_Query($args);
            if ($the_query -> have_posts()): //データが存在するかチェック(お約束)
                while ($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
                    $the_query -> the_post(); //ループされたデータを1件分取得(お約束)
        ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <p>
                        <time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y/m/d');  //投稿時間を出力する ?></time>
                        <?php
                        $cat = get_the_category();//カテゴリーを取得して$catに代入
                        $cat = $cat[1];//取得したカテゴリー（複数あるので配列）の2番目を今回は使う(geme-news,infomation-newsのどちらか)
                        $cat_name = $cat -> category_nicename;//取得したカテゴリーのスラッグ名を$cat_nameに代入する。(category_nicenameを変更すると色々取り出せる)
                        $title = get_the_title();//下の処理で$titleを書き換えるのでループ毎に自分のタイトルを入れ直す
                            if ($cat_name === 'game-news'){//もし記事のカテゴリがgame-newsだったら
                                $title = get_the_title(); 
                                $content = get_the_content(); 
                                $title = strip_tags($title); //タイトルのhtmlタグ等をなくす(今回はh1タグを消している)
                                $content = strip_tags($content,'<p>');//コンテンツのhtmlタグを無くす(今回はpタグを残してh2タグを消している。本文main-textはcssで非表示に)
                                $title = "【{$title}】{$content}";//game-newsの場合は【題名】小題〜で表示
                            }
                            if (mb_strlen ($title) > 60) {//タイトルを文字数制限付きで出力する
                                $title = mb_substr ($title, 0, 60) ; 
                                print $title . '...';
                            } else if ($cat_name === 'infomation-news') {
                                print $title;
                            }  
                        ?>
                    </p>
                </a>
            </li>
        <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>