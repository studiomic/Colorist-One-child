<?php
/*
Template Name: PtmStyle
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage" <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="color-scheme" content="light dark">
	<?php wp_head(); ?>
	<!-- jquery & iScroll -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
	<!-- drawer.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noto+Sans+JP&family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.6.0/styles/ocean.min.css"/>
	<link rel="stylesheet" href="/css/site-style.css">
	<link rel="stylesheet" href="/css/style-blog.css">
	<link rel="stylesheet" href="https://www.ptm-co.jp/css/product-items.css">
	<style>
		.entry-content p,
		/* .entry-content div, */
		.entry-content .product-wrapper,
		.entry-content h2,
		.entry-content h3,
		.entry-content h4,
		.entry-content h5 {
			width:1000px;
			min-width:1000px;
			max-width:1000px;
		}
		.product-wrapper {
			font-size: 18px;
		}
		.product-wrapper h2 {
			font-size: 24px;
		}
		.product-wrapper h3,.product-wrapper h4 {
			font-weight: bold;
		}
		.product-full {
			min-width:100%!important;
			width:100vw!important;
		}

		.grid-two div:nth-of-type(1){
			width:700px!important;
			max-width:700px!important;
		}
		.grid-two div:nth-of-type(2){
			width:300px!important;
			max-width:300px!important;
		}





	</style>

</head>

<body>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
<main class="Blog">
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.
?>
</main>
<footer class="pageBottom" itemscope itemtype="https://schema.org/WPFooter">
	<div>
		<p><a href="/ptm-index/">Manual-Index</a></p>
		<p><!-- &copy; <?php echo date( 'Y' ); ?> STUDIOMIC --></p>
		<p><a href="#">Back-PageTop</a></p>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
<script src="/js/particles.min.js"></script>
<script src="/js/index.js"></script>
<script src="/js/clipboard.min.js"></script>
<script src="/js/code.js"></script>
<script src="/js/demos.js"></script>
<script src="/js/snippets.js"></script>
<script src="/js/tooltips.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
