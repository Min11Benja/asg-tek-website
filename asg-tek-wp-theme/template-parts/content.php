<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asg-tek
 */

?>

<article id="post-<?php the_ID(); ?>" class="article-post mb70">

    <div class="post-content">

        <?php
		if ( is_singular() ) :
			the_title( '<h2 class="post-title">', '</h2>' );
		else :
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

        <?php if ( has_post_thumbnail() ) { // check for feature image ?>
        <a class="post-thumb mb10" href="<?php the_permalink(); ?>">
            <img src='<?php the_post_thumbnail_url();?>' alt='post thumbnail' class='img-fluid mb30'>
            <div class="post-overlay">
                <span>ASGT EK</span>
            </div>
        </a>
        <!--thumbnail-->
        <?php } ?>

        <?php
		if ( 'post' === get_post_type() ) :?>


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
        <!-- .entry-meta -->
        <p>
            <?php the_excerpt('new_excerpt_more'); ?>
        </p>
        <!--END Post Excerpt-->
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">leer más</a>

        <!--post-read-more boton-->
        <?php endif; ?>

    </div>
    <!--.post-content-->


</article>
