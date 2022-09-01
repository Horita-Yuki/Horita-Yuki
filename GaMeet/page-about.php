<?php get_header(); ?>
<main id="page-about">
    <div id="wrapper">
        <?php  //wordpressの基本的な出力
            if(have_posts()): //データが存在するかチェック(お約束)
                while(have_posts()):  //データをループし、表示させる準備(お約束)
                    the_post(); //ループされたデータを1件分取得(お約束)
        ?>
            <h2><?php the_title();?></h2>
            <?php the_content(); //本文を取得して出力- ?>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>