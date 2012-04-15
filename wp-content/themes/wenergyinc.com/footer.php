<?php /*    <div id="third"  class="row clearfix container">
      <?php 
        $category = get_category_by_slug('news'); 
        $id = $category->term_id;

        $args = array( 'numberposts' => 2, 'category' => $id);
        $newsPostArray = get_posts( $args );
      ?>
      
      <section id="<?php echo $category->slug ?>" class="block">
          <header>
            <h1><a href="/<?php echo $category->slug ?>"><?php echo $category->name; ?> & Media</a></h1>
          </header>
          <?php foreach($newsPostArray as $post) : setup_postdata($post); ?>
            <article>
              <header>
                <h2><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h2>
              </header>
              <?php my_excerpt(20); ?>
            </article>
          <?php endforeach; ?>
          <footer>
            <a class="btn orange" href="/<?php echo $category->slug ?>">View All</a>
          </footer>
      </section>
      <aside id="youtube" class="block">
        <header>
          <h1>Youtube Videos</h1>
          <article>
<!--             <header>
            </header> -->
            <h3>Introduction to CNS-Wellness: Part 1</h3>
            <a href="http://www.youtube.com/embed/DBMt2r9BIvY">
              <img src="http://img.youtube.com/vi/DBMt2r9BIvY/0.jpg" />
              <img class="play-button" src="<?php echo get_template_directory_uri() . 'img/play.png' ?>" alt="">
            </a>
            <h3>Introduction to CNS-Wellness: Part 2</h3>
            <a href="http://www.youtube.com/embed/yEdR_5o8JdE">
              <img src="http://img.youtube.com/vi/yEdR_5o8JdE/0.jpg" />
              <img class="play-button" src="<?php echo get_template_directory_uri() . 'img/play.png' ?>" alt="">
            </a>
          </article>
        </header>
      </aside>
      <!-- STOCKTWITS -->
      <!-- <aside id="stocktwits">
        <script type="text/javascript" src="http://stocktwits.com/addon/widget/1/stocktwits-widget.min.js"></script>
        <script type="text/javascript">
        StockTwitsWidget.load({ stream: '$yhoo', title: 'Worthington Energy', style: { width: '300', height: '318px' } });
        </script>
      </aside> -->

      <aside id="twitter">
        <header>
          <h1>Twitter Feed</h1>
        </header>
        <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 8,
          interval: 30000,
          width: 298,
          height: 288,
          theme: {
            shell: {
              background: '#FFFFFF',
              color: '#222222'
            },
            tweets: {
              background: '#FFFFFF',
              color: '#222222',
              links: '#FF7F00'
            }
          },
          features: {
            avatars: true,
            scrollbar: true,
            loop: false,
            live: false,
            behavior: 'all'
          }
        }).render().setUser('cnswellness').start();
        </script>
      </aside>
    </div><!-- /#third --> 
    */ ?>
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" role="contentinfo">
      <header>
        <div class="container clearfix">
          <?php get_search_form() ?>
          <nav class="social white clearfix">
            <h2>Follow Us</h2>
            <ul>
              <!-- <li><a class="linkedin" href="http://todo-url.com"><span>linknedin</span></a></li> -->
              <li><a class="twitter" href="https://twitter.com/#!/WCenterUSAInc"><span>twitter</span></a></li>
              <li><a class="facebook" href="http://www.facebook.com/pages/Wellness-Center-USA-Inc/197989203645148"><span>facebook</span></a></li>
              <li><a class="youtube" href="http://www.youtube.com/user/WellnessCenterUSAInc"><span>youtube</span></a></li>
            </ul>
          </nav>
        </div>
      </header>    
      <section id="main-footer" class="container clearfix">
        <aside class="col" id="footer-brand">
          <a class="brand" href="<?php echo home_url(); ?>/">
            <?php bloginfo('name'); ?>
          </a>
          <p class="contact-info">
            1014 E. Algonquin Rd – Suite 111<br>
            Schaumburg, IL 60173 <br>
            <br>
            T | (847) 925-1885<br>
            F | (847) 925-1859<br>
          </p>
          <a class="btn orange" href="/contact">Email Us</a>
        </aside>
        <nav id="nav-footer" class="" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
        </nav>
        <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
      </section>  
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
<script type="text/javascript">
  if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
      viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
      document.body.addEventListener('gesturestart', function() {
        viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
      }, false);
    }
  }
</script>
</body>
</html>