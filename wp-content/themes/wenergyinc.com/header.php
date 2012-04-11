<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')):?>
    <meta name="viewport" content="width=device-width, initial-scale=.29">
  <?php else: ?>
    <meta name="viewport" content="width=device-width, initial-scale=.75">
  <?php endif; ?>
  <?php roots_stylesheets(); ?>
  <link href='<?php echo get_template_directory_uri(); ?>/css/fonts/fonts.css' rel='stylesheet' type='text/css'>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <!-- 
    <script type="text/javascript"
    src="http://www.google.com/jsapi">

    </script>
  <script type="text/javascript">
    google.load("gdata", "1.x");
    google.setOnLoadCallback(getMyFinancePortfolioFeed);

    function getMyFinancePortfolioFeed(d) {
      console.log(d);
    }
  </script>
   -->
  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
    <header id="banner" class="navbar" role="banner">
      <?php roots_header_inside(); ?>
      <div class="navbar-inner">
        <div class="<?php echo WRAP_CLASSES; ?> clearfix">

          <a class="brand" href="<?php echo home_url(); ?>/">
            <?php bloginfo('name'); ?>
          </a>
          <nav id="nav-main" class="" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
          </nav>
          <div id="search-and-social">
            <nav class="social clearfix">
              <ul>
                <!-- <li><a class="linkedin" href="http://todo-url.com"><span>linknedin</span></a></li> -->
                <li><a class="twitter" href="https://twitter.com/#!/WCenterUSAInc"><span>twitter</span></a></li>
                <li><a class="facebook" href="http://www.facebook.com/pages/Wellness-Center-USA-Inc/197989203645148"><span>facebook</span></a></li>
                <li><a class="youtube" href="http://www.youtube.com/user/WellnessCenterUSAInc"><span>youtube</span></a></li>
              </ul>
            </nav>
            <?php get_search_form() ?>
          </div>
        </div>
      </div>
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="" role="document">