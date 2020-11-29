<div
  class="addthis_toolbox addthis_default_style "
  addthis:url="<?php the_permalink(); ?>"
  addthis:title="<?php the_title_attribute(); ?>"
>
  <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
  <a class="addthis_button_tweet"></a>
  <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
  <a class="addthis_counter addthis_pill_style"></a>
</div>
<?php wp_enqueue_script( 'addthis', 'https://s7.addthis.com/js/250/addthis_widget.js#pubid=ginpei' ); ?>
