<aside id="sidebar">
  <?php 
    $category = get_category_by_slug('recent-updates'); 
    $id = $category->term_id;

    $args = array( 'numberposts' => 3, 'category' => $id);
    $pressReleases = get_posts( $args );
  ?>
  <section id="<?php echo $category->slug ?>" class="block">
      <header>
        <h1><a href="/<?php echo $category->slug ?>"><strong>WE</strong>&nbsp;&nbsp;RECENT UPDATES</a></h1>
      </header>
      <?php foreach($pressReleases as $post) : setup_postdata($post); ?>
        <article>
          <header>
            <h2><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a></h2>
            <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('n/j/y') ?>
            </time>
          </header>
          <?php /* TODO 
          <div class="clearfix">
            <?php if ( has_post_thumbnail() ) :  ?>
              <div class="post-featured-thumb">
                <?php the_post_thumbnail(array(64,64)); ?>
              </div>
            <?php endif; ?>
          </div>
          */ ?>
          <?php my_excerpt(20); ?>
        </article>
      <?php endforeach; ?>
      <footer>
        <a  href="/<?php echo $category->slug ?>">View More</a>
      </footer>
  </section>
  <section id="stock-quote" class="block">
      <header>
        <h1><strong>STOCK</strong>&nbsp;&nbsp;QUOTE</h1>
      </header>
        <script src="http://charts.wikinvest.com/wikinvest/wikichart/javascript/scripts.php" type="text/javascript"></script><div id="wikichartContainer_7A3F02E4-9B87-8656-7E87-60B4B5860997"><div style="width: 100%; text-align: center; vertical-align: center; margin-top: 100px;"><a href="http://get.adobe.com/flashplayer/"><img src="http://cdn.wikinvest.com/wikinvest/images/adobe_flash_logo.gif" alt="Flash" style="border-width: 0px;"/><br/>Flash Player 9 or higher is required to view the chart<br/><strong>Click here to download Flash Player now</strong></a></div></div><script type="text/javascript">if (typeof(embedWikichart) != "undefined") {embedWikichart("http://charts.wikinvest.com/WikiChartMini.swf?wmode=transparent","wikichartContainer_7A3F02E4-9B87-8656-7E87-60B4B5860997","100%","200",{"showAnnotations":"true","startDate":"29-09-2011","ticker":"WGAS","liveQuote":"true","endDate":"29-03-2012","embedCodeDate":"2012-3-29"},{});}</script><div style="font-size:9px;text-align:right;width:95%;font-family:Verdana"><a href="http://www.wikinvest.com/chart/WGAS" style="text-decoration:underline; color:#0000ee;">View the full WGAS chart</a> at <a href="http://www.wikinvest.com/">Wikinvest</a></div>
  </section>
  <?php /*
  <section class="block" id="twitter">
      <header>
        <h1><strong>WE</strong>&nbsp;&nbsp;ON TWITTER</h1>
      </header>
      <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
      new TWTR.Widget({
        version: 2,
        type: 'profile',
        rpp: 8,
        interval: 30000,
        width: 298,
        height: 272,
        theme: {
          shell: {
            background: 'none',
            color: '#222222'
          },
          tweets: {
            background: 'none',
            color: '#222222',
            links: '#7b2353'
          }
        },
        features: {
          avatars: true,
          scrollbar: true,
          loop: false,
          live: false,
          behavior: 'all'
        }
      }).render().setUser('wenergyinc').start();
      </script>
  </section>
  */ ?>
  <section class="block" id="contact-we">
    <header>
      <h1>CONTACT <strong>WE</strong></h1>
    </header>
    <article>
      <strong>Direct Contact Info:</strong> <br /> 
      <strong>Worthington Energy, Inc.</strong> <br /><br />
      220 Montgomery Street, Suite 1094 <br />
      San Francisco, CA 94104 <br />
      <strong>T</strong>:(415) 529-3480 <br />
      <strong>F</strong>:(415) 592-5990
    </article>
  </section>
  <?php //dynamic_sidebar('roots-sidebar'); ?>
  <?php  /*
  // dump($post);
  $categories = get_the_category($post->ID);
  $catSlug = $categories[0]->slug;

    if ($post->post_parent):
        $parentPage = get_page($post->post_parent);
        $slug = $parentPage->post_name;
    elseif ($catSlug == 'press-releases'):
        $slug = 'investor-relations';
    else:
        $slug = $post->post_name;
    endif;
  ?>
  <?php if($post->post_name != 'contact'): ?>
    <nav id="sidenav">
        <?php wp_nav_menu(array('menu' => $slug)); ?>
    </nav>
  <?php else: ?>
  <nav id="sidenav">
      <?php wp_nav_menu(array('menu' => 'about-us')); ?>
  </nav>
    <nav id="sidenav">
        <?php wp_nav_menu(array('menu' => 'investor-relations')); ?>
    </nav>
  <?php endif; ?>
  */ ?>
</aside>