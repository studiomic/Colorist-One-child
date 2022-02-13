<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>
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
