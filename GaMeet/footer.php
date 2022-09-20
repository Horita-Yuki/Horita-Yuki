<footer>					<!---フッター--->
		<div class="footer-nav">
			<ul>
				<a href="<?php echo esc_url(home_url('/')); ?>index#header" class="footer-button"><li>Home</li></a>
				<a href="<?php echo esc_url(home_url('/')); ?>game#header" class="footer-button"><li>Game</li></a>
				<a href="<?php echo esc_url(home_url('/')); ?>news#header" class="footer-button"><li>News</li></a>
				<a href="<?php echo esc_url(home_url('/')); ?>about#header" class="footer-button"><li>About</li></a>
			</ul>
		</div>
		<div class="square sq1"></div><div class="square sq2"></div><div class="square sq3"></div><!--フッターの菱形模様-->
</footer>					<!---フッターここまで--->
	<script src=<?php print get_theme_file_uri("js/jquery-3.6.0.min.js"); ?>></script>
	<script src=<?php print get_theme_file_uri("js/particles.min.js"); ?>></script><!--背景の前提js -->
	<script src=<?php print get_theme_file_uri("js/slick.min.js"); ?>></script><!--スライドショーライブラリ-->
	<script src=<?php print get_theme_file_uri("js/slide.js"); ?>></script><!--メインビジュアルのスライドショー-->
	<script src=<?php print get_theme_file_uri("js/release-slideshow.js"); ?>></script><!--発売日スケジュールのスライドショー-->
	<script src=<?php print get_theme_file_uri("js/background.js"); ?>></script>
    <?php wp_footer(); ?>
</body>
</html>
