<?php do_action( 'get_footer' ); ?>
<?php wp_footer(); ?>
<div class="ui-container">
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
  <div><a href="https://www.google.com/intl/ja/policies/privacy/partners/">Access tracked by Google Analytics using cookie</a></div>
  <script src="https://ginpen.com/lab/jQuery.gpHatebuCounter/jquery.gphatebucounter-1.1.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/global.js" type="text/javascript"></script>
</div>
