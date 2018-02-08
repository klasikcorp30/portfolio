<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_portfolio
 */

?>


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

              </ul>
            </address>
		</div>
		<!-- / .gray-bg -->


		<!-- Social Links -->
		<div class="dark-bg">
			<div class="container footer-social-links">
				<div class="row">

					<ul>
						<li><a href="facebook.com/ranielbrown">Facebook</a></li>
						<li><a href="linkedin.com/ranielbrown">LinkedIn</a></li>
						
						<li><a href="https://dribbble.com/klasikdezign11">Dribbble</a></li>
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





	<!-- ========== Scripts ========== -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.min.js"></script>

	<script src="<?php bloginfo( 'template_directory');?>/assets/js/vendor/google-fonts.js "></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.easing.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/smoothscroll.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.localScroll.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.scrollTo.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.stellar.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.parallax.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/slick.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.easypiechart.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/countup.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/isotope.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/wow.min.js"></script>
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/vendor/jquery.ajaxchimp.js"></script>

	<!-- Definity JS -->
	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/main.js"></script>

	<!-- My JS script -->

	<script src="<?php bloginfo( 'template_directory'); ?>/assets/js/script.js"></script>



	<?php wp_footer(); ?>
