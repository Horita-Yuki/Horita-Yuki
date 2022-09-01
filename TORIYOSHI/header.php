<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="discription" content="静かな空間でゆっくりとお食事を楽しみたい方におすすめの居酒屋です。">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>居酒屋鶏よし</title>
<link rel="stylesheet" href=<?php print get_theme_file_uri("css/import.css"); ?>>
<script src="https://kit.fontawesome.com/6e4fd17460.js" crossorigin="anonymous"></script>
</head>
<body id="index" style="visibility:hidden" onLoad="document.body.style.visibility='visible'">
<header id="header">
  <a href=<?php print get_theme_file_uri("index.html"); ?> id="to-top"></a>
  <img src=<?php print get_theme_file_uri("images/logo.svg"); ?> id="logo" alt="ロゴマーク">
  <h1>居酒屋鶏よし</h1>
  <nav id="header-nav">
    <ul>
      <li><a href="<?php print esc_url(home_url('index.php')); ?>" class="header-nav-text">ホーム</a></li>
      <li><a href="<?php print esc_url(home_url('news')); ?>" class="header-nav-text">お知らせ</a></li>
      <li><a href="<?php print esc_url(home_url('menu')); ?>" class="header-nav-text">お品書き</a></li>
      <li><a href="<?php print esc_url(home_url('contact')); ?>" class="header-nav-text">お問い合わせ</a></li><!--固定ページのurlを指定して呼び出し-->
    </ul>
  </nav>
  <div id="g-navi">
    <ul>
      <li><a href="<?php print esc_url(home_url('index.php')); ?>" class="header-nav-text">ホーム</a></li>
      <li><a href="<?php print esc_url(home_url('news')); ?>" class="header-nav-text">お知らせ</a></li>
      <li><a href="<?php print esc_url(home_url('menu')); ?>" class="header-nav-text">お品書き</a></li>
      <li><a href="<?php print esc_url(home_url('contact')); ?>" class="header-nav-text">お問い合わせ</a></li><!--固定ページのurlを指定して呼び出し-->
    </ul>
  </div>
  <div id="nav-button" class="openbtn">
    <img src=<?php print get_theme_file_uri("images/nav-button.png"); ?> alt="ナビゲーションボタン" id="nav-button-img">
    <p id="nav-button-text">メニュー</p>
  </div>
</header>