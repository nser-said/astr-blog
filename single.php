<?php
/**
 * Single template.
 *
 * @package astr-blg
 */
?>

<?php get_header(); ?>

<article class="content px-3 py-5 p ">
<div id="post-<?php the_ID(); ?>" class="<?php echo implode( ' ', get_post_class() ); ?>">
<?php
//Checking if there is an article to display
    if (have_posts()) {
        // Loop to display the individual article
        while (have_posts()) {
            the_post();
            // Including the sub-template section to display the article
            get_template_part('template-parts/content', 'page');
        }
    }
    ?>
    <?php wp_link_pages(); ?>
</article>

<?php get_footer(); ?>

