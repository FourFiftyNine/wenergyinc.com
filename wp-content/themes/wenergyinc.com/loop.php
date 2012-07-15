<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) { ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php } ?>

<?php /* Start loop */ ?>
<?php $count = 1; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php $class = 'clearfix'; ?>
  <?php if($count == 1): ?>
    <?php $class .= ' first' ?>
  <?php elseif($count == count($posts)): ?>
    <?php $class .= ' last'; ?>
  <?php endif; ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
    <?php roots_post_inside_before(); ?>
        <?php if ( has_post_thumbnail() ) :  ?>
          <div class="post-featured-thumb">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php endif; ?>
        <?php $class = (has_post_thumbnail()) ? 'post-content' : 'post-content no-thumb'  ?>
      <div class="<?php echo $class ?>">
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </header>
          <div class="entry-content">
            <?php $categories = get_the_category($post->ID); ?>
            <?php if($categories[0]->category_nicename != 'downloads') { ?>
             <?php if (is_archive() || is_search() || is_front_page() ) { ?>
                <?php my_excerpt(50); ?>
            <?php   } 
                    } else {
                  the_content(); ?>
            <?php } ?>
          </div>

          
          <footer>
             <a href="<?php comments_link(); ?>" class="comments">
               <?php comments_number( '<span>0</span> Comments', '<span>1</span> Comment', '% Comments' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;|
             </a>
            <time datetime="<?php the_time('Y-m-d')?>">
               <?php if($categories[0]->category_nicename == 'news'): ?>
                  <strong>published: </strong>
               <?php endif ?>
              <?php the_time('n/j/y') ?>
            </time>
            
            <?php if($categories[0]->category_nicename == 'news'): ?>
              <p class="author"><strong>source: </strong><?php echo get_the_author(); ?></p>
            <?php endif; ?>
            <a class="read-more" href="<?php get_permalink() ?>"><span class="divider">|&nbsp;&nbsp;&nbsp;&nbsp;</span>Read More <span class="arrow"></span></a>
            <?php/* $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } */ ?>
          </footer>
      </div>
    </article>
  <?php roots_post_after(); ?>
  <?php $count++; ?>
<?php endwhile; /* End loop */ ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php } ?>