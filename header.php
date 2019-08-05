<div id="global_header" class="header">
  <h1 id="site_logo"><a href="/">Ginpen.com</a></h1>
  <div id="global_header-info">
    <?php
    /*
    <div class="item">
      <div class="subject">jQueryプラグイン</div>
      <ul class="content">
        <?php wp_nav_menu('theme_location=jquery_plugins&items_wrap=%3$s&container=false'); ?>
        <li><a href="/works#jquery_plugins">一覧 ...</a></li>
      </ul>
    </div>
    <div class="item">
      <div class="subject">Webアプリ</div>
      <ul class="content">
        <?php wp_nav_menu('theme_location=web_app&items_wrap=%3$s&container=false'); ?>
        <li><a href="/works#web_app">一覧 ...</a></li>
      </ul>
    </div>
    */
    ?>
    <div class="item">
      <div class="subject">高梨ギンペイ</div>
      <ul class="content">
        <li><a href="/about">JavaScript書いてます</a></li>
        <li><a href="/works#products">お仕事実績</a></li>
        <li><a href="https://twitter.com/ginpei_jp">Twitter: @ginpei_jp</a></li>
        <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
      </ul>
    </div>
    <div class="item">
      <div class="subject">検索</div>
      <div class="content">
        <?php get_search_form(); ?>
        <script type="text/javascript">
!function() {
  document.getElementById('searchsubmit').className = 'btn';
}();
        </script>
      </div>
    </div>
  </div>
</div>

<div id="top">
  <div class="row-fluid">
    <div class="span4">
      <a id="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <hgroup>
          <h1>Ginpen.com</h1>
          <h2>Powered by JavaScript and JapaneseSushi</h2>
        </hgroup>
      </a>&zwnj;
    </div>
    <div class="span4">&zwnj;</div>
    <div class="span4">
      <p class="well" style="min-height:40px; visibility:hidden;"></p>
    </div>
  </div>
  <nav class="row-fluid well links-row">
    <div class="span6">
      <div class="well links-col">
        <ul class="links">
	  <?php if (!is_ssl()) { ?>
	    <li><a href="https://ginpen.com/"><img src="<?= get_template_directory_uri() ?>/img/favicon.ico" width="16" height="16" alt="" />ざっくりHTTPS対応しました。（自動リダイレクトしません。）</a></li>
	  <?php } ?>
	  <li><a href="https://ginpei.info"><img src="<?= get_template_directory_uri() ?>/img/guruguru.png" width="16" height="16" alt="" />About Ginpei</a></li>
	  <li><a href="http://twitter.com/ginpei_jp"><img src="https://ginpen.com/wp-content/themes/ginpen-theme/img/twitter.ico" width="16" height="16" alt="" />Twitter</a></li>
	  <li><a href="https://github.com/ginpei/"><img src="https://ginpen.com/wp-content/themes/ginpen-theme/img/github.ico" width="16" height="16" alt="" />GitHub</a></li>
        </ul>
      </div>
    </div>
    <div class="span6">
      <div class="well links-col">
        <ul class="recent-posts links">
          <?php wp_get_archives(Array(
            'type' => 'postbypost',
            'limit' => 20,
            'format' => 'custom',
            'before' => '<li><img src="' . get_template_directory_uri() . '/img/favicon.ico" width="16" height="16" alt="" />',
            'after' => '</li>',
          )); ?>
        </ul>
      </div>
    </div>
  </nav>
  <p class="for-mobile">※スマホ対応はしてません。</p>
</div><!-- #top -->
