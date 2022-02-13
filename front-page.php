<?php get_header(); ?>
<?php get_template_part( 'header/header-front' ); ?>
	<main class="frontPage" id="content">
		<section class="introduction">
			<div><a href="#blog"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M20 .755l-14.374 11.245 14.374 11.219-.619.781-15.381-12 15.391-12 .609.755z"/></svg><span>SCROLL</span></a></div>
			<article>
				<p>
					スタジオミックは、Webサイトの制作を生業とする Sakurai（億）のパーソナルWebサイトです。<br>
					Web屋として長らくWebサービスのUIとモックアップ制作担当を中心に、傍らで企業サイトやプロモーションサイトの制作を個人受注してきました。
				</p>
				<p>
					このサイトの遥か昔の前身は自作CGIプログラムを配布する趣味の作業場でしたが、現在は主にWordPressサイト制作に明け暮れているため、ブログのカスタマイズやブログテーマに関する話題が多いです。<br>
					プライベート話はほぼMacのこと。が占めていますが、呑んだり食べたり読んだりドライバー回しが大好きな趣味人です。
				</p>
				<p>
					制作のご依頼は、作品をつくる方々のポートフォリオや、全国の街の店舗主様からのご依頼を、万象繰り合わせて優先に走るタイプなので、ぜひお気軽にご相談ください。
				</p>
			</article>
		</section>

		<section class="all-titles">
			<?php
				$wp_query = new WP_Query();
				$my_posts = array(
					'cat' => -39,
					'post_type' => 'post',
					'posts_per_page'=> '7',
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

		<section class="black" id="work">
			<section class="work">
				<!-- <h1><a href="#">WORKS</a></h1> -->
				<!-- <p>Password required to view the content of the page.</p> -->
			</section>
		</section>

		<section class="info" id="information">
			<h2>information</h2>
			<dl>
			<?php
			$wp_query = new WP_Query();
			$my_posts = array(
				'post_type' => 'info',
				'posts_per_page'=> '5',
			);
			$wp_query->query( $my_posts );
			if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
			?>
				<dt><?php echo get_the_date(); ?></dt>
				<dd><?php the_content(); ?></dd>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</dl>
		</section>

	<?php get_template_part( 'footer/footer-insertop' ); ?>
	<script>
		ScrollReveal().reveal('.time-card', {
			duration:1000,
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
