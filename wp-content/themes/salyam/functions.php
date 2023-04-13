<?php

/**
 * Salyam-Theme
 * 
 */

if (!function_exists('salyamScripts')) :
  function salyamScripts()
  {

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_register_style('bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap/font/bootstrap-icons.css', array(), '1.0.0', 'all');
    wp_register_style('bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-select.min.css', array(), '1.0.0', 'all');
    wp_register_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all');
    wp_register_style('themestyle', get_template_directory_uri() . '/assets/css/themestyle.css', array(), '1.0.0', 'all');
    wp_register_style('style', get_stylesheet_uri(), array('themestyle'), array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('bootstrap-select');
    wp_enqueue_style('swiper-css');
    wp_enqueue_style('themestyle');
    wp_enqueue_style('style');


    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), '1.0.0', true);
    wp_register_script('popper-js', get_template_directory_uri() . '/assets/js/popper/popper.min.js', array(), '1.0.0', true);
    wp_register_script('bootstrap-js-select', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap-select.min.js', array(), '1.0.0', true);
    wp_register_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array(), '1.0.0', true);
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js-select');
    wp_enqueue_script('swiper-js');
    wp_enqueue_script('script');
  }
endif;
add_action('wp_enqueue_scripts', 'salyamScripts');

if (!function_exists('mytheme_setup')) :
  function mytheme_setup()
  {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
      'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'
    ));
  }
endif;
add_action('after_setup_theme', 'mytheme_setup');
if (!function_exists('mytheme_menus')) :
  function mytheme_menus()
  {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
      'main_menu' => __('Menu Principal', 'salyam'),
      'social_menu' => __('Menu Redes Sociales', 'salyam')
    ));
  }
endif;
add_action('init', 'mytheme_menus');

function custom_logo_setup()
{
  $defaults = array(
    'height'      => 100,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_logo_setup');

/**
 * Search in all fields
 */
/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
  global $wpdb;

  if ( is_search() ) {    
      //$join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
      $join .='LEFT JOIN ' . $wpdb->postmeta . 'AS post_metas ON ' . $wpdb->posts . '.ID = post_metas.post_id ';
  }

  return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
* Modify the search query with posts_where
*
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
*/
function cf_search_where( $where ) {
  global $pagenow, $wpdb;

  if ( is_search() ) {
      $where = preg_replace(
          "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
          "(".$wpdb->posts.".post_title LIKE $1) OR (post_metas.meta_value LIKE $1)", $where );
  }

  return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
* Prevent duplicates
*
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
*/
function cf_search_distinct( $where ) {
  global $wpdb;

  if ( is_search() ) {
      return "DISTINCT";
  }

  return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );