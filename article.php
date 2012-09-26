<article>
  <header>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="addthis">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "
  addthis:url="<?php the_permalink(); ?>"
  addthis:title="<?php the_title_attribute(); ?>">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<?php wp_enqueue_script( 'addthis', 'http://s7.addthis.com/js/250/addthis_widget.js#pubid=ginpei' ); ?>
<!-- AddThis Button END -->
    </div>
    <div class="article-status well">
      <div class="post-datetime">投稿日時: <a href="<?php the_permalink() ?>"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d H:i'); ?></time></a></div>
      <?php if ( get_post_type() == 'post') : ?>
        <div class="post-categories">
          カテゴリー:
          <?php the_category(', '); ?>
        </div>
        <div class="post-tags">
          <?php the_tags(); ?>
        </div>
      <?php endif; ?>
      <?php edit_post_link(); ?>
    </div>
  </header>
  <div class="article-body">
    <?php the_content(); ?>
    <?php if ( is_single() ) wp_link_pages('before=<nav class="pagination">ページ: &after=</nav>&pagelink=<span class="page">%</span>'); ?>
  </div>
  <footer>
    <?php if ( is_single() ) : ?>
			<div class="addthis">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "
  addthis:url="<?php the_permalink(); ?>"
  addthis:title="<?php the_title_attribute(); ?>">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<?php wp_enqueue_script( 'addthis', 'http://s7.addthis.com/js/250/addthis_widget.js#pubid=ginpei' ); ?>
<!-- AddThis Button END -->
			</div>
      <div class="comments-wrapper well">
        <?php comments_template( '', true ); ?>
        <script type="text/javascript">
!function() {
  document.getElementById('submit').className = 'btn';
}();
        </script>
      </div>
      <nav class="post-neighbers nav">
        <?php previous_post_link('<span class="prev well">%link</span>', '&larr; %title'); ?>
        <?php next_post_link('<span class="next well">%link</span>', '%title &rarr;'); ?>
      </nav>
    <?php else : ?>
      <div class="post-comments">
        <?php comments_popup_link(); ?>
      </div>
    <?php endif; ?>
  </footer>
</article>
