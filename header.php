<?php
/**
 * The header.
 * This is the template that displays all of the <head> section and everything up until main.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package StudioMic
 * @subpackage Colorist-One
 * @since Colorist-One 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage" <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="color-scheme" content="light dark">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon">
	<?php wp_head(); ?>
	<!-- jquery & iScroll -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script> -->
	<!-- drawer.js -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noto+Sans+JP&family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.6.0/styles/ocean.min.css"/>
	<!-- <link rel="stylesheet" href="/css/site-style.css"> -->
	<link rel="stylesheet" href="/asset/css/style.css">
	<link rel="stylesheet" href="/css/style-blog.css">
</head>

<body>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<header class="wave">
		<div class="brand">
			<h1><a href="/">Stylo de Cerise</a></h1>
		</div>
		<canvas id="waveCanvas"></canvas>
	</header>
