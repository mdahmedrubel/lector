<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lector
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

// You can start editing here -- including this comment!
if ( have_comments() ) :
?>
	<div class="lector-blog-wrapper">
		<div id="comments" class="comments comment-contents">
				<h4 class="title-border">
					<?php
						printf( // WPCS: XSS OK.
							esc_html( _nx( '01 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'lector' ) ),
							number_format_i18n( get_comments_number() ),
							'<span>' . get_the_title() . '</span>'
						);
					?>
				</h4><!-- .comments-title -->
					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h3 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lector' ); ?></h3>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lector' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lector' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

					<?php
						wp_list_comments( array(
							'style'      => 'ul',
							'short_ping' => true,
		                    'callback' => 'lector_comment_template',
						) );
					?>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lector' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lector' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lector' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
				<?php
				endif; // Check for comment navigation.
			?>
		</div><!-- #comments -->
	</div>


<?php endif; // Check for have_comments().?>
<?php 
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lector' ); ?></p>
	<?php
	endif;
    
	if (is_page() || !is_page() ) {
		lector_comment_form();
	}
?>
