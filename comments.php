<?php
/**
 * Template for displaying the comments section.
 *
 * @package astr-blg
 */
?>

<div class="comments-wrapper">

    <div class="comments" id="comments">
        
        <div class="comments-header">
            <h2 class="comment-reply-title">
            <?php
            // Checking for comments
            if (!have_comments()) {
                echo "Leave a comment";
            } else {
                echo get_comments_number() . " comments";
            };
            ?>
            </h2><!-- .comments-title -->
        </div> <!-- .comments-header -->

        <div class="comments-inner">
            
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div',
                    'short_ping' => true,
                )
            );
            ?>
        </div> <!-- .comment-inner -->
    </div> <!-- .comments -->

    <hr class="" aria-hidden="true">

    <?php
    // Checking if comments are open
    if (comments_open()) {
        // Displaying a form for adding a new comment
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 class="comment-reply-title" id="reply-title">',
                'title_reply_after' => '</h2>',
            )
        );
    }
    ?>
</div>









 










