
<?php get_header(); ?>
<main>
  <wrapper>
    <div id="overview">
      <section id="consept">
        <div class="ft">
          <h2>飲み放題付きコース 2,500円～</h2>
          <p>当店自慢の地鶏の炭火焼きを楽しめるコースや、<br>
            鍋or焼き物を選べるコースなど、<br class="br-sp">様々なコースを取り揃えております。</p>
        </div>
        <div class="ft">
          <h2>豊富なドリンクをご用意</h2>
          <p>平日は500円で120分飲み放題！<br class="br-sp">
           仕事帰りにお気軽にお立ち寄りください。<br>
           宮崎の珍しい日本酒や銘柄焼酎も豊富に取り揃えております。<br>
            是非ご賞味ください。</p>
        </div>
        <div class="ft">
          <h2>落ち付いた雰囲気の店内で<br class="br-sp">ゆっくりとした時間を</h2>
          <p>店内にはカウンター席とお座敷席をご用意しております。<br>
            ご家族でのご利用はもちろん、<br>
            お一人様からでもお気軽にお越しください。</p>
        </div>
      </section>
    </div>
    <section class="introduction-box" id="introduction1">
      <div class="introduction-text fl">
        <h2>コース料理2,500円～</h2>
        <p>鍋有と鍋無しをご選択いただけます。<br>
          「みやざき地鶏の水炊き」はあっさりとしていながら、<br>
          鶏のうまみがギュッと凝縮したコクのある味が楽しめます。<br>
          しょうゆ、みそ、しお味の三種類から選べる<br>
          もつ鍋も人気です。</p>
      </div>
      <div class="introduction-img">
        <img src=<?php print get_theme_file_uri("images/mizutaki.png"); ?> class="fr" alt="地鶏の水炊きの画像"></div>
    </section>
    <section class="introduction-box" id="introduction2">
      <div class="introduction-img">
        <img src=<?php print get_theme_file_uri("images/jidori.png"); ?> class="fl" alt="地鶏の炭火焼きの画像"></div>
      <div class="introduction-text fr">
        <h2>豊富な一品料理</h2>
        <p>鶏よし名物の地鶏の炭火焼きは、<br>
          炭火の香ばしい香りと<br>
          地鶏のしっかりとした旨味が楽しめます。<br>
          同じ鶏を使用した鶏のたたきも人気の一品です。<br>
          たっぷりの玉ねぎスライスと一緒にどうぞ。</p>
      </div>
    </section>
    <section class="introduction-box" id="introduction3">
      <div class="introduction-text fl">
        <h2>お飲み物</h2>
        <p>平日は500円で120分飲み放題！<br>
          仕事帰りにぜひご利用ください。<br>
          宮崎が誇る銘柄焼酎や珍しい日本酒も<br>
          取り揃えております。</p>
      </div>
      <div class="introduction-img">
        <img src=<?php print get_theme_file_uri("images/sake.png"); ?> class="fr" alt="日本酒の画像"></div>
    </section>
    <section class="introduction-box" id="introduction4">
      <div class="introduction-img fl">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3241.0855156826856!2d139.74271665091513!3d35.674896287829455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5Zu95Lya6K2w5LqL5aCC!5e0!3m2!1sja!2sjp!4v1656250603356!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="introduction-text fr">
        <h2>お店へのアクセス</h2>
        <p>川富駅東口から出て<br>
        南大通りの方向へ五分ほど歩くと到着します。</p>
        <div id="contact-box-index">
          <p class="contact">お問い合わせ<br>ご予約はこちらから</p>
          <p class="contact tel"><i class="fa-solid fa-phone"></i>010-1234-5678</p>
        </div>
      </div>
    </section>
    <h2>お知らせ</h2>
    <section id="news"> 

      <?php  //wordpressの基本的な出力
      query_posts('posts_per_page=3');
      if(have_posts()): //データが存在するかチェック(お約束)
        while(have_posts()):  //データをループし、表示させる準備(お約束)
          the_post(); //ループされたデータを1件分取得(お約束)
          ?>
          <a href="<?php the_permalink(); ?>">
            <div class="news-item">
              <figure>
                <?php the_post_thumbnail(); //サムネイルを出力?>  
                <p class="align-r"><time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y年n月j日');  //投稿時間を出力する ?></time></p>
                <h3><?php the_title();  //タイトルを出力する ?></h3>
              </figure>
            </div>
          </a>
        <?php
        endwhile;
      endif;
      ?> 
    </section>
  </wrapper>
</main>
<?php get_footer(); ?>

