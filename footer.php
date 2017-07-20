<?php do_action( 'get_footer' ); ?>
<?php wp_footer(); ?>
<div id="footer-widgets">
  <?php // dynamic_sidebar( 'footer-1' ); ?>
</div>
<address>
  <a href="https://ginpen.com">Ginpen.com</a>
  <br />
  by <strong>Takanashi Ginpei</strong>
  <br />
  <a href="https://twitter.com/ginpei_jp">@ginpei_jp</a>
</address>
<div id="site-generator"><a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>" rel="generator">Proudly powered by WordPress</a></div>
<script src="https://ginpen.com/lab/jQuery.gpHatebuCounter/jquery.gphatebucounter-1.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.js" type="text/javascript"></script>
<?php if (!is_user_logged_in()) : ?>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-21122526-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- /Google Analytics -->
<?php endif; ?>
