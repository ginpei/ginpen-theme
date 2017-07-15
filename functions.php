<?php
/*
 * Register sidebars for basic layout.
 */
register_sidebar(array(
  'name' => 'Sidebar',
  'id' => 'sidebar-1',
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
));
register_sidebar(array(
  'name' => 'Footer',
  'id' => 'footer-1',
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
));

/*
 * Remove some unnecessary elements from document header.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

// ------------------------------------------------------------------------

register_nav_menu('jquery_plugins', 'jQueryプラグイン');
register_nav_menu('web_app', 'Webアプリ');

function html_to_text($s) {
  if ( get_comment_type() == 'comment' ) {
    $s = str_replace("\r\n", '&zwnj;<br />', htmlspecialchars($s, ENT_QUOTES));
  }
  return $s;
}
add_filter('comment_text', 'html_to_text', 8);  // priority 8 enables links, 9 does not

// ------------------------------------------------------------------------

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

function login_tiananmen() {
    echo '<a href="https://en.wikipedia.org/wiki/Tiananmen_Square_protests">Tiananmen Square protests (天安門事件/天安门事件)</a>';
}
add_action('login_head', 'login_tiananmen');

// TODO replace them in DB
function replace_http_with_https($content = '') {
  return str_replace('http://ginpen.com', 'https://ginpen.com', $content);
}
add_filter('the_content', 'replace_http_with_https', 1);
