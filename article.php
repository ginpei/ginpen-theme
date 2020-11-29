<article>
  <header>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="addthis">
      <?php get_template_part( 'components/addthis' ); ?>
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
  <?php if (!is_ssl()) { ?>
    <p class="notice-sslLink">
      ※この記事にはHTTPS版のURLがあります。よろしければそちらをご利用ください。
      <br />
      <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
    </p>
  <?php } ?>
  <div class="article-body">
    <?php the_content(); ?>
    <?php if ( is_single() ) wp_link_pages('before=<nav class="pagination">ページ: &after=</nav>&pagelink=<span class="page">%</span>'); ?>
  </div>
  <footer>
    <?php if ( is_single() ) : ?>
      <div class="addthis">
        <?php get_template_part( 'components/addthis' ); ?>
      </div>
      <nav class="post-neighbers nav">
        <?php previous_post_link('<span class="prev well">%link</span>', '&larr; %title'); ?>
        <?php next_post_link('<span class="next well">%link</span>', '%title &rarr;'); ?>
      </nav>
    <?php endif; ?>
  </footer>
</article>
