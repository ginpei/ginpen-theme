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
  </div>
</main>
