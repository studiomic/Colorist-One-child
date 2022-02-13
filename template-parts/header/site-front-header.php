<?php
/**
 * Displays the site header. insert Files.2021/3/25
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
// $wrapper_classes  = 'site-header';
// $wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
// $wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
// $wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>
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
      <section class="visible-nav">
				<nav role="navigation" aria-label="page-navigation">
					 <ul class="nav-row">
						 <li><a href="/blog">Blog</a></li>
						 <li><a href="#about">About</a></li>
						 <li><a href="#work">work</a></li>
						 <li><a href="#information">information</a></li>
						 <li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
      </section>
    </div>
	</article>
</section>
