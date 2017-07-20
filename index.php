<!DOCTYPE HTML>
<html 🍣 <?php language_attributes(); ?>  xmlns:addthis="https://www.addthis.com/help/api-spec">
  <head>
    <?php get_template_part( 'meta' ); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php if (!is_user_logged_in()) : ?>
      <?php get_template_part( 'ga' ); ?>
    <?php endif; ?>
    <header id="root-header">
      <?php get_template_part( 'header' ); ?>
    </header>
    <div id="root-body">
      <?php get_template_part( 'body' ); ?>
    </div>
    <aside id="root-ads">
      <?php get_template_part( 'ads' ); ?>
    </aside>
    <footer id="root-footer">
      <?php get_template_part( 'footer' ); ?>
    </footer>
  </body>
</html>
