<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */

function lector_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'lector' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'lector' ), '<span class="edit-link">', '</span>' ); ?></p></li>
            <?php
            break;
        default :
        // Proceed with normal comments.
        global $post;
        ?>
        <div class="blog-comment">
            <div class="comment-contents">
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                <ul>
                    <li class="c-list">
                        <div class="c-image">
                            <?php echo get_avatar( $comment, 85 ); ?>
                        </div>
                        <div class="c-content"> 
                            <h6>
                                <a class="url" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" rel="external nofollow" class="url"><?php echo get_comment_author_link(); ?>    
                                </a>
                            </h6>
                                <span>
                                    <?php echo sprintf( esc_html__( '%1$s at %2$s', 'lector' ), get_comment_date(), get_comment_time() ) ?>
                                </span>
                                 <span class="creplay-btn">
                                    <span class="reply">
                                         <?php
                                            comment_reply_link(
                                            array_merge( $args,
                                                array(
                                                    'reply_text' => ' Reply',
                                                    'depth'      => $depth,
                                                    'max_depth'  => $args['max_depth']
                                                    )
                                                )
                                            );
                                        ?>                       
                                    </span>
                               </span>
                            <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'lector' ); ?></p>
                            <?php endif; ?>
                            <?php comment_text(); ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <?php
    break;
    endswitch; // end comment_type check
}

/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Labartisan
 */
function lector_comment_form() {
?>

<div id="respond" class="lector-comment-respond">
    <div class="add-comment">
        <div class="lector-comment">
            <?php
                $commenter = wp_get_current_commenter();
                $req = get_option( 'comment_author__mail' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';


                $fields =  array(
                    'author' => '<div class="container"><div class="row"><div class="col-lg-6"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Your Name', 'lector' ) . '"' . $aria_req . ' /></div>',

                    'email'  => '<div class="col-lg-6"><input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Your Email', 'lector' ) . '"' . $aria_req . ' /></div>',

                    'text'    => '<div class="col-lg-12"><input id="text" name="text" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Subject', 'lector' ) . '"/></div></div></div>',

                    'cookies' => '',
                );
                $comments_args = array(
                    'fields' =>  $fields,
                    'title_reply'=> __( '<h4 class="title-border">Leave a comment</h4>', 'lector' ),
                     'label_submit'  => __( 'Post Comment', 'lector' ),
                     'comment_notes_before'  => '',
                    'comment_field' => '<div class="container"><div class="row"><div class="col-lg-12"><textarea id="comment-reply" name="comment" cols="45" rows="5" placeholder="' . esc_attr__( 'Type here your comment', 'lector' ) . '" aria-required="true"></textarea></div></div></div>',
                    'comment_notes_after' => '',
                );
                comment_form($comments_args);

            ?>
        </div>          
    </div>          
 </div>
    <?php

}