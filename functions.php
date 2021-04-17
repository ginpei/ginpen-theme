<?php
define('FORCE_SSL_ADMIN', true);

/*
 * Remove some unnecessary elements from document header.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

function shortcode_translate_src($attr, $content = '') {
  $withTag = (substr(trim($content),0,1) === '<' && substr(trim($content),-1) === '>');
  $html = '<blockquote class="article-translate-src">';
  if (!$withTag) { $html .= '<p>'; }
  $html .= $content;
  if (!$withTag) { $html .= '</p>'; }
  $html .= '</blockquote>';
  return $html;
}
add_shortcode('translate-src', 'shortcode_translate_src');

function shortcode_translate_dest($attr, $content = '') {
  $withTag = (substr(trim($content),0,1) === '<' && substr(trim($content),-1) === '>');
  $html = '<div class="article-translate-dest">';
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
