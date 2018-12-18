<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asg-tek
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<hr class="mb40">
<h4 class="mb40 text-uppercase font500">Comentarios</h4>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
  

		<?php the_comments_navigation(); ?>


                
                  <?php
//Get only the approved comments 
$args = array(
    'status' => 'approve'
);
 
/* The comment Query */
    
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
    

    
    
/* Comment Loop*/
if ( $comments ) {
    foreach ( $comments as $comment ) {
        
        echo '<div class="media mb40">';
 
        if ( ($current_user instanceof WP_User) ) {
        echo get_avatar( $current_user->user_email, 32 );
        }else{
             echo '<i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>';
        }
        
        echo '<div class="media-body">';
       
        echo '<h5 class="mt-0 font400 clearfix">';
        comment_author( $comment_ID ); 
        echo '<a class="float-right" href=""><i class="fa fa-reply" aria-hidden="true"></i> Responder</a>';
        echo '</h5>';
        echo '<p>' . $comment->comment_content . '</p>';comment_date( $d, $comment_ID );
        echo '</div>';
        echo '</div>'; 

    }
} else {
    echo '<p>Sin comentarios.</p>';
}
    
    
    
?>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'asg-tek' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->