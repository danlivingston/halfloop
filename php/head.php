<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Chrome, Firefox OS and Opera mobile address bar theming -->
<meta name="theme-color" content="#000000">
<!-- Windows Phone mobile address bar theming -->
<meta name="msapplication-navbutton-color" content="#000000">
<!-- iOS Safari mobile address bar theming -->
<meta name="apple-mobile-web-app-status-bar-style" content="#000000">
<meta name="generator" content="Bludit">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/halfmoon.min.css'); ?>
<?php echo Theme::css('css/style.css'); ?>
<?php echo Theme::cssLineAwesome(); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>

<!-- Roboto font (Used when Apple system fonts are not available) -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
