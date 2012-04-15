<?php
/*
Template Name: Frontpage
*/
get_header(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <div id="main" role="main" class="clearfix">
        <div id="featured-post">
          <img id="welcome-image" src="<?php echo get_template_directory_uri() . 'img/home.jpg' ?>" width="628" alt="" />
          <div id="feature-excerpt">
            <div class="text">
              <h2>Feature Title</h2>
              <p>Donec bibendum blandit faucibus. Sed adipiscing iaculis mattis. Duis hendrerit enim at nunc pulvinar viverra laoreet elit aliquet. </p>
            </div>
            <a class="btn grey" href="/link" id="feature-link">Find Out <strong>More</strong><span class="arrow"></span></a>
          </div>
        </div>
        <section id="blog" class="block">
          <header class="clearfix">
            <h1>FROM THE&nbsp;&nbsp;<strong>BLOG</strong></h1>
            <a class="read-all" href="/blog">Read All</a>
          </header>
          <?php
          $page_num = $paged;
          if ($pagenum='') $pagenum =1;
          query_posts('showposts=2&paged='.$page_num); 
          ?>
          <?php if (have_posts()) : ?>
          <?php $count == 0; ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $class = (!$count) ? 'clearfix first' : 'last clearfix'; ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
              <div class="post-featured-thumb">
                <?php 
                if ( has_post_thumbnail() ) :
                  the_post_thumbnail();
                endif;
                 ?>
              </div>
              <div class="post-content">
               <header>
                 <h2><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h2>
               </header>
               <?php my_excerpt(40); ?>
               <footer class="clearfix">
                 <a href="<?php comments_link(); ?>" class="comments">
                   <?php comments_number( '<span>0</span> Comments', '<span>1</span> Comment', '% Comments' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;|
                 </a>
                <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('n/j/y') ?>&nbsp;&nbsp;&nbsp;&nbsp;|
                </time>
                <a class="read-more" href="<?php get_permalink() ?>">Read Post <span class="arrow"></span></a>
               </footer>
              </div>
            </article>
            <?php $count++; ?>
          <?php endwhile;endif; ?>
        </section>
      </div><!-- /#main -->
      <?php get_sidebar(); ?>
    </div><!-- /#content -->
<?php get_footer(); ?>

