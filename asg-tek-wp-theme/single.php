<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package asg-tek
 */

get_header();
?>

<div class="container pb50">
    <div class="row">

        <!-- BLOG CONTENT
	================================================== -->
        <div class="col-md-9 mb40">

            <?php while ( have_posts() ) : the_post();?>

            <?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>

            <?php the_post_navigation(); ?>

            <?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

            <?php endwhile; // end of the loop. ?>
           
        </div><!-- .col-md-9 .mb40 -->
        
        <!-- SIDEBAR
        ================================================== -->
        <div class="col-md-3 mb40">
            <?php get_sidebar();?>
        </div><!-- col-md-9 .mb40 -->
    </div><!-- .row -->
</div><!-- .container -->


<?php get_footer();?>
