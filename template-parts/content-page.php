
<div class="container">
    <header class="content-header">
        <!-- Displaying the date, author, and number of comments.-->
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <span class="tag"><i class="fa fa-tag"></i> <?php the_author(); ?></span>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
        </div>
    </header>

    <!-- Display the content of the article or page.-->
    <?php the_content(); ?>

    <!-- Embedding the comments form -->
    <?php comments_template(); ?>
</div>

