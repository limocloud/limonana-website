<?php
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
        This post is password protected. Enter the password to view comments.
    <?php
        return;
        }
    ?>
 
<?php if ( have_comments() ) : ?>
 

    <h4 id="comments"><?php comments_number('No Comments ', 'One Comments ', '% Comments ' );?></h4>


    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>
 
    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>

    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>

    <?php else : // this is displayed if there are no comments so far ?>

 
    <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed ?>
    <p>Comments are closed.</p>

    <?php endif; ?>
 
    <?php endif; ?>

 
    <?php if ( comments_open() ) : ?>

<div id="respond">

    <h2><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>


    <div class="cancel-comment-reply">
        <?php cancel_comment_reply_link(); ?>
    </div>


    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
 

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form_comment">
 
        <?php if ( is_user_logged_in() ) : ?>
 
            <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>
            
            <input type="text" name="author" id="author"  placeholder="Author" required/>       
            <input type="text" name="email" id="email" type="email" placeholder="Email" required />

        <?php endif; ?>

        <!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

         <div>
            <textarea placeholder="Your Message" name="comment" id="comment" required></textarea>
        </div>

         <div>
            <input type="submit" name="Submit" value="Send Comment" class="button">
            <?php comment_id_fields(); ?>
        </div>

        <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>

</div>

<?php endif; ?>