<?php
/*
Template Name: Home
*/
<?php get_header(); ?>
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
      <aside id="companies" role="complementary">
        <a class="company" href="http://aminofactory.com">
          <img src="<?php echo get_template_directory_uri() . 'img/amino.jpg' ?>" alt="" />
          <div class="name">AminoFactory.com
            <span class="more">More...</span>
          </div>
        </a>
        <a class="company" href="http://cns-wellness.com">
          <img src="<?php echo get_template_directory_uri() . 'img/cns.jpg' ?>" alt="" />
          <div class="name">Cognitive Neuro Sciences
            <span class="more">More...</span>
          </div>
        </a>

      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>