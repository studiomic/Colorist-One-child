<?php get_header(); ?>

<main>
	<section class="all-titles">
		<?php
			$wp_query = new WP_Query();
			$my_posts = array(
				'cat' => -39,
				'post_type' => 'post',
				'posts_per_page'=> '-1',
			);
			$wp_query->query( $my_posts );
			if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
		?>

		<a href="<?php the_permalink() ?>" class="time-card">
			<article class="titles">
				<div class="time-wrap">
					<time datetime="<?php the_date(); ?>" class="flex">
						<span class="front-day"><?php echo get_post_time('d'); ?></span><span><?php echo get_post_time('M'); ?> <?php echo get_post_time('Y'); ?></span>
					</time>
				</div>
				<h2><?php the_title(); ?></h2>
				<p class="picat"><span><?php $categories = get_the_category();if ( $categories ) { echo $categories[0]->name; } ?></span></p>
			</article>
		</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
</main>

	<!-- <?php get_template_part( 'footer/footer-insertop' ); ?> -->
	<script>
	ScrollReveal().reveal('.time-card', {
		duration:1000,
		origin:'bottom',
		distance:'80px',
		viewFactor:0.2,
		reset:true
		});
	</script>

<?php get_footer(); ?>

