<?php
/*
Template Name: Custom
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" role="main" class="clearfix">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <img id="welcome-image" src="<?php echo get_template_directory_uri() . 'img/home.jpg' ?>" alt="">
        <a class="btn orange contact-us" href="/contact">Contact Us</a>

        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <div id="second" class="row clearfix">
        <aside id="companies" role="complementary">
          <h2>Visit our Companies:</h2>
          <a class="company" href="http://aminofactory.com">
            <div class="img">
              <img src="<?php echo get_template_directory_uri() . 'img/amino.jpg' ?>" alt="" />
            </div>
            <div class="name clearfix">
              <span class="website">AminoFactory.com</span>
              <span class="more">More...</span>
            </div>
          </a>
          <h3>Pending</h3>
          <a class="company cns-wellness" href="http://cns-wellness.com">
            <div class="img">
              <img src="<?php echo get_template_directory_uri() . 'img/cns.jpg' ?>" alt="" />
            </div>
            <div class="name clearfix">
              <span class="website">Cognitive Neuro Sciences</span>
              <span class="more">More...</span>
            </div>
          </a>
        </aside><!-- /#sidebar -->
        <?php
        $category = get_category_by_slug('press-releases'); 
        $id = $category->term_id;

        $args = array( 'numberposts' => 2, 'category' => $id );
        $lastposts = get_posts( $args ); 
        ?>
        
        <section id="<?php echo $category->slug ?>" class="block">
          <header>
            <h1><a href="/press-releases"><?php echo $category->name; ?></a></h1>
          </header>
          <?php $count = 0; ?>
          <?php foreach($lastposts as $post) : setup_postdata($post); ?>
            <article <?php if(!$count): echo 'class="first"'; endif; ?>>
              <header>
                <h2><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h2>
              </header>
              <p><?php my_excerpt(22); ?></p>
            </article>
            <?php $count++; ?>
          <?php endforeach; ?>
          <footer>
            <a class="btn orange" href="/<?php echo $category->slug ?>">View All</a>
          </footer>
        </section>

      </div>
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>

