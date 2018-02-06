<div id="home" class="freelancer-hero"
    style="
        <?php if (has_post_thumbnail()) : ?>
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('<?php the_post_thumbnail_url('full'); ?>') no-repeat;
        <?php endif; ?>
        background-size: cover
    ">

	<div class="bg-overlay">

		<!-- Hero Content -->
		<div class="hero-content-wrapper">
			<div class="hero-content">

				<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Web Dsigner</h4>
				<h1 class="hero-lead wow fadeInUp" data-wow-duration="1.5s">Raniel Brown</h1>
				<a href="#contact" class="btn btn-light btn-small wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Schedule Project</a>

			</div>
		</div>

		<!-- Scroller -->
		<a href="#services" class="scroller">
		<span class="scroller-text">scroll down</span>
		<span class="linea-basic-magic-mouse"></span>
	</a>

	</div>
	<!-- / .bg-overlay -->
</div>
<!-- / .main-hero-2 -->