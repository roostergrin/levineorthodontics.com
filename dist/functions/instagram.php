<?php
// wp api custom endpoints
add_action('rest_api_init', 'rg_register_routes_instagram');
function rg_register_routes_instagram () {
  register_rest_route('rg-instagram/v1', 'get-photos', array(
    'methods' => 'GET',
    'callback' => 'deliver_photos'
  ));
}
// function for handling post request to new api route
function deliver_photos () {
  $images = do_shortcode('[instagram-feed feed=1]');
  $images = str_replace(array("\r", "\n", "\t"), "", $images);
  $images = explode("--separator--", $images);
  array_pop($images);
  $imagesArr = [];
  foreach($images as $image) {
	  $arr = explode("--inner-separator--", $image);
	  $data = (object) [
		"source" => $arr[0],
		"permalink" => $arr[1]	  
	 ];
	  array_push($imagesArr, $data);
  }
  return $imagesArr;
}
