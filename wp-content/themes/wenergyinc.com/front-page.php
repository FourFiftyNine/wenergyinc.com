<?php
/*
Template Name: Frontpage
*/
get_header(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <div id="main" role="main" class="clearfix">
        <?php
        $page_num = $paged;
        if ($pagenum='') $pagenum =1;
        query_posts('showposts=1&category_name=featured&paged='.$page_num); 
        ?>
        <?php if (have_posts()) : ?>
        <?php $count == 0; ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $class = (!$count) ? 'clearfix first' : 'last clearfix'; ?>
   
              <?php 
              if ( has_post_thumbnail() ) :
                // the_post_thumbnail();
              endif;
               ?>
       

        <div id="featured-post">
          <img id="welcome-image" src="<?php echo get_template_directory_uri() . 'img/home.jpg' ?>" width="628" alt="" />
          <div id="feature-excerpt">
            <div class="text">
              <h2><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
              <p><?php my_excerpt(12); ?> </p>
            </div>
            <a class="btn grey" href="<?php echo get_permalink() ?>" id="feature-link">Find Out <strong>More</strong><span class="arrow"></span></a>
          </div>
        </div>
          <?php $count++; ?>
        <?php endwhile;endif; ?>
        <section id="blog" class="block">
          <header class="clearfix">
            <h1>PRESS&nbsp;&nbsp;<strong>RELEASES</strong></h1>
            <a class="read-all" href="/category/press-releases">Read All</a>
          </header>
          <?php
          $page_num = $paged;
          if ($pagenum='') $pagenum =1;
          query_posts('showposts=2&category_name=press-releases&paged='.$page_num); 
          ?>
          <?php if (have_posts()) : ?>
          <?php $count == 0; ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $class = (!$count) ? 'clearfix first' : 'last clearfix'; ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
              <?php 
              if ( has_post_thumbnail() ) : ?>
              <div class="post-featured-thumb">

                  <?php the_post_thumbnail(); ?>

              </div>
              <?php
              endif;
               ?>
              <?php $class = (has_post_thumbnail()) ? 'post-content' : 'post-content no-thumb'  ?>
              <div class="<?php echo $class ?>">
               <header>
                 <h2><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
               </header>
               <?php my_excerpt(40); ?>
               <footer class="clearfix">
                 <a href="<?php comments_link(); ?>" class="comments">
                   <?php comments_number( '<span>0</span> Comments', '<span>1</span> Comment', '% Comments' ); ?>&nbsp;&nbsp;&nbsp;&nbsp;|
                 </a>
                <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('n/j/y') ?>&nbsp;&nbsp;&nbsp;&nbsp;|
                </time>
                <a class="read-more" href="<?php echo get_permalink() ?>">Read Post <span class="arrow"></span></a>
               </footer>
              </div>
            </article>
            <?php $count++; ?>
          <?php endwhile;endif; ?>
        </section>
        <div id="bottom" class="clearfix">
          <?php /*
            $category = get_category_by_slug('downloads'); 
            $id = $category->term_id;

            $args = array( 'numberposts' => 4, 'category' => $id);
            $downloads = get_posts( $args );
          ?>
          <section id="<?php echo $category->slug ?>" class="block">
              <header>
                <h1><a href="/<?php echo $category->slug ?>">POPULAR&nbsp;&nbsp;<strong>DOWNLOADS</strong></a></h1>
              </header>
              <?php foreach($downloads as $post) : setup_postdata($post); ?>
                <article>
                  <header>
                    <h2><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h2>
                  </header>
                  <?php the_content(); ?>
                </article>
              <?php endforeach; ?>
              <footer>
                <a  href="/<?php echo $category->slug ?>">View More</a>
              </footer>
          </section>
          */ ?>
          <?php 
            $category = get_category_by_slug('news'); 
            $id = $category->term_id;

            $args = array( 'numberposts' => 3, 'category' => $id);
            $pressReleases = get_posts( $args );
          ?>
          <section id="<?php echo $category->slug ?>" class="block">
              <header>
                <h1><a href="/<?php echo $category->slug ?>">WE&nbsp;&nbsp;<strong>NEWS</strong></a></h1>
              </header>
              <?php foreach($pressReleases as $post) : setup_postdata($post); ?>
                <article>
                  <header>
                    <h2><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h2>
                  </header>
                  <?php my_excerpt(13); ?>
                </article>
              <?php endforeach; ?>
              <footer>
                <a  href="/<?php echo $category->slug ?>">View More</a>
              </footer>
          </section>
          <section class="block" id="stocktwits">
            <script type="text/javascript" src="http://stocktwits.com/addon/widget/1/stocktwits-widget.min.js"></script>
            <script type="text/javascript">
            StockTwitsWidget.load({ stream: '@worthingtonenergy', title: 'Worthington Energy', style: { width: '300', height: '350' } });
            </script>
          </section>
        </div>
      </div><!-- /#main -->
      <?php get_sidebar(); ?>
    </div><!-- /#content -->
<?php get_footer(); ?>

