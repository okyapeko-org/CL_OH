<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	

<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
</ul>
			</div><!-- #main-item-kuchi -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>

<?php $args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => 'mytheme_comment',
    'end-callback'      => null,
    'type'              => 'all',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => ''
    );
?>

<?php wp_list_comments($args) ;?>

<?php if(function_exists('wp_pagenavi')) {
wp_pagenavi();
} else {
vicuna_paging_link('next_label=Newer Entries&prev_label=Older Entries&indent=2');
} ?>


<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>



<?php $defaults = array(




     'comment_field'        => '<dl class="clearfix"><dt><label for="comment">' . _x( 'Comment', 'noun' ) . '</label></dt><dd><textarea id="comment" name="comment" aria-required="true"></textarea></dd></dl>',
     'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
     'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
     'comment_notes_before' => '',
     'comment_notes_after'  => '',
     'id_form'              => 'commentform',
     'id_submit'            => 'submit',
     'title_reply'          => '回答はコチラからどうぞ',
     'title_reply_to'       => __( 'Leave a Reply to %s' ),
     'cancel_reply_link'    => __( 'Cancel reply' ),
     'label_submit'         => __( 'Post Comment' ),

     'fields' => array(
          'author' => '<dl class="clearfix">' . '<dt>' . __( 'Name' ) . '</dt> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                 '<dd><input id="author" name="author" type="text" value="キャッシング名無し" size="30"' . $aria_req . ' /></dd></dl>',/* ここは投稿者名のフォーム */
          'email'  => '',/* ここはメールアドレスのフォーム。文言を変えてます。 */
          'url'    => '',)/* ここはURLのフォーム。削除している。 */

	 
	 );
?>
<?php comment_form( $defaults ); ?>


