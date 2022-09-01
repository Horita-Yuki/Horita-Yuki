<footer> 
  <div id="footer-nav">
  <ul>
      <li><a href="<?php print esc_url(home_url('index.php')); ?>" class="header-nav-text">ホーム</a></li>
      <li><a href="<?php print esc_url(home_url('news')); ?>" class="header-nav-text">お知らせ</a></li>
      <li><a href="<?php print esc_url(home_url('menu')); ?>" class="header-nav-text">お品書き</a></li>
      <li><a href="<?php print esc_url(home_url('contact')); ?>" class="header-nav-text">お問い合わせ</a></li><!--固定ページのurlを指定して呼び出し-->
    </ul>
  </div>
  <small>&copy; 2022 居酒屋鶏よし</small> 
</footer>
<script type="text/javascript" src=<?php print get_theme_file_uri("js/jquery-3.6.0.min.js"); ?>></script>
<script type="text/javascript" src=<?php print get_theme_file_uri("js/jquery.showmore.min.js"); ?>></script>
<script type="text/javascript" src=<?php print get_theme_file_uri("js/showmore.js"); ?>></script>
<script type="text/javascript" src=<?php print get_theme_file_uri("js/fadeIn.js"); ?>></script>
<script type="text/javascript" src=<?php print get_theme_file_uri("js/drawer-menu.js"); ?>></script>
</body>
</html>