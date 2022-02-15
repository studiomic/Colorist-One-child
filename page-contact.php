<?php get_header(); ?>

<main class="Blog">
	<h1>CONTACT</h1>
	<section class="contact">
<?php 	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile; ?>
	</section>
	</main>
<?php get_footer(); ?>
