<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
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
    <div id="header-border"></div>
    <header id="banner" class="navbar" role="banner">
      <?php roots_header_inside(); ?>
      <div class="<?php echo WRAP_CLASSES; ?> clearfix">
        <a class="brand" href="<?php echo home_url(); ?>/">
          <?php bloginfo('name'); ?>
        </a>
        <div id="search-and-social">
          <nav class="social clearfix">
            <ul>
              <!-- <li><a class="linkedin" href="http://todo-url.com"><span>linknedin</span></a></li> -->
              <li><a class="twitter" href="http://twitter.com/wenergyinc"><span>twitter</span></a></li>
              <li><a class="facebook" href="http://www.facebook.com/WorthingtonEnergy"><span>facebook</span></a></li>
              <li><a class="youtube" href="http://www.youtube.com/wenergyinc"><span>youtube</span></a></li>
            </ul>
          </nav>
          <?php get_search_form() ?>
        </div>
        <div id="contact-info">
          <p id="phone"><strong>T</strong>: (415) 529-3480</p>
          <!-- <p id="fax"></p> -->
          <p id="email"><strong>E</strong>: <a href="mailto:info@wenergyinc.com">info@wenergyinc.com</a></p>
        </div>
      </div>
      <div id="nav-bar-container">
        <nav id="nav-main" class="container" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
        </nav>
      </div>
    </header>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="" role="document">