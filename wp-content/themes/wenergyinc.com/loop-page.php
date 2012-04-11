<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    <?php roots_post_before(); ?>
        <article>
        <?php roots_post_inside_before(); ?>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
            <footer>
                <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
            </footer>
        <?php roots_post_inside_after(); ?>
        </article>
    <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>