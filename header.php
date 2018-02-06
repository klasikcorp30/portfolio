<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_portfolio
 */

?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/vendor/bootstrap.min.css">
		<!-- Fonts -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/fonts/et-lineicons/css/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/fonts/linea-font/css/linea-font.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/fonts/fontawesome/css/font-awesome.min.css">
		<!-- Slider -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/vendor/slick.css">
		<!-- Lightbox -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/vendor/magnific-popup.css">
		<!-- Animate.css -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/vendor/animate.css">


		<!-- Definity CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/main.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/responsive.css">

		<!-- My Style -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/styles/mystyle.css">

		<!-- JS -->
		<script src="<?php bloginfo('template_directory');?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	</head>

	<body <?php body_class(); ?>>
