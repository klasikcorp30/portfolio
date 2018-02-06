<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <?php
    
            while ( have_posts() ) : the_post();
        ?>

			<div class="col-md-4">
					<div class="card">
						<div>
							<?php if (has_post_thumbnail()) : ?>
							<img src="<?php the_post_thumbnail_url('medium'); ?>" width="200px" height="200px">
							<?php else : ?>
							<img src="<?php bloginfo('template_directory') ?>/assets/images/github-icon.gif" width="200px" height="200px">
							<?php endif; ?>

							<div class="shadow">

                                
								<h1><?= get_the_title(); ?></h1>

                                <p><?php the_field('technologies') ?> </p>
                                <p><?php the_field('link') ?> </p>
                                <p><?php the_field('description') ?> </p>
                                
                                <?php 
                                    //get the images form the post and show each other them in the template
                                    $images = get_field('images');
                                    if ($images) :
                                        foreach ($images as $image) :
                                ?>

                                <img src="(<?php echo $image['url']; ?>" width="200px" >

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
