<?php
/**
 *
 * @package asg-tek
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { // check for feature image ?>

    <img src='<?php the_post_thumbnail_url();?>' alt='post thumbnail' class='img-fluid mb30'>

    <?php } ?>

    <div class="post-content">

        <?php the_title( sprintf( '<h3 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>



        <?php if ( 'post' == get_post_type() ) : ?>

        <ul class="post-meta list-inline">
            <li class="list-inline-item">
                <i class="fa fa-user-circle-o"></i> <a href="#">
                    <?php the_author();?></a>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-calendar-o"></i> <a href="#">
                    <?php the_date();?></a>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-tags"></i> <a href="#">
                    <?php the_category(', '); ?></a>
            </li>

            <li class="list-inline-item">
                <i class="fa fa-comments"></i> <a href="#">
                    <?php comments_number('0','1','%'); ?></a>
            </li>
        </ul>

        <?php endif; ?>

        <div class="post-body">
            <?php the_content(); ?>
        </div><!-- post-body -->
     
        <!-- Separador -->
        <hr class="mb40">

        <h4 class=" text-uppercase font500">!Si te intereso compartelo!</h4>
        <div class="media mb40">            

            <div class="media-body">
             <ul class="list-inline share-buttons">
            <li class="list-inline-item">Compartir Post:</li>
            <li class="list-inline-item">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="social-icon-sm si-dark si-colored-facebook si-gray-round" target="_blank">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="social-icon-sm si-dark si-colored-twitter si-gray-round" target="_blank">
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="social-icon-sm si-dark si-colored-linkedin si-gray-round" target="_blank">
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
               
            </div>
        </div>
        

    </div><!-- .post-content -->
</article><!-- #post-## -->
