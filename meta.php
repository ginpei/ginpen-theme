
<?php do_action( 'get_header' ); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php _meta_echo_title(); ?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon-512.png" />

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="module"></script>
<?php
_echo_js_module_preload("addThis.js");
_echo_js_module_preload("floating-header.js");
?>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
_echo_style_preload("main.css");

_echo_style_preload("vars.css");
_echo_style_preload("elements.css");
_echo_style_preload("utils.css");

_echo_style_preload("navbar.css");
_echo_style_preload("header.css");
_echo_style_preload("footer.css");

_echo_style_preload("list.css");

_echo_style_preload("article.css");
_echo_style_preload("articleContent.css");

_echo_style_preload("functions/shortcode_translate_src.css");
_echo_style_preload("functions/shortcode_translate_dest.css");

_echo_style_preload("external/addThis.css");
?>

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

// Note: preloading actually does not look effective really
// because file nestings are not deep now
// but OK since it looks cool
function _echo_js_module_preload($fileName) {
  $dir = get_template_directory_uri();
  $href = "$dir/js/$fileName";
  echo "<link rel=\"modulepreload\" href=\"$href\">";
}

function _echo_style_preload($fileName) {
  $dir = get_template_directory_uri();
  $href = "$dir/css/$fileName";
  echo "<link rel=\"preload\" href=\"$href\" as=\"style\">";
}

?>
