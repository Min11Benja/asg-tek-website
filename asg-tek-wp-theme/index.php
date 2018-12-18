<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asg-tek
 */

get_header();
?>

<!--/-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-//-/-/-/-/-->
    
    <!--BLOG Cat Page Parralax BG and Title -->
    <div class="page-titles-img title-space-lg bg-parallax parallax-overlay mb70" data-jarallax='{"speed": 0.2}' style='background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/bog-bg-2.jpg")'>
        
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 ml-auto mr-auto">
                        <h1 class='text-uppercase'>Blog - ASG Tek</h1>

                    </div><!--.col-md-8 -ml-auto .mr-auto-->
                </div><!--.row-->
            </div><!--.container-->
        </div><!--page title end-->
    
     <!--BLOG CATALOGUE SECTION-->
      <div class="container mb30">
          
         <div class="row">
         
                <div class="col-md-9">
                                            
                        		<?php
                                if ( have_posts() ) :

                                    if ( is_home() && ! is_front_page() ) :
                                        ?>

                                        

                                        <?php
                                    endif;

                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();

                                        /*
                                         * Include the Post-Type-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', get_post_type() );

                                    endwhile;

                                    the_posts_navigation();

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                                ?>
      
                </div><!--.col-md-9-->
             
             <div class="col-md-3 mb40">
                <?php get_sidebar(); ?>
             </div> <!--.col-md-3 .mb40-->
                          
            </div><!--.row-->
        </div><!--.container-->
<?php get_footer(); ?>
