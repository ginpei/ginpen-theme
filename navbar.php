<div class="navbar">
  <div class="u-container">
    <div class="navbar-inner">
      <a class="navbar-siteTitle" href="/">Ginpen.com</a>
      <div class="navbar-itemList">
        <div class="navbar-Item">
          <div class="navbar-Item-label">高梨ギンペイ</div>
          <ul class="navbar-Item-content">
            <li><a href="/about">JavaScript書いてます</a></li>
            <li><a href="/works#products">お仕事実績</a></li>
            <li><a href="https://twitter.com/ginpei_jp">Twitter: @ginpei_jp</a></li>
            <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
          </ul>
        </div>
        <div class="navbar-Item">
          <div class="navbar-Item-label">検索</div>
          <div class="navbar-Item-content">
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
