<?php
/**
 * Page template.
 *
 * @package astr-blg
 */
?>

<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <div class='container'>
        <?php 
        // Checking if there are pages to display
        if (have_posts()) {
            // Loop to display each page
            while (have_posts()) {
                the_post();
                // Including the sub-template section to display the page
                get_template_part('template-parts/content', 'page');
            }
        }
        ?>
    </div>
</article>

<?php get_footer(); ?>
