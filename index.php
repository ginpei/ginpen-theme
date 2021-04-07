<!DOCTYPE HTML>
<html 🍣 <?php language_attributes(); ?>  xmlns:addthis="https://www.addthis.com/help/api-spec">
  <head>
    <?php get_template_part( 'meta' ); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php if (!_is_production() && !is_user_logged_in()) : ?>
      <?php get_template_part( 'components/ga' ); ?>
    <?php endif; ?>
    <?php get_template_part( 'header' ); ?>
    <?php // get_template_part( 'site-info' ); ?>
    <?php get_template_part( 'body' ); ?>
    <?php get_template_part( 'footer' ); ?>
  </body>
</html>

<?
function _is_production() {
  return $_SERVER['SERVER_NAME'] !== "ginpen.com";
}
