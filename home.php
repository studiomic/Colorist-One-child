<?php get_header(); ?>

<main class="home">
	<section class="blog-info">
		<article>
<?php
if ( have_posts() ) {
	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		get_template_part( 'content/content-blogcard' );
	}
	// Previous/next page navigation.
	// echo '</section>';
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content-none' );
	}
?>
		</article>
	</section>
<?php twenty_twenty_one_the_posts_navigation(); ?>
</main>

<?php get_footer(); ?>