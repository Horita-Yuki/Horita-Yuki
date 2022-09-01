<?php get_header(); ?>
<main id="news-page" class="single">
  <wrapper >
    <h2>お知らせ</h2>
    <div class="showmore">
        <div class="news-contents">
            <?php  //wordpressの基本的な出力
            $args = [
                'post_type' => 'post',
                'posts_per_page' => -1//投稿ページのデータを全件取得
        ];//投稿ページからデータを取得する
            $the_query = new WP_Query($args);
                if($the_query -> have_posts()): //データが存在するかチェック(お約束)
                    while($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
                        $the_query -> the_post(); //ループされたデータを1件分取得(お約束)
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="news-item">
                    <figure>
                        <h3><?php the_title();  //タイトルを出力する ?></h3>
                        <p class="align-r"><time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y年n月j日');  //投稿時間を出力する ?></time></p>
                        <?php the_post_thumbnail(); //サムネイルを出力?>  
                    </figure>
                    </div>
                </a>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
    <div id="contact-box">
      <p class="contact">お問い合わせ<br>ご予約はこちらから</p>
      <p class="contact tel"><i class="fa-solid fa-phone"></i>010-1234-5678</p>
    </div>
  </wrapper>
</main>
<?php get_footer();?>