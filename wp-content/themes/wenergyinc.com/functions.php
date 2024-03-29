<?php // https://github.com/retlehs/roots/wiki

if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/roots-config.php');      // config
require_once locate_template('/inc/roots-utils.php');       // utility functions

define('WP_BASE', wp_base_dir());
define('THEME_NAME', next(explode('/themes/', get_template_directory())));
define('RELATIVE_PLUGIN_PATH', str_replace(site_url() . '/', '', plugins_url()));
define('FULL_RELATIVE_PLUGIN_PATH', WP_BASE . '/' . RELATIVE_PLUGIN_PATH);
define('RELATIVE_CONTENT_PATH', str_replace(site_url() . '/', '', content_url()));
define('THEME_PATH', RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);

require_once locate_template('/inc/roots-activation.php');  // activation
require_once locate_template('/inc/roots-cleanup.php');     // cleanup
require_once locate_template('/inc/roots-scripts.php');     // modified scripts output
require_once locate_template('/inc/roots-htaccess.php');    // rewrites for assets, h5bp htaccess
require_once locate_template('/inc/roots-hooks.php');       // hooks
require_once locate_template('/inc/roots-actions.php');     // actions
require_once locate_template('/inc/roots-widgets.php');     // widgets
require_once locate_template('/inc/roots-custom.php');      // custom functions

// set the maximum 'Large' image width to the maximum grid width
// http://wordpress.stackexchange.com/q/11766
if (!isset($content_width)) { $content_width = 940; }

function roots_setup() {
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // tell the TinyMCE editor to use editor-style.css
  // if you have issues with getting the editor to show your changes then
  // use this instead: add_editor_style('editor-style.css?' . time());
  add_editor_style('editor-style.css');

  // http://codex.wordpress.org/Post_Thumbnails
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);

  // http://codex.wordpress.org/Post_Formats
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menu('primary_navigation', 'Primary Navigation');
  register_nav_menu('footer_navigation', 'Footer Navigation');
  // register_nav_menus(array(
  //   'primary_navigation' => __('Primary Navigation'),
  //   'footer_navigation' => __('Footer Navigation')
  // ));

}

add_action('after_setup_theme', 'roots_setup');

// http://codex.wordpress.org/Function_Reference/register_sidebar
function roots_register_sidebars() {
  $sidebars = array('Sidebar', 'Footer');

  foreach($sidebars as $sidebar) {
    register_sidebar(
      array(
        'id'            => 'roots-' . sanitize_title($sidebar),
        'name'          => __($sidebar, 'roots'),
        'description'   => __($sidebar, 'roots'),
        'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></article>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      )
    );
  }
}

add_action('widgets_init', 'roots_register_sidebars');

// return post entry meta information
function roots_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'roots'), get_the_date(), get_the_time()) .'</time>';
  echo '<p class="byline author vcard">'. __('Written by', 'roots') .' <a href="'. get_author_posts_url(get_the_author_meta('id')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}

// BEGIN MY FUNCTIONS

// OLD GET NAV
function get_sidenav($post) {
  if ($post->post_parent) {
      $ancestors = get_post_ancestors($post->ID);
      $root      = count($ancestors)-1;
      $parent    = $ancestors[$root];
  } else {
      $parent = $post->ID;
  }
  // $meta = get_post_meta($parent, 'title');
  $children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0");
  $sidenav = '';
  if ($children) {
  $sidenav .= '<nav id="sidenav">
      <ul>
        <li><a>' . get_the_title($parent) . '</a></li>'
        . $children .
      '</ul>
  </nav>';
  }

  return $sidenav;
}

// function custom_excerpt_length( $length ) {
//   return 25;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// excerpt more link
function new_excerpt_more($more) {
       global $post;
  return ' <a href="'. get_permalink($post->ID) . '">Read More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function dump($var) {
  $s  = '<pre>';
  $s .= var_dump($var);
  $s .= '</pre>';

  return $s;
}

class Excerpt {

  // Default length (by WordPress)
  public static $length = 55;

  // So you can call: my_excerpt('short');
  public static $types = array(
      'short' => 25,
      'regular' => 55,
      'long' => 100
    );

  /**
   * Sets the length for the excerpt,
   * then it adds the WP filter
   * And automatically calls the_excerpt();
   *
   * @param string $new_length 
   * @return void
   * @author Baylor Rae'
   */
  public static function length($new_length = 55) {
    Excerpt::$length = $new_length;

    add_filter('excerpt_length', 'Excerpt::new_length');

    Excerpt::output();
  }

  // Tells WP the new length
  public static function new_length() {
    if( isset(Excerpt::$types[Excerpt::$length]) )
      return Excerpt::$types[Excerpt::$length];
    else
      return Excerpt::$length;
  }

  // Echoes out the excerpt
  public static function output() {
    the_excerpt();
  }

}

// An alias to the class
function my_excerpt($length = 55) {
  Excerpt::length($length);
}

// Allows classes on footer navigation (doesnt track menu item id)
remove_filter('nav_menu_item_id', '_nav_menu_item_id_use_once');

