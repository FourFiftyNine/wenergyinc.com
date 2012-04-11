<div class="well">
  <?php //dynamic_sidebar('roots-sidebar'); ?>
  <?php  
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
</div>