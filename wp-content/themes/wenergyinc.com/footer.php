  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" role="contentinfo">
      <header>
        <div class="container clearfix">
          <a href="#" class="btn grey to-top">BACK TO THE <strong>TOP</strong><span class="arrow"></span></a>
        </div>
      </header>    
      <section id="main-footer" class="container clearfix">
        <aside class="col" id="footer-brand">
          <a class="brand" href="<?php echo home_url(); ?>/">
            <?php bloginfo('name'); ?>
          </a>
          <p class="contact-info">
            <strong>Worthington Energy, Inc.</strong> <br />
            220 Montgomery Street, Suite 1094 <br />
            San Francisco, CA 94104 <br />
            <strong>T</strong>: (415) 529-3480&nbsp;&nbsp;<strong>F</strong>: (415) 592-5990
          </p>
          <a href="mailto:info@wenergyinc.com" class="email"></a>  
          <nav class="social clearfix">
            <ul>
              <!-- <li><a class="linkedin" href="http://todo-url.com"><span>linknedin</span></a></li> -->
              <li><a class="email" href="ir@wenergyinc.com" class="email"></a>  </li>
              <li><a class="twitter" href="http://twitter.com/wenergyinc"><span>twitter</span></a></li>
              <li><a class="facebook" href="http://www.facebook.com/WorthingtonEnergy"><span>facebook</span></a></li>
              <li><a class="youtube" href="http://www.youtube.com/wenergyinc"><span>youtube</span></a></li>
            </ul>
          </nav>
        </aside>
        <nav id="nav-footer" class="" role="navigation">
          <?php //wp_reset_query(); ?>
          <?php wp_nav_menu(array('menu' => 'Main Navigation')); ?>
        </nav>
        <p class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><a class="privacy-link" href="/legal">Legal</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/disclaimer">Disclaimer</a></p>
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