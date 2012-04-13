<?php
/*
Template Name: Custom
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" role="main" class="clearfix">
        <div id="featured-post">
          <img id="welcome-image" src="<?php echo get_template_directory_uri() . 'img/home.jpg' ?>" width="628" alt="">
            <?php //get_template_part('loop', 'page'); ?>
            <div id="feature-excerpt">
              <div class="text">
                <h2>Feature Title</h2>
                <p>Donec bibendum blandit faucibus. Sed adipiscing iaculis mattis. Duis hendrerit enim at nunc pulvinar viverra laoreet elit aliquet. </p>
              </div>
              <a class="btn grey" href="/link" id="feature-link">Find Out <strong>More</strong><span class="arrow"></span></a>
            </div>
        </div>
        <?php roots_loop_before(); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <?php get_sidebar(); ?>
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>

