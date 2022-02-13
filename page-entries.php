<?php get_header(); ?>

	<main class="Blog">
		<section class="Entries">
			<h1>ENTRIES</h1>
			<article>
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
				<section class="blog-card">
					<a href="<?php the_permalink() ?>">
					<?php if (has_post_thumbnail()) : ?>
						<figure><?php the_post_thumbnail('medium'); ?></figure>
					<?php else : ?>
						<figure><img src="https://www.studiomic.net/img/no-img600.jpg" /></figure>
					<?php endif ; ?>
					<div class="pincat"><?php $categories = get_the_category();if ( $categories ) { echo $categories[0]->name; } ?></div>
						<time datetime="<?php the_date(); ?>">
							<span><?php echo get_post_time('M'); ?></span><span class="front-day"><?php echo get_post_time('d'); ?></span><span><?php echo get_post_time('Y'); ?></span>
						</time>
						<h3><?php the_title(); ?></h3>
						<p><?php echo mb_substr(get_the_excerpt(), 0, 70); ?></p>
					</a>
				</section>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</article>
		</section>

<?php get_template_part( 'footer/footer-insertop' ); ?>
<script>
	ScrollReveal().reveal('.blog-card', {
		duration:1200,
		origin:'bottom',
		distance:'80px',
		viewFactor:0.2,
		reset:true
	});
</script>
<script>
	$(document).ready(function() {
		$('.drawer').drawer();
	});
</script>
<div class="en"></div>
</body>
</html>
