<section id="portfolio" class="container portfolio-layout portfolio-columns-fw">
	<div class="row">
		<header class="sec-heading">
			<h2>Featured Projects</h2>
			<span class="subheading">Some of my best works</span>
		</header>
	</div>
	<!-- / .row -->



	<div class="row">
		<div id="pfolio">

			<?php
				$portfolios = new WP_Query(array(
					'posts_per_page' => 3,
					'post_type' => 'portfolio',
				));

				if ($portfolios->have_posts()) :
					while ($portfolios->have_posts()) : $portfolios->the_post();
			?>

				<div class="col-md-4">
					<div class="card">
						<div>
							<?php if (has_post_thumbnail()) : ?>
							
							<a href="<?php echo esc_url(get_permalink()); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>" width="200px" height="200px"></a>
							
							<?php else : ?>
							<img src="<?php bloginfo('template_directory') ?>/assets/images/github-icon.gif" width="200px" height="200px">
							<?php endif; ?>

							<div class="shadow">
								<h1><?= wp_trim_words(get_the_title(), 4) ?></h1>

								<p><?php 
									if (has_excerpt()) :
										echo wp_trim_words(get_the_excerpt(), 18);
									else :
										echo wp_trim_words(get_the_content(), 18);
									endif;
									?>
            					</p>

								<a class="viewLink" href="<?php echo esc_url(get_permalink()); ?>"> View Project</a>
							</div>

						</div>
					</div>
				</div>

			<?php
				endwhile;
				endif;
				wp_reset_query();
			?>

			


		</div>
		<!-- / #pfolio -->
	</div>
	<!-- / .row -->
</section>
<!-- / .portfolio-columns-fw -->
