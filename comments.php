<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="bt-comment-wrapper clearfix">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h6 class="bt-heading-comment"><?php comments_number( esc_html__('Comment (0)', 'excitor'), esc_html__('Comment (1)', 'excitor'), esc_html__('Comments (%)', 'excitor') ); ?></h6>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation col-xs-12 col-sm-12 col-md-12 col-lg-12" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'excitor' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'excitor' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'excitor' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'avatar_size' => 90,
				'callback' => 'excitor_custom_comment',
			) );
		?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'excitor' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'excitor' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'excitor' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'excitor' ); ?></p>
	<?php endif; ?>

	<?php
		$commenter = wp_get_current_commenter();
		
		$fields =  array(
			'author' => '<div class="row"><div class="col-md-4 comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="'.__('Name*','excitor').'" aria-required="true" /></div>',
			'email' => '<div class="col-md-4 comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" placeholder="'.__('Email*','excitor').'" aria-required="true" /></div>',
			'url' => '<div class="col-md-4 comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="'.__('Website','excitor').'" /></div></div>',
		);
		
		$args = array(
			'id_form'           => 'commentform',
			'id_submit'         => 'submit',
			'class_submit'      => 'submit',
			'name_submit'       => 'submit',
			'title_reply'       => '<span class="bt-label-reply">'.esc_html__( 'Leave A Comment', 'excitor' ).'</span>',
			'title_reply_to'    => '<span class="bt-label-reply">'.esc_html__( 'Leave A Reply to %s', 'excitor' ).'</span>',
			'cancel_reply_link' => esc_html__( 'Cancel Reply', 'excitor' ),
			'label_submit'      => esc_html__( 'Send Comment', 'excitor' ),
			'format'            => 'xhtml',

			'comment_field' =>  '<div class="comment-form-comment"><textarea id="comment" name="comment" cols="60" rows="6" aria-required="true" placeholder="'.esc_attr__('Comment','excitor').'">' . '</textarea></div>',

			'must_log_in' => '<div class="must-log-in">'.esc_html__('You must be', 'excitor').' <a href="'.wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ).'">'.esc_html__('logged in', 'excitor').'</a> '.esc_html__('to post a comment.', 'excitor').'</div>',

			'logged_in_as' => '<div class="logged-in-as">'.esc_html__('Logged in as', 'excitor').' <a class="bt-name" href="'.admin_url( 'profile.php' ).'">'.$user_identity.'</a>. <a href="'.wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ).'" title="'.esc_attr__('Log out of this account', 'excitor').'">'.esc_html__('Log out?', 'excitor').'</a></div>',

			'comment_notes_before' => '',

			'comment_notes_after' => '',

			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		  );

		comment_form($args);
	?>

</div><!-- #comments -->
