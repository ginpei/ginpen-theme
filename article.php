<article class="article">
  <header>
    <div class="u-container">
      <h1 class="article-title">
        <a class="article-titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h1>
      <div class="article-status">
        <span class="article-statusItem">
          投稿日時: <a href="<?php the_permalink() ?>"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d H:i'); ?></time></a>
        </span>
        <?php if ( get_post_type() == 'post') : ?>
          <span class="article-statusItem">
            カテゴリー:
            <?php the_category(', '); ?>
          </span>
          <span class="article-statusItem">
            <?php the_tags(); ?>
          </span>
        <?php endif; ?>
        <?php if (is_user_logged_in()) : ?>
          <span class="article-statusItem">
            <?php edit_post_link(); ?>
          </span>
        <?php endif; ?>
      </div>
      <?php get_template_part( 'components/addthis' ); ?>
    </div>
  </header>
  <div class="article-body">
    <div class="u-container">
      <div class="articleContent">
          <?php the_content(); ?>
      </div>
      <?php if ( is_single() ) wp_link_pages('before=<nav class="pagination">ページ: &after=</nav>&pagelink=<span class="page">%</span>'); ?>
    </div>
  </div>
  <footer>
    <?php if ( is_single() ) : ?>
      <?php get_template_part( 'components/addthis' ); ?>
      <nav class="post-neighbers nav">
        <?php // next_post_link('<span class="next well">%link</span>', '&larr; %title'); ?>
        <?php // previous_post_link('<span class="prev well">%link</span>', '%title &rarr;'); ?>
      </nav>
    <?php endif; ?>
  </footer>
</article>
