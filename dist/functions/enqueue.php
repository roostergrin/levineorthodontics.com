<?php

function load_scripts() {
	wp_enqueue_script( 'main-manifest', get_template_directory_uri() . '/static/js/manifest.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-vendor', get_template_directory_uri() . '/static/js/vendor.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/static/js/app.js', array(), '1.0.0', true );
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/static/css/app.css', array(), '1.0.0', 'all');

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// $gz = gzopen(get_template_directory_uri() . '/static/js/app.js.gz', 'rb');
	// $file_name = get_template_directory_uri() . '/static/js/app.js.gz';
	// echo '<script>console.log("' . $file_name . '")</script>';
	//
	// $out_file_name = str_replace('.gz', '', $file_name);
	// echo '<script>console.log("' . $out_file_name . '")</script>';
	//
	// $file = gzopen($file_name, 'rb');
	// $out_file = fopen($out_file_name, 'wb');
	//
	// while(!gzeof($file)) {
	// 	fwrite($out_file, gzread($file, $buffer_size));
	// }
	//
	// $dest = fopen(get_template_directory_uri() . '/static/js/app.js', 'wb');
	// $out_file_name = str_replace('.gz', '', $file_name);
	//
	// wp_enqueue_script( 'main-scripts', $dest, array(), '1.0.0', true );
	//
	// while (!gzeof($gz)) {
  //   fwrite($dest, gzread($gz, 4096));
	// }

	// gzclose($out_file);
	// fclose($dest);
}
add_action('wp_enqueue_scripts', 'load_scripts');

function rg_defer_noncritical_styles($html, $handle, $href, $media) {
	if (is_admin()) {
		return $html;
	}

	$defer_handles = array(
		'sbr_styles',
		'sbi_styles',
		'ctf_styles',
		'cff',
		'sb-font-awesome'
	);

	if (!in_array($handle, $defer_handles, true)) {
		return $html;
	}

	$href = esc_url($href);
	$media = esc_attr($media ? $media : 'all');
	$id = esc_attr($handle . '-css');

	return "<link rel='preload' id='{$id}' href='{$href}' as='style' onload=\"this.onload=null;this.rel='stylesheet'\" media='{$media}' />\n" .
		"<noscript><link rel='stylesheet' id='{$id}-noscript' href='{$href}' media='{$media}' /></noscript>\n";
}
add_filter('style_loader_tag', 'rg_defer_noncritical_styles', 10, 4);

function get_menu() {
    return wp_get_nav_menu_items('menu');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'api', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(/static/login-logo.svg);
					height:150px;
					width:320px;
					background-size: 320px 150px;
					background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return 'https://roostergrin.com';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Build By Rooster Grin Media';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
