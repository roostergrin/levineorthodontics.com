<?php
/**
 * Smash Balloon Instagram Feed Main Template
 * Creates the wrapping HTML and adds settings as attributes
 *
 * @version 2.2 Instagram Feed by Smash Balloon
 *
 */
// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$feed_styles = SB_Instagram_Display_Elements::get_feed_style( $settings ); // already escaped
$sb_images_style = SB_Instagram_Display_Elements::get_sbi_images_style( $settings ); // already escaped
$image_resolution_setting = $settings['imageres'];
$cols_setting = $settings['cols'];
$num_setting = $settings['num'];
$icon_type = $settings['font_method'];

if ( ! in_array( 'ajaxPostLoad', $flags, true ) ) {
	$this->posts_loop( $posts, $settings );
}
?>