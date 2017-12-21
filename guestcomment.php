<?php
/**
 * my comment template
 *
 * Displays page/post comments.
 *
 * @since 1.0.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div class="shuoshuo">
<ul class="archives-monthlisting">

<?php 
	if ( have_comments() ) : ?>
		<ol class="comments-list">
		<?php
			 wp_list_comments(array(
			'type' => comment,
			'callback' => aurelius_comment,
			'per_page' => 10, //Allow comment pagination
			'reverse_top_level' => true //Show the oldest comments at the top of the list
			)
			);
		?>
		</ol>
		<?php

		the_comments_pagination( array(
			'prev_text' => esc_html__( '&laquo;', 'fastblog' ),
			'next_text' => esc_html__( '&raquo;', 'fastblog' ),
		) );
	endif;
	?>

</ul>
</div>

<!-- comments-area -->
<div id="comments" class="comments-area">
	<?php
	

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'fastblog' ); ?></p>
	<?php
	endif;
	
	$fields =  array(
	'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    	'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	);
	$comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Send', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( '基佬,留下你的想法', 'textdomain' ),
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
        'comment_notes_after' => '留言将在审核后显示',
	'fields' => $fields,
);
	comment_form( $comments_args );
	?>
</div><!-- /comments-area -->

