<?php do_action( 'get_footer' ); ?>
<?php wp_footer(); ?>
<div id="footer-widgets">
  <?php // dynamic_sidebar( 'footer-1' ); ?>
</div>
<address>
  <a href="http://ginpen.com">Ginpen.com</a>
  <br />
  by <strong>Takanashi Ginpei</strong>
  <br />
  <a href="http://twitter.com/ginpei_jp">@ginpei_jp</a>
</address>
<div id="site-generator"><a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" rel="generator">Proudly powered by WordPress</a></div>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.js" type="text/javascript"></script>
<?php if (!is_user_logged_in()) : ?>
<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21122526-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- /Google Analytics -->
<?php endif; ?>
