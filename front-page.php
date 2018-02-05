<?php
/**
 * The main template file
 */

get_header(); ?>

	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


	<!-- ========== Preloader ========== -->

	<!--<div class="preloader">
		<img src="<?php bloginfo('template_directory');?>/assets/images/loader.svg" alt="Loading...">
	</div>-->



	<!-- ========== Navigation ========== -->
	<?php

	get_template_part( 'template-parts/nav');

	?>


		<!-- ========== Hero Cover ========== -->

		<div id="home" class="freelancer-hero">
			<div class="bg-overlay">

				<!-- Hero Content -->
				<div class="hero-content-wrapper">
					<div class="hero-content">

						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Web Dsigner</h4>
						<h1 class="hero-lead wow fadeInUp" data-wow-duration="1.5s">Raniel Brown</h1>
						<a href="pages/contact-3.html" class="btn btn-light btn-small wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Schedule Project</a>

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

		<!-- ========== Feature - Steps Numbers ========== -->

		<section class="container ft-steps-numbers">
			<div class="row section">

				<header class="sec-heading ws-s">
					<h2>Work process</h2>
					<span class="subheading">Lorem ipsum dolor sit amet, consectetur</span>
				</header>

				<!-- Step 1 -->
				<div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s">
					<span class="ft-nbr">01</span>
					<h4>Design</h4>
					<p>This phase occurs immediately after the client has chosen a design. The main activites that take place here is simple marking up the provide content with basic HTML and positioning content with the use of CSS and JavaScript. The uses of frameworks and libraries are introduced alo to provide more cleaner layout pattern and also used to provdie more UI and UX properties.</p>
				</div>

				<!-- Step 2 -->
				<div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
					<span class="ft-nbr">02</span>
					<h4>Develop</h4>
					<p> This is where the deveopment of the website takes place. The back end of the website is properly configured with languages such as PHP and frameworks such as Django ad Ruby on Rails. Databases, if needed are also created and mangaged with tools suh MySQL. This is where the design meets the developent and both are impleemented. </p>
				</div>

				<!-- Step 3 -->
				<div class="col-lg-4 col-md-6 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
					<span class="ft-nbr">03</span>
					<h4>Deploy</h4>
					<p>This is the final stage where the website is now being deployed on the internet. The website is stored on a server for hosting. </p>
				</div>

			</div>
			<!-- / .row -->

			<!-- CTA Button -->
			<div class="row ws-m">
				<div class="text-center">
					<a href="#contact" class="btn">Get a free quote</a>
				</div>
			</div>
			<!-- / .row -->

		</section>
		<!-- / .container -->





		<!-- ========== About - Freelancer Layout ========== -->

		<div class="gray-bg">
			<section id="about" class="container freelancer-about">
				<div class="row section">

					<!-- Freelancer -->
					<div class="col-lg-offset-2 col-lg-4 col-md-6 mb-sm-50 img-wrapper">
						<div class="t-item">

							<!-- Image -->
							<div class="t-image">
								<img src="<?php bloginfo('temporary_directory');?>/http://placehold.it/360x440" alt="Team Member" class="img-responsive">
							</div>

							<!-- Info -->
							<div class="t-info">
								<h4 class="t-name">Raniel Brown</h4>
								<span class="t-role">Front-End Developer</span>
								<ul class="social-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="www.linkedin.com/in/ranielbrown"><i class="fa fa-linkedin"></i></a></li>

								</ul>
							</div>

						</div>
						<!-- / .t-item -->
					</div>
					<!-- / .col-md-4 -->

					<div class="col-lg-4 freelancer-about-content">
						<h2 class="t1-heading">About me</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					</div>

				</div>
				<!-- / .row -->
			</section>
			<!-- / .container -->
		</div>
		<!-- / .gray-bg -->







		<!-- ========== Portfolio ========== -->


		<?php

	get_template_part( 'template-parts/content-portfolio');

	?>


			<!-- ========== CTA - Contact Link ========== -->

			<div class="cta-link">
				<div class="bg-overlay">
					<!--
			<div class="cta-wrapper">
				<h3 class="h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">See what we can do for you</h3>
				<a href="#contact" class="btn btn-light btn-large wow fadeIn" data-wow-delay=".3s" data-wow-duration="1s">Get in touch</a>
			</div>

		</div>
	</div>
	<!-- / .dark-bg .cta-link -->





					<!-- ========== Blog Preview ========== -->

					<?php

	get_template_part( 'template-parts/content-blog');

	?>




						<!-- ========== Footer Litle ========== -->

						<?php

	get_footer();

	?>
