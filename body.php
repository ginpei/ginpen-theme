<section id="main" class="ui-container">
  <?php _body_echo_type_title(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'article', get_post_format() ); ?>
  <?php endwhile; ?>
  <nav class="body-neighbers nav">
    <?php previous_posts_link('<span class="prev well">&larr; 新しい記事</span>'); ?>
    <?php next_posts_link('<span class="next well">古い記事 &rarr;</span>'); ?>
  </nav><!-- #nav-above -->
</section>
<aside id="main-sidebar">
  <?php // dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
<?php // ------------------------------------------------------------------
/**
 * Write heading for search result, category archive or tag archive.
 */
function _body_echo_type_title() {
  if ( is_search() ) {
    $title = '検索結果:';
    $title .= ' ';
    $title .= get_search_query();
  }
  elseif ( is_category() ) {
    $title = 'カテゴリー:';
    $title .= ' ';
    $title .= single_term_title('', false);
  }
  elseif ( is_tag() ) {
    $title = 'タグ:';
    $title .= ' ';
    $title .= single_term_title('', false);
  }

  if ( $title ) {
    echo "<h1 class=\"well\">$title</h1>";
  }
}
?>
