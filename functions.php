<?php
define('FORCE_SSL_ADMIN', true);

// avoid accidental emoticon images :P
// (Note that this updates database.)
// https://developer.wordpress.org/reference/functions/convert_smilies/
if (get_option( 'use_smilies' )) {
  update_option( 'use_smilies', 0 );
}

/*
 * Remove some unnecessary elements from document header.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

/*
 * Remove unused resources for performance
 */
function remove_unused_wp_resources() {
  wp_deregister_script( 'wp-embed' );

  // from WP Gutenberg
  wp_dequeue_style( 'wp-block-library' );

  // emoji
  remove_filter( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_filter( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_filter( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'wp_enqueue_scripts', 'remove_unused_wp_resources' );

function shortcode_translate_src($attr, $content = '') {
  $withTag = (substr(trim($content),0,1) === '<' && substr(trim($content),-1) === '>');
  $html = '<blockquote class="functions-shortcode_translate_src">';
  if (!$withTag) { $html .= '<p>'; }
  $html .= $content;
  if (!$withTag) { $html .= '</p>'; }
  $html .= '</blockquote>';
  return $html;
}
add_shortcode('translate-src', 'shortcode_translate_src');

function shortcode_translate_dest($attr, $content = '') {
  $withTag = (substr(trim($content),0,1) === '<' && substr(trim($content),-1) === '>');
  $html = '<div class="functions-shortcode_translate_dest">';
  if (!$withTag) { $html .= '<p>'; }
  $html .= $content;
  if (!$withTag) { $html .= '</p>'; }
  $html .= '</div>';
  return $html;
}
add_shortcode('translate-dest', 'shortcode_translate_dest');

// TODO replace them in DB
function replace_http_with_https($content = '') {
  return str_replace('http://ginpen.com', 'https://ginpen.com', $content);
}
add_filter('the_content', 'replace_http_with_https', 1);
