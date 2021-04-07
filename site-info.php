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
