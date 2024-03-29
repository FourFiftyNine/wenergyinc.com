<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php roots_post_inside_before(); ?>
      <header class="clearfix">
        <?php $cat = get_the_category(); ?>
        <?php if ( has_post_thumbnail() && $cat[0]->name != 'Recent Updates') :  ?>
          <div class="post-featured-thumb">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php endif; ?>
        <?php $class = (has_post_thumbnail()) ? 'post-content' : 'post-content no-thumb'  ?>
        <div class="<?php echo $class; ?>">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="post-meta clearfix">
             <a href="<?php comments_link(); ?>" class="comments">
               <?php comments_number( '<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;
             </a>
            <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('n/j/y') ?>
            </time>
          </div>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style ">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
          <a class="addthis_counter addthis_pill_style"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f8deea56a2f2185"></script>
          <!-- AddThis Button END -->
        </div>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
      <?php comments_template(); ?>
      <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>