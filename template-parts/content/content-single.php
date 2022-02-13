<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
#d1e4dd
?>
<section class="singular">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header alignwide">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header>
		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div>
		<footer class="entry-footer default-max-width">
			<?php twenty_twenty_one_entry_meta_footer(); ?>
		</footer>
		<?php if ( ! is_singular( 'attachment' ) ) : ?>
			<?php get_template_part( 'template-parts/post/author-bio' ); ?>
		<?php endif; ?>
	</article>
</section>