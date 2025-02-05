<?php
/**
 * Smash Balloon Instagram Feed Item Template
 * Adds an image, link, and other data for each post in the feed
 *
 * @version 2.2 Instagram Feed by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$classes = SB_Instagram_Display_Elements::get_item_classes( $settings, $offset );
$post_id = SB_Instagram_Parse::get_post_id( $post );
$timestamp = SB_Instagram_Parse::get_timestamp( $post );
$media_type = SB_Instagram_Parse::get_media_type( $post );
$permalink = SB_Instagram_Parse::get_permalink( $post );
$maybe_carousel_icon = $media_type === 'carousel' ? SB_Instagram_Display_Elements::get_icon( 'carousel', $icon_type ) : '';
$maybe_video_icon = $media_type === 'video' ? SB_Instagram_Display_Elements::get_icon( 'video', $icon_type ) : '';
$media_url = SB_Instagram_Display_Elements::get_optimum_media_url( $post, $settings, $resized_images );
$media_full_res = SB_Instagram_Parse::get_media_url( $post );
$sbi_photo_style_element = SB_Instagram_Display_Elements::get_sbi_photo_style_element( $post, $settings ); // has already been escaped
$media_all_sizes_json = SB_Instagram_Parse::get_media_src_set( $post, $resized_images );

echo $media_full_res . '--inner-separator--' . $permalink . '--separator--' ;
