<?php
/**
 * The template for displaying the footer on widgets!!
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package StudioMic
 * @subpackage Colorist-One
 * @since Colorist-One 1.0.0
 */
?>
<footer>
	<canvas id="waveCanvas1"></canvas>

	<h2>Contents</h2>
	<nav role="navigation" aria-label="main-navigation">
		<ul class="nav">
			<li>
				<a href="/blog">Blog</a>
				<a href="/all-posts">All Posts</a>
			</li>
			<li><a href="/infomation">infomation</a></li>
			<li><a href="#about">About</a></li>
			<li>Works</li>
			<li>Service</li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
	<div>
		<a href="#" class="back">
			<svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 992 771" preserveAspectRatio="xMidYMid meet">
			<g transform="translate(0.000000,771.000000) scale(0.100000,-0.100000)">
				<path d="M2725 7673 c-1093 -98 -2170 -807 -2528 -1663 -140 -334 -173 -691 -95 -1009 107 -440 478 -704 1068 -762 69 -7 127 -14 129 -15 2 -2 -50 -55 -115 -117 -600 -575 -993 -1241 -1104 -1867 -28 -157 -38 -468 -21 -621 71 -620 361 -1037 906 -1305 328 -160 667 -234 1207 -264 384 -21 840 26 1263 131 1325 329 2657 1261 3380 2365 43 66 79 120 81 122 1 2 46 -13 101 -33 309 -117 718 -122 1121 -15 683 182 1368 722 1642 1295 168 353 172 662 11 907 -106 162 -279 282 -511 356 -167 53 -270 66 -510 67 -243 0 -358 -14 -575 -70 -304 -78 -652 -239 -883 -409 -34 -25 -65 -46 -70 -45 -4 0 -29 44 -55 97 -158 319 -450 594 -822 777 -555 273 -1318 338 -2097 180 -67 -14 -123 -24 -124 -22 -2 2 13 30 33 62 61 100 140 274 177 387 95 289 95 565 0 790 -150 359 -559 610 -1095 672 -121 14 -401 19 -514 9z"/>
			</g></svg>
			<h4><img src="/asset/img/logo.png" alt="StudioMic"></h4>
		</a>
	</div>
	<p>&copy; <?php echo date( 'Y' ); ?> STUDIOMIC. SINCE 1998</p>
</footer>
<?php wp_footer(); ?>

<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
<script src="/asset/js/clipboard.min.js"></script>
<script src="/asset/js/demos.js"></script>
<script src="/asset/js/snippets.js"></script>
<script src="/asset/js/tooltips.js"></script>
<script src="/asset/js/script.js"></script>

<!-- <script src="/asset/js/code.js"></script> -->

<script>hljs.initHighlightingOnLoad();</script>
<script src="/asset/js/wave.js"></script>

<?php wp_reset_query();?>
<?php if(is_page('all-posts')) { ?>
<script>
	ScrollReveal().reveal('.time-card', {
	duration:1000,
	origin:'bottom',
	distance:'80px',
	viewFactor:0.2,
	reset:true
	});
</script>
<?php } ?>

</body>
</html>
