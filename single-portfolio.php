<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_portfolio
 */

get_header(); ?>

<?php get_template_part( 'template-parts/nav'); ?>

       <?php
    
            while ( have_posts() ) : the_post();
        ?>

<section id="portfolio" class="container portfolio-layout portfolio-columns-fw">
	<div class="row">
		<header class="sec-heading">
			<h1><?php the_title(); ?></h1>
			<span class="subheading"><p><?php the_field('technologies') ?> </p></span>
			<a class="btn" href="<?php the_field('link') ?>">View Site</a>	
			
		</header>
	</div>
	
	<!-- / .row -->



	<div class="row">
		<div id="pfolio">
       
      
       
                                

       

			<div class="col-md-8 col-md-offset-2">
					<div> 
					   <p><?php the_field('description') ?> </p>
					   <br/>
						<div>
							<?php if (has_post_thumbnail()) : ?>
							<div class="col-md-4"><img src="<?php the_post_thumbnail_url('medium'); ?>" width="200px" height="200px"></div>
							<?php else : ?>
							<div class="col-md-4"><img src="<?php bloginfo('template_directory') ?>/assets/images/github-icon.gif" width="200px" height="200px"></div>
							<?php endif; ?>

							<div>

          <?php 
                                    //get the images form the post and show each other them in the template
                                    $images = get_field('images');
                                    if ($images) :
                                        foreach ($images as $image) :
                                ?>

                                <img src="<?php echo $image['url']; ?>" width="200px" >

                                <?php 
                                        endforeach;
                                    endif;
                                ?>

							</div>

						</div>
					</div>
				</div>

        <?php 
		    endwhile;
		?>

		</div>
		<!-- / #pfolio -->
	</div>
	<!-- / .row -->
</section>
<!-- / .portfolio-columns-fw -->

<?php
get_footer();
