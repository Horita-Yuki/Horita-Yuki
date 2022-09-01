
			<?php get_header(); ?>
			<main id="index">
				<!---キービジュアル--->
				<div id="keyvisual">
					<div id="slide-box">
					<div id="square"><div id="insquare"></div></div>
					<?php  //wordpressの基本的な出力
						$args = [//ループ出力のための設定
							'post_type' => 'post',
							'posts_per_page' => 8,//投稿ページのデータを指定した件数取得
							'category_name' => 'game-Introduction,game-News'
						];//投稿ページからデータを取得する
						$num = 0;
						$the_query = new WP_Query($args);
							if($the_query -> have_posts()): //データが存在するかチェック(お約束)
								while($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
									$the_query -> the_post(); //ループされたデータを1件分取得(お約束)
									
					?>
						<?php $title = get_the_title(); $content = get_the_content(); $title =strip_tags($title); $content = strip_tags($content,'<p><br>');?>
						<div class="<?php print "slide-img "."slide_img".$num ?>">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); //サムネイルを出力 ?>
								<p><?php print "【{$title}】  {$content}" ?></p>
							</a>
						</div>
					<?php
									$num += 1;
								endwhile;
							endif;
					?>
					<button id="prev-button"></button>
					<button id="next-button"></button>
					</div>						<!--slide-boxここまで-->
				</div>							<!---キービジュアルここまで--->
				<div class="info">
					<div id="search">		<!--検索フォーム-->
						<?php get_search_form(); ?>
					</div>						<!--検索フォーム終わり-->
					<div class="placement">
						<div class="infoTable">
							<?php  //wordpressの基本的な出力
								$args = [
									'post_type' => 'post',
									'orderby' => 'rand',// ランダムで表示
									'posts_per_page' => 9,//投稿ページのデータを全件取得
									'category_name' => 'game-Introduction',//タグを参照して表示
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
						</div>
					</div>
					<a href="<?php print esc_url(home_url('/')); ?>game#header" id="show-more-game">
						<div class="show-more2"><div class="end-arrow2"></div></div>
					</a><!--もっと見るボタン-->
				</div><!--infoここまで-->
				<div id="release-date">
					<h2>ゲームソフト(発売日順)</h2>
					<ul class="slider2">
						<?php  //wordpressの基本的な出力
							$args = [//ループ出力のための設定
								'post_type' => 'post',
								'posts_per_page' => 11,//投稿ページのデータを全件取得
								'category_name' => 'game-Introduction'
						];//投稿ページからデータを取得する
						$the_query = new WP_Query($args);
							if($the_query -> have_posts()): //データが存在するかチェック(お約束)
								while($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
									$the_query -> the_post(); //ループされたデータを1件分取得(お約束)
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<p><time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y/n/j');  //投稿時間を出力する ?></time></p>
								<?php the_post_thumbnail(); //サムネイルを出力?>
								<p><?php the_title();  //タイトルを出力する ?></p>
							</a>
						</li>
						<?php
								endwhile;
							endif;
						?>
						<div class="show-more">
							<a href="<?php print esc_url(home_url('/')); ?>game#header" id="show-more-game">
							<div class="end-arrow"></div>
							<p>もっと見る</p>
							</a>
						</div>
					</ul>
					<div id="slidebar-box">
						<input id="slidebar" type="range" name="release-date" min="0" max="75" step="1" value="0"> 
					</div>
				</div><!--release-dateここまで-->
				<div id="news">
					<h2>News</h2>
					<ul id="news-box">
					<?php  //wordpressの基本的な出力
							$args = [//ループ出力のための設定
								'post_type' => 'post',
								'posts_per_page' => 5,//投稿ページのデータを全件取得
								'category_name' => 'Infomation-news'
						];//投稿ページからデータを取得する
						
						$the_query = new WP_Query($args);
							if($the_query -> have_posts()): //データが存在するかチェック(お約束)
								while($the_query -> have_posts()):  //データをループし、表示させる準備(お約束)
									$the_query -> the_post(); //ループされたデータを1件分取得(お約束)
						?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<p>
									<time datetime="<?php print get_the_date('Y-m-d') ?>"><?php print get_the_date('Y/m/d');  //投稿時間を出力する ?></time>
									<?php if (mb_strlen ($post -> post_title) > 37) {
										$title= mb_substr ($post -> post_title, 0, 37) ;
											print $title . '...';
										} else {
											print $post->post_title;
										}  //タイトルを文字数制限付きで出力する 
									?>
								</p>
							</a>
						</li>
					<?php
							endwhile;
						endif;
					?>
					</ul>
				</div>
			</main><!---メインここまで--->
			<?php get_footer(); ?>
