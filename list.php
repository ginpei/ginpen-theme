<main class="list">
  <div class="u-container">
    <ul class="list-list">
      <?php while ( have_posts() ) : the_post(); ?>
        <li class="list-item">
          <a class="list-link" href="<?php the_permalink() ?>">
            <time class="list-postTime" datetime="<?php the_time('c'); ?>">
              <?php the_time('Y/m/d H:i'); ?>
            </time>
            <span class="list-postTitle"><?php the_title() ?></span>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
    <div class="list-pages">
      <div class="list-prevPage"><?php previous_posts_link('<div class="u-infoBox">&larr; 前</div>'); ?></div>
      <div class="list-nextPage"><?php next_posts_link('<div class="u-infoBox">次 &rarr;</div>'); ?></div>
    </div>
  </div>
</main>
