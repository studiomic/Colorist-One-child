	<link rel="stylesheet" href="/css/site-style.css">
	<link rel="stylesheet" href="/css/style-front.css">
</head>

<body class="drawer drawer--top">
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>
	<section class="front-headline">
		<article class="halffit">
			<div id="particles">
				<section class="brand">
					<a href="/">
						<h1><img src="/logo/logo.png" alt="StudioMic"></h1>
						<p>Web Design &amp; Development</p>
					</a>
				</section>
	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
