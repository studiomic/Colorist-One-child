<?php

function remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'remove_emoji' );

remove_action( 'wp_head', 'wp_shortlink_wp_head' );

add_action( 'wp_enqueue_scripts', function() {
    $styles = wp_styles();
    $styles->add_data( 'twenty-twenty-one-style', 'after', array() );
}, 20 );


// RE：WRITE
if ( ! function_exists( 'twenty_twenty_one_posted_on' ) ) {
	function twenty_twenty_one_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
    echo '<span class="posted-on">';
		echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 14h-7v-8h2v6h5v2z"/></svg>';
		printf(
			/* translators: %s: publish date. */
			// esc_html__( 'Published %s', 'twentytwentyone' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}
// RE：WRITE
if ( ! function_exists( 'twenty_twenty_one_entry_meta_footer' ) ) {
	function twenty_twenty_one_entry_meta_footer() {
		// Early exit if not a post.
		if ( 'post' !== get_post_type() ) {
			return;
		}
		// Hide meta information on pages.
		if ( ! is_single() ) {
			if ( is_sticky() ) {
				echo '<p>' . esc_html_x( 'Featured post', 'Label for sticky posts', 'twentytwentyone' ) . '</p>';
			}

			$post_format = get_post_format();
			if ( 'aside' === $post_format || 'status' === $post_format ) {
				echo '<p><a href="' . esc_url( get_permalink() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			// Posted on.
			twenty_twenty_one_posted_on();

			// Edit post link.
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);

			if ( has_category() || has_tag() ) {
				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ' , ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
            '<span class="cat-links">' . '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 32"><path class="path1" d="M33.554 17q0 0.554-0.554 1.179l-6 7.071q-0.768 0.911-2.152 1.545t-2.563 0.634h-19.429q-0.607 0-1.080-0.232t-0.473-0.768q0-0.554 0.554-1.179l6-7.071q0.768-0.911 2.152-1.545t2.563-0.634h19.429q0.607 0 1.080 0.232t0.473 0.768zM27.429 10.857v2.857h-14.857q-1.679 0-3.518 0.848t-2.929 2.134l-6.107 7.179q0-0.071-0.009-0.223t-0.009-0.223v-17.143q0-1.643 1.179-2.821t2.821-1.179h5.714q1.643 0 2.821 1.179t1.179 2.821v0.571h9.714q1.643 0 2.821 1.179t1.179 2.821z"></path></svg>' . esc_html__( '%s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				/* translators: used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.605 0h-10.605v10.609l13.391 13.391 10.609-10.604-13.395-13.396zm-4.191 6.414c-.781.781-2.046.781-2.829.001-.781-.783-.781-2.048 0-2.829.782-.782 2.048-.781 2.829-.001.782.782.781 2.047 0 2.829z"/></svg>', __( ' , ', '' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
            '<span class="cat-links">' . esc_html__( '%s', 'twentytwentyone' ) . ' </span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
			}
		} else {
			twenty_twenty_one_posted_on();
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			if ( has_category() || has_tag() ) {
				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ' , ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
						'<span class="cat-links">' . '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 32"><path class="path1" d="M33.554 17q0 0.554-0.554 1.179l-6 7.071q-0.768 0.911-2.152 1.545t-2.563 0.634h-19.429q-0.607 0-1.080-0.232t-0.473-0.768q0-0.554 0.554-1.179l6-7.071q0.768-0.911 2.152-1.545t2.563-0.634h19.429q0.607 0 1.080 0.232t0.473 0.768zM27.429 10.857v2.857h-14.857q-1.679 0-3.518 0.848t-2.929 2.134l-6.107 7.179q0-0.071-0.009-0.223t-0.009-0.223v-17.143q0-1.643 1.179-2.821t2.821-1.179h5.714q1.643 0 2.821 1.179t1.179 2.821v0.571h9.714q1.643 0 2.821 1.179t1.179 2.821z"></path></svg>' . esc_html__( '%s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				/* translators: used between list items, there is a space after the comma. */
        $tags_list = get_the_tag_list( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.605 0h-10.605v10.609l13.391 13.391 10.609-10.604-13.395-13.396zm-4.191 6.414c-.781.781-2.046.781-2.829.001-.781-.783-.781-2.048 0-2.829.782-.782 2.048-.781 2.829-.001.782.782.781 2.047 0 2.829z"/></svg>', __( ' , ', '' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
            '<span class="tags-links">' . esc_html__( '%s', 'twentytwentyone' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
			}
		}
	}
}
// RE：WRITE
if ( ! function_exists( 'twenty_twenty_one_the_posts_navigation' ) ) {
	function twenty_twenty_one_the_posts_navigation() {
		the_posts_pagination(
			array(
				'before_page_number' => esc_html__( 'PAGE', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					wp_kses(
						__( 'NEWER POSTS', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						__( 'OLDER POSTS', 'twentytwentyone' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
	}
}
// RE：WRITE
if ( ! function_exists( 'twenty_twenty_one_entry_meta_footer' ) ) {
	function twenty_twenty_one_entry_meta_footer() {
		// Early exit if not a post.
		if ( 'post' !== get_post_type() ) {
			return;
		}
		// Hide meta information on pages.
		if ( ! is_single() ) {

			if ( is_sticky() ) {
				echo '<p>' . esc_html_x( 'Featured post', 'Label for sticky posts', 'twentytwentyone' ) . '</p>';
			}
			$post_format = get_post_format();
			if ( 'aside' === $post_format || 'status' === $post_format ) {
				echo '<p><a href="' . esc_url( get_permalink() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			// Posted on.
			twenty_twenty_one_posted_on();

			// Edit post link.
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);

			if ( has_category() || has_tag() ) {

				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
						'<span class="cat-links">' . '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 34 32"><path class="path1" d="M33.554 17q0 0.554-0.554 1.179l-6 7.071q-0.768 0.911-2.152 1.545t-2.563 0.634h-19.429q-0.607 0-1.080-0.232t-0.473-0.768q0-0.554 0.554-1.179l6-7.071q0.768-0.911 2.152-1.545t2.563-0.634h19.429q0.607 0 1.080 0.232t0.473 0.768zM27.429 10.857v2.857h-14.857q-1.679 0-3.518 0.848t-2.929 2.134l-6.107 7.179q0-0.071-0.009-0.223t-0.009-0.223v-17.143q0-1.643 1.179-2.821t2.821-1.179h5.714q1.643 0 2.821 1.179t1.179 2.821v0.571h9.714q1.643 0 2.821 1.179t1.179 2.821z"></path></svg>' . esc_html__( 'Categorized as %s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				/* translators: used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentytwentyone' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
						'<span class="tags-links">' .'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.605 0h-10.605v10.609l13.391 13.391 10.609-10.604-13.395-13.396zm-4.191 6.414c-.781.781-2.046.781-2.829.001-.781-.783-.781-2.048 0-2.829.782-.782 2.048-.781 2.829-.001.782.782.781 2.047 0 2.829z"/></svg>' . esc_html__( 'Tagged %s', 'twentytwentyone' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
			}
		} else {

			// Posted on.
			twenty_twenty_one_posted_on();
			// Posted by.
			twenty_twenty_one_posted_by();
			// Edit post link.
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);

			if ( has_category() || has_tag() ) {

				/* translators: used between list items, there is a space after the comma. */
				$categories_list = get_the_category_list( __( ', ', 'twentytwentyone' ) );
				if ( $categories_list ) {
					printf(
						/* translators: %s: list of categories. */
						'<span class="cat-links">' . esc_html__( 'Categorized as %s', 'twentytwentyone' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}

				/* translators: used between list items, there is a space after the comma. */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentytwentyone' ) );
				if ( $tags_list ) {
					printf(
						/* translators: %s: list of tags. */
						'<span class="tags-links">' . esc_html__( 'Tagged %s', 'twentytwentyone' ) . '</span>',
						$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
			}
		}
	}
}
// RE：WRITE-REMOVE
if ( ! function_exists( 'twenty_twenty_one_post_thumbnail' ) ) {
	function twenty_twenty_one_post_thumbnail() {
		if ( ! twenty_twenty_one_can_show_post_thumbnail() ) {
			return;
		}
		?>
		<?php if ( is_singular() ) : ?>

		<?php else : ?>

		<?php endif; ?>
		<?php
	}
}
// RE：WRITE-REMOVE
if ( ! function_exists( 'twenty_twenty_one_post_thumbnail' ) ) {
	function twenty_twenty_one_post_thumbnail() {
		if ( ! twenty_twenty_one_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<?php if ( is_singular() ) : ?>

			<figure class="post-thumbnail">
				<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
				?>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( 'post-thumbnail' ); ?>
				</a>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure>

		<?php endif; ?>
		<?php
	}
}


//指定カテゴリをwidgetで非表示にする
function exclude_widget_categories($args){
  $args['exclude'] = '39';
  return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories');

//特定のカテゴリの除外
function exclude_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '-39' );//マイナスをつけてカテゴリIDを除外する
  }
}
add_action( 'pre_get_posts', 'exclude_category' );
