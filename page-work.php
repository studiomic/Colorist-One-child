<?php get_header(); ?>


<main class="" id="content">
	<section class="">
		<h1>WORK</h1>
			<?php
			$wp_query = new WP_Query();
			$my_posts = array(
				'post_type' => 'jetpack-portfolio',
				'posts_per_page'=> '-1',
			);
			$wp_query->query( $my_posts );
			if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<div><?php the_content(); ?></div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</dl>
	</section>
</main>
<?php get_footer(); ?>
