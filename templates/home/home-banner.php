<?php
date_default_timezone_set("America/Sao_Paulo");
$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
if (is_front_page() || get_post_type() == 'dicas' || is_page('48695')) {
	$arraySlide = array(
		'post_type' => 'slide',
		'order' => 'DESC',
		'orderby' => 'date',
		'posts_per_page' => -1,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'validade',
				'compare' => 'NOT EXISTS',
				'value' => ''
			),
			array(
				'key' => 'validade',
				'value' => $timeCurrent,
				'compare' => '>',
				'type' => 'DATE'
			),
			array(
				'key' => 'validade',
				'value' => '',
				'compare' => '=',
			),
			
		)
	);
	$querySlide = new WP_Query($arraySlide);
	if ($querySlide->have_posts()) {
		?>
		<section id="banner" class="pt-8 pb-8">
			<div class="container mx-auto px-4">
				<div class="swiper rounded-xl md:rounded-2xl overflow-hidden">
					<div class="swiper-wrapper">
					<?php
						while ($querySlide->have_posts()) {
							$querySlide->the_post();
							$bannerImage = get_the_post_thumbnail_url(get_the_ID());
							?>
							<div class="swiper-slide">
								<?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" class="w-full" target="_blank"><?php } ?>
									<img src="<?php echo $bannerImage; ?>" alt="" class="w-full">
								<?php if (get_field('link')) { ?></a><?php } ?>
							</div><?php
						}
					?>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev after:text-red-700"></div>
					<div class="swiper-button-next after:text-red-700"></div>
				</div>
			</div>
		</section>
		<?php 
	}
	wp_reset_query();
}
?>