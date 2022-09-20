<?php get_header(); ?>
	<main id="single-page">
        <div id="wrapper">
            <?php  //wordpressの基本的な出力
                if(have_posts()): //データが存在するかチェック(お約束)
                    while(have_posts()):  //データをループし、表示させる準備(お約束)
                        the_post(); //ループされたデータを1件分取得(お約束)
            ?>
            <div id="title-box">
                <h1><?php the_title();?></h1>
                <?php the_post_thumbnail(); //サムネイルを出力?>
            </div>
            <div id="single-contents-box">
                <?php 
                $contents = get_the_content(); //本文を取得して出力 
                the_content();
                ?>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
	</main>
<?php get_footer(); ?>