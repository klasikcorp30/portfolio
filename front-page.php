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

	<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans navbar-fw" role="navigation">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<!-- Logo -->
			<a class="navbar-brand" href="index.html"><img class="navbar-logo" src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="Definity - Logo"></a>
		</div>

		<!-- Navbar Links -->
		<div id="navbar" class="navbar-collapse collapse page-scroll navbar-right">
			<ul class="nav navbar-nav">
				<li><a href="#home">Home<span class="sr-only"></span></a></li>
				<!--<li><a href="#services">Services<span class="sr-only"></span></a></li> -->
				<li><a href="#about">About<span class="sr-only"></span></a></li>
				<li><a href="#portfolio">Portfolio<span class="sr-only"></span></a></li>
				<!--	<li><a href="#testimonials">Testimonials<span class="sr-only"> -->
				</span>
				</a>
				</li>
				<li><a href="#blog">Blog<span class="sr-only"></span></a></li>
				<li><a href="#contact">Contact<span class="sr-only"></span></a></li>
				<!--	<li><a href="index.html">All Demos<span class="sr-only"></span></a> --></li>
			</ul>
			<!-- / .nav .navbar-nav -->
		</div>
		<!--/.navbar-collapse -->
	</nav>
	<!-- / .navbar -->



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

	<section id="portfolio" class="container-fluid portfolio-layout portfolio-columns-fw">
		<div class="row">
			<header class="sec-heading">
				<h2>Featured Projects</h2>
				<span class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing</span>
			</header>
		</div>
		<!-- / .row -->

		<!-- Filters -->
		<div class="row">
			<ul id="pfolio-filters" class="portfolio-filters">
				<li class="active"><a href="#" data-filter="*">All</a></li>
				<li><a href="#" data-filter=".webdesing">Webdesign</a></li>
				<li><a href="#" data-filter=".print">Print</a></li>
				<li><a href="#" data-filter=".photo">Photography</a></li>
			</ul>
		</div>

		<div class="row">
			<div id="pfolio">

				<!-- Item 1 -->
				<div class="col-md-4 portfolio-item hover-bottom webdesing print">
					<figure>
						<img src="<?php bloginfo('temporary_directory');?>/http://placehold.it/990x650/aaa/ccc" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="<?php bloginfo('temporary_directory')?>/http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

				<!-- Item 2 -->
				<div class="col-md-4 portfolio-item hover-bottom print">
					<figure>
						<img src="<?php bloginfo('temporary_directory'); ?>/http://placehold.it/990x650" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

				<!-- Item 3 -->
				<div class="col-md-4 portfolio-item hover-bottom photo">
					<figure>
						<img src="<?php bloginfo('temporary_directory'); ?>http://placehold.it/990x650/aaa/ccc" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

				<!-- Item 4 -->
				<div class="col-md-4 portfolio-item hover-bottom webdesing photo">
					<figure>
						<img src="<?php bloginfo('temporary_directory'); ?>http://placehold.it/990x650" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

				<!-- Item 5 -->
				<div class="col-md-4 portfolio-item hover-bottom print photo">
					<figure>
						<img src="<?php bloginfo('temporary_directory'); ?>http://placehold.it/990x650/aaa/ccc" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

				<!-- Item 6 -->
				<div class="col-md-4 portfolio-item hover-bottom webdesing">
					<figure>
						<img src="<?php bloginfo('temporary_directory'); ?>http://placehold.it/990x650" alt="Project Example">
						<figcaption>
							<h4 class="hover-heading">Project Name</h4>
							<ul class="hover-btns">
								<li><a class="open-gallery" href="http://placehold.it/990x650"><i class="fa fa-arrows-alt"></i></a></li>
								<li><a href="pages/portfolio/portfolio-single-1.html"><i class="fa fa-share"></i></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<!-- / .portfolio-item -->

			</div>
			<!-- / #pfolio -->
		</div>
		<!-- / .row -->
	</section>
	<!-- / .portfolio-columns-fw -->



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



			<!-- ========== Testimonials ========== -->
			<!--

	<div id="testimonials" class="testimonials-parallax">
		<div class="bg-overlay">

			<div class="t-wrapper t-slider">

				<!-- Testimonial 1 -->
			<!--
				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
					<span class="et-quote t-type"></span>
					<footer>
						<cite>
                    <h5 class="h-alt">Patrick Owens</h5>
                    <h5>CEO - Company Name</h5>
                  </cite>
					</footer>
				</blockquote>

				<!-- Testimonial 2 -->
			<!--
				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
					<span class="et-quote t-type"></span>
					<footer>
						<cite>
                    <h5 class="h-alt">Patrick Owens</h5>
                    <h5>CEO - Company Name</h5>
                  </cite>
					</footer>
				</blockquote>

				<!-- Testimonial 3 -->
			<blockquote>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
				<span class="et-quote t-type"></span>
				<footer>
					<cite>
                    <h5 class="h-alt">Patrick Owens</h5>
                    <h5>CEO - Company Name</h5>
                  </cite>
				</footer>
			</blockquote>

		</div>

		<!-- ========== Blog Preview ========== -->

		<div id="blog" class="gray-bg">
			<section id="blog" class="section container blog-columns blog-preview">
				<div class="row">

					<header class="sec-heading">
						<h2>Latest from our blog</h2>
						<span class="subheading">Check out our blog to see what were up to</span>
					</header>


					<!-- Blog Post 1 -->
					<div class="col-lg-4 col-md-6 mb-sm-50">
						<div class="blog-post wow fadeIn" data-wow-duration="2s">

							<!-- Image -->
							<a href="pages/blog/blog-post.html" class="post-img"><img src=<?php bloginfo('temporary_directory'); ?>/"http://placehold.it/990x715" alt="Blog Post 1"></a>
							<a href="pages/blog/blog-post.html" class="post-img"><img src=<?php bloginfo('temporary_directory'); ?>/"http://placehold.it/990x715" alt="Blog Post 1"></a>

							<div class="bp-content">

								<!-- Meta data -->
								<div class="post-meta">
									<a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>August 01.2015</span>
                      </a>
									<a href="#" class="post-comments">
                        <i class="fa fa-comments-o"></i>
                        <span>12</span>
                      </a>
								</div>
								<!-- / .meta -->

								<!-- Post Title -->
								<a href="pages/blog/blog-post.html" class="post-title">
									<h4>Blog Post Title</h4>
								</a>

								<!-- Blurb -->
								<p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

								<!-- Link -->
								<a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

							</div>
							<!-- / .bp-content -->

						</div>
						<!-- / .blog-post -->
					</div>
					<!-- / .col-lg-4 -->


					<!-- Blog Post 2 -->
					<div class="col-lg-4 col-md-6 mb-sm-50">
						<div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">

							<!-- Image -->
							<a href="pages/blog/blog-post.html" class="post-img"><img src="<?php bloginfo('temporary_directory') ?>/http://placehold.it/990x715" alt="Blog Post 1"></a>

							<div class="bp-content">

								<!-- Meta data -->
								<div class="post-meta">
									<a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>August 01.2015</span>
                      </a>
									<a href="#" class="post-comments">
                        <i class="fa fa-comments-o"></i>
                        <span>12</span>
                      </a>
								</div>
								<!-- / .meta -->

								<!-- Post Title -->
								<a href="pages/blog/blog-post.html" class="post-title">
									<h4>Blog Post Title</h4>
								</a>

								<!-- Blurb -->
								<p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

								<!-- Link -->
								<a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

							</div>
							<!-- / .bp-content -->

						</div>
						<!-- / .blog-post -->
					</div>
					<!-- / .col-lg-4 -->


					<!-- Blog Post 3 -->
					<div class="col-lg-4 col-md-6">
						<div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

							<!-- Image -->
							<a href="pages/blog/blog-post.html" class="post-img"><img src="<?php bloginfo('temporary_directory') ?>/http://placehold.it/990x715" alt="Blog Post 1"></a>

							<div class="bp-content">

								<!-- Meta data -->
								<div class="post-meta">
									<a href="#" class="post-date">
                        <i class="fa fa-calendar-o"></i>
                        <span>August 01.2015</span>
                      </a>
									<a href="#" class="post-comments">
                        <i class="fa fa-comments-o"></i>
                        <span>12</span>
                      </a>
								</div>
								<!-- / .meta -->

								<!-- Post Title -->
								<a href="pages/blog/blog-post.html" class="post-title">
									<h4>Blog Post Title</h4>
								</a>

								<!-- Blurb -->
								<p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

								<!-- Link -->
								<a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

							</div>
							<!-- / .bp-content -->

						</div>
						<!-- / .blog-post -->
					</div>
					<!-- / .col-lg-4 -->


				</div>
				<!-- / .row -->
			</section>
			<!-- / .container -->
		</div>
		<!-- / .gray-bg -->






		<!-- ========== Footer Litle ========== -->

		<footer id="contact" class="footer-litle">
			<div class="gray-bg">

				<!-- Contact Info -->
				<address>
              <ul>
                <!-- Address -->
                <li>
                  <span class="linea-basic-map adr-icon"></span>
                  <div class="adr-group">
                    <span class="adr-heading">Address</span>
                    <span class="adr-info">Kingston, Jamaica</span>
                  </div>
                </li>

                <!-- Email -->
                <li>
                  <span class="linea-basic-paperplane adr-icon"></span>
                  <div class="adr-group">
                    <span class="adr-heading">Email</span>
                    <span class="adr-info">klasik.corp30@gmail.com</span>
                  </div>
                </li>

                <!-- Phone -->
                <li>
                  <span class="linea-basic-smartphone adr-icon"></span>
                  <div class="adr-group">
                    <span class="adr-heading">Phone</span>
                    <span class="adr-info">+ 1876 487 4623</span>
                  </div>
                </li>
              </ul>
            </address>
			</div>
			<!-- / .gray-bg -->


			<!-- Social Links -->
			<div class="dark-bg">
				<div class="container footer-social-links">
					<div class="row">

						<ul>
							<li><a href="#">facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Dribbble</a></li>
							<li><a href="#">Behance</a></li>
						</ul>

					</div>
				</div>
				<!-- / .container -->
			</div>
			<!-- / .dark-bg -->


			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">

						<div class=" text-center">
							<small>&copy; 2018 ALL RIGHTS RESERVED</small>
						</div>

					</div>
					<!-- / .row -->
				</div>
				<!-- / .container -->
			</div>
			<!-- / .copyright -->
		</footer>
		<!-- / .footer-litle -->



		<?php
get_footer();