<?php
/**
 * The main template file
 */

get_header(); ?>


<!-- ========== Navigation ========== -->
<?php get_template_part( 'template-parts/nav'); ?>


<!-- ========== Hero Cover ========== -->
<?php get_template_part('template-parts/content-hero') ?>

<!-- ========== Feature - Steps Numbers ========== -->
<?php get_template_part('template-parts/content-services') ?>

<!-- ========== About - Freelancer Layout ========== -->
<?php get_template_part('template-parts/content-about'); ?>

<!-- ========== Portfolio ========== -->
<?php get_template_part( 'template-parts/content-portfolio'); ?>

<!-- ========== Blog Preview ========== -->
<?php get_template_part( 'template-parts/content-blog'); ?>

<!-- ========== Footer Litle ========== -->
<?php get_footer(); ?>
