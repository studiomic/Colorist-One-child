<?php get_header(); ?>

<main class="information" id="content">
	<section class="info">
	<h2>INFORMATION</h2>
		<dl>
			<?php
			$wp_query = new WP_Query();
			$my_posts = array(
				'post_type' => 'info',
				'posts_per_page'=> '-1',
			);
			$wp_query->query( $my_posts );
			if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
			?>
				<dt><?php echo get_the_date(); ?></dt>
				<dd><?php the_content(); ?></dd>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</dl>
	</section>
</main>
<?php get_footer(); ?>
