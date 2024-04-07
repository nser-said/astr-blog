<?php
/**
 * Search template.
 *
 * @package astr-blg
 */
?>

<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    
    <?php while (have_posts()) : the_post() ?>

    <div class="container">
        <div class="post mb-5">
            <div class="media">
                <!-- Display the thumbnail image if available -->
                <?php if (has_post_thumbnail()) : ?>
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
                <?php endif; ?>
                <div class="media-body">
                    <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="meta mb-1">
                        <span class="date"><?php the_date(); ?></span>
                        <span class="comment"><a href="#"><?php comments_number(); ?></a></span>
                    </div>
                    <div class="intro"><?php the_excerpt(); ?></div>
                    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
                </div><!--//media-body-->
            </div><!--//media-->
        </div>
    </div>

    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>

</article>

<?php get_footer(); ?>
