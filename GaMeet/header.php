<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>GaMeet</title>
	<link rel="stylesheet" href="<?php print get_theme_file_uri('css/import.css'); ?>">
	<link rel="preconnect" href="<?php print get_theme_file_uri('https://fonts.googleapis.com'); ?>">
	<link rel="preconnect" href="<?php print get_theme_file_uri('https://fonts.gstatic.com'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Noto+Sans+JP:wght@300&family=Noto+Serif+JP&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <style> * {outline: 1px solid #ff0000;} </style> -->
	<script src="https://kit.fontawesome.com/6e4fd17460.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body style="visibility:hidden" onLoad="document.body.style.visibility='visible'">
	<div id="particles-js"></div>
	<!---メイン--->
	<header class="header" id="header">
		<a href="<?php echo esc_url(home_url('/')); ?>index#header"><h1>GaMeet</h1></a>
		<div class="square sq1"></div><div class="square sq2"></div><div class="square sq3"></div><div class="square sq4"></div><!--ヘッダーの菱形模様-->
	</header>