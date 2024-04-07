<?php
/**
 * Index template.
 *
 * @package astr-blg
 */
?>

<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
<div class="container bottom_border m-5">

    
<div class="row">
<div class=" col-8 ">

<?php
    // Checking if there are articles to display
    if (have_posts()) {
        // Loop to display each article
        while (have_posts()) {
            the_post();
            // Including the sub-template section to display the article
            get_template_part('template-parts/content', 'archive');
        }
    } else {
        // If no articles are found
        echo '<p>No articles found.</p>';
    }
    ?>

</div>


<div class=" col-sm-4 col-md  col-4  ">

<?php  dynamic_sidebar( 'sidebar-right' ); ?>
 
</div>
</div>


<?php the_posts_pagination(); ?>

</article>

<?php get_footer(); ?>
