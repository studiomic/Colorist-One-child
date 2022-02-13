<section class="blog-card">
	<a href="<?php the_permalink() ?>">
		<figure><?php the_post_thumbnail('medium'); ?></figure>
		<div class="pincat"><?php $categories = get_the_category();if ( $categories ) { echo $categories[0]->name; } ?></div>
		<time datetime="<?php the_date(); ?>">
			<span><?php echo get_post_time('M'); ?></span><span class="front-day"><?php echo get_post_time('d'); ?></span><span><?php echo get_post_time('Y'); ?></span>
		</time>
		<h3><?php the_title(); ?></h3>
		<p><?php echo mb_substr(get_the_excerpt(), 0, 70); ?></p>
	</a>
</section>
