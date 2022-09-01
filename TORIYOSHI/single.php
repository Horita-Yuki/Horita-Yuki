<?php get_header(); ?>
<main class="single-page">
    <?php  //wordpressの基本的な出力
        if(have_posts()): //データが存在するかチェック(お約束)
            while(have_posts()):  //データをループし、表示させる準備(お約束)
                the_post(); //ループされたデータを1件分取得(お約束)
    ?>
    <div class="single-content">
        <h2><?php the_title();?></h2>
        <time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y年n月j日'); ?></time>
    </div>    
    <?php the_content(); //本文を取得して出力- ?>
    <?php
            endwhile;
        endif;
    ?>
</main>
<?php get_footer(); ?>