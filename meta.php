<?php do_action( 'get_header' ); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php _meta_echo_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/google-fonts/Slackey.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?0401" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_single() ) : ?>
  <link rel="alternate" media="handheld" href="<?php the_permalink(); ?>">
<?php endif; ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_deregister_script('jquery'); ?>
<?php wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery-3.5.1.slim.min.js'); ?>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) : ?>
  <?php wp_enqueue_script( 'comment-reply' ); ?>
<?php endif; ?>
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
