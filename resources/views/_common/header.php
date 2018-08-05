<?php use MetaStore\App\Kernel\View; ?>

<!DOCTYPE html>
<html class="has-navbar-fixed-top" dir="ltr" lang="ru">
<head prefix="og: http://ogp.me/ns#">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="furry, chat, фурри, чат, фурри чат" />
	<meta name="description" content="Самый современный чат для FURRY / ФУРРИ. Интересные обсуждения, ролевые игры, ивенты, стримы, библиотека, архив изображений, добрая администрация!" />
	<meta name="copyright" content="METADATA / FOUNDATION" />
	<meta name="theme-color" content="#f3f6f9" />
	<title>Чат FURRY / ФУРРИ</title>

	<!-- meta: open graph -->
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Чат FURRY / ФУРРИ" />
	<meta property="og:title" content="Чат FURRY / ФУРРИ" />
	<meta property="og:description" content="Самый современный чат для FURRY / ФУРРИ. Интересные обсуждения, ролевые игры, ивенты, стримы, библиотека, архив изображений, добрая администрация!" />
	<meta property="og:image" content="https://furs.chat/resources/assets/images/logo.png" />
	<meta property="og:url" content="https://furs.chat" />
	<!-- / meta: open graph -->

	<!-- meta: twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Чат FURRY / ФУРРИ" />
	<meta name="twitter:description" content="Самый современный чат для FURRY / ФУРРИ. Интересные обсуждения, ролевые игры, ивенты, стримы, библиотека, архив изображений, добрая администрация!" />
	<meta name="twitter:image" content="https://furs.chat/resources/assets/images/logo.png" />
	<meta name="twitter:site" content="@fursnetwork" />
	<meta name="twitter:creator" content="@fursnetwork" />
	<!-- / meta: twitter -->

	<!-- styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i|Fira+Mono:400,700&amp;subset=cyrillic" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma/css/bulma.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" />
	<link type="text/css" rel="stylesheet" href="/resources/assets/styles/theme.css" />
	<!-- / styles -->

	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<!-- / favicon -->

	<?php View::get( 'json-ld', 'meta' ); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">