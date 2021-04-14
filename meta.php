
<?php do_action( 'get_header' ); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php _meta_echo_title(); ?></title>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="module"></script>
<link rel="modulepreload" href="<?php echo get_template_directory_uri(); ?>/js/floating-header.js">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/google-fonts/Slackey.css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/main.css" as="style">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/base.css" as="style">
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/util.css" as="style">

<?php wp_head(); ?>

<?php // ------------------------------------------------------------------
/**
 * Write site title.
 */
function _meta_echo_title() {
	global $page, $paged;
  $separator = '|';

  // entry title
  // (if not single page, write nothing)
	wp_title( $separator, true, 'right' );

  // blog name
	bloginfo( 'name' );
  if ( is_home() || is_front_page() ) {
    $description = get_bloginfo( 'description', 'display' );
    if ($description) {
      echo " $separator $description";
    }
  }

  // page number
	if ( $paged >= 2 || $page >= 2 ) {
		echo $separator . ' Page ' . max( $paged, $page );
  }
}
?>
