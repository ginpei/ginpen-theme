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
add_filter('comment_text', 'html_to_text', 9);
