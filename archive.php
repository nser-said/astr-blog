<?php
/**
 * Template for displaying the archive page.
 *
 * @package astr-blg
 */
?>

<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php 
    // Check if there are any articles to display.
    if (have_posts()) {
        // A template for displaying each article in the archive.
        while (have_posts()) {
            the_post();
            // Include the sub-template section to display the article.
            get_template_part('template-parts/content', 'archive');
        }
    } else {
        // If articles are not found
        echo '<p>No articles found.</p>';
    }
    ?>
</article>

<?php get_footer(); ?>
