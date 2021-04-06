<div class="header">
  <div class="u-container">
    <div class="header-inner">
      <a class="header-siteTitle" href="/">Ginpen.com</a>
      <div class="header-itemList">
        <div class="header-Item">
          <div class="header-Item-label">高梨ギンペイ</div>
          <ul class="header-Item-content">
            <li><a href="/about">JavaScript書いてます</a></li>
            <li><a href="/works#products">お仕事実績</a></li>
            <li><a href="https://twitter.com/ginpei_jp">Twitter: @ginpei_jp</a></li>
            <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
          </ul>
        </div>
        <div class="header-Item">
          <div class="header-Item-label">検索</div>
          <div class="header-Item-content">
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
  </div>
</div>

<!-- TODO extract -->
<div class="u-container">
  <div>
    <a id="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <hgroup>
        <h1>Ginpen.com</h1>
        <h2>Powered by JavaScript and JapaneseSushi</h2>
      </hgroup>
    </a>
  </div>
  <nav class="row-fluid well links-row">
    <div class="span6">
      <div class="well links-col">
        <ul class="links">
	  <?php if (!is_ssl()) { ?>
	    <li><a href="https://ginpen.com/"><img src="<?= get_template_directory_uri() ?>/img/favicon.ico" width="16" height="16" alt="" />ざっくりHTTPS対応しました。（自動リダイレクトしません。）</a></li>
	  <?php } ?>
	  <li><a href="https://ginpei.info"><img src="<?= get_template_directory_uri() ?>/img/icon-512.png" width="16" height="16" alt="" />About Ginpei</a></li>
	  <li><a href="http://twitter.com/ginpei_jp"><img src="<?php echo get_template_directory_uri(); ?>/img/Twitter_Logo_Blue.svg" width="16" height="16" alt="" />@ginpei_jp</a></li>
	  <li><a href="https://github.com/ginpei/"><img src="<?php echo get_template_directory_uri(); ?>//img/GitHub-Mark-64px.png" width="16" height="16" alt="" />@ginpei</a></li>
        </ul>
      </div>
    </div>
    <div class="span6">
      <div class="well links-col">
        <ul class="links" data-js="recentPostList">
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
</div>
