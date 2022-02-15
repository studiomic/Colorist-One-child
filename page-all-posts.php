<?php get_header(); ?>

<main class="ind-page" id="content">
	<section class="blos-posts">
		<h2>ALL POSTS</h2>
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
						<span class="front-day"><?php echo get_post_time('d'); ?></span><span>Mar 2018</span>
					</time>
				</div>
				<h3><?php the_title(); ?></h3>
				<p class="picat"><?php $categories = get_the_category();if ( $categories ) { echo $categories[0]->name; } ?></p>
			</article>
		</a>


		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
</main>



<?php get_footer(); ?>

