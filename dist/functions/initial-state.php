<?php

/**
 * Inline the WP REST payloads the Vue app needs on boot so the first render
 * does not wait on extra API round trips. The app falls back to fetching from
 * the REST API when window.__INITIAL_STATE__ is missing.
 */

define('RG_INITIAL_STATE_TRANSIENT', 'rg_initial_state_payload');

function rg_get_initial_state_payload() {
	$cached = get_transient(RG_INITIAL_STATE_TRANSIENT);
	if ($cached !== false && is_array($cached)) {
		return $cached;
	}

	$payload = array();

	$pages_request = new WP_REST_Request('GET', '/wp/v2/pages');
	$pages_request->set_query_params(array(
		'per_page' => 100,
		'_fields' => 'slug,acf'
	));
	$pages_response = rest_do_request($pages_request);
	if (!$pages_response->is_error()) {
		$payload['pages'] = rest_get_server()->response_to_data($pages_response, false);
	}

	$app_request = new WP_REST_Request('GET', '/wp/v2/app');
	$app_request->set_query_params(array('_fields' => 'slug,acf'));
	$app_response = rest_do_request($app_request);
	if (!$app_response->is_error()) {
		$payload['app'] = rest_get_server()->response_to_data($app_response, false);
	}

	set_transient(RG_INITIAL_STATE_TRANSIENT, $payload, 10 * MINUTE_IN_SECONDS);

	return $payload;
}

function rg_print_initial_state() {
	if (is_admin()) {
		return;
	}

	$payload = rg_get_initial_state_payload();
	if (empty($payload)) {
		return;
	}

	$json = wp_json_encode($payload, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_SLASHES);
	if ($json === false) {
		return;
	}

	echo '<script id="rg-initial-state">window.__INITIAL_STATE__ = ' . $json . ';</script>' . "\n";
}
add_action('wp_head', 'rg_print_initial_state', 4);

/**
 * Hero image for the requested route, used by index.php to paint the LCP
 * image before the Vue app boots. Home uses the static swiper slide; other
 * routes read the same ACF hero the app will render.
 */
function rg_get_route_hero_image() {
	$path = trim((string) parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', PHP_URL_PATH), '/');

	if ($path === '') {
		return home_url('/static/home.webp');
	}

	$payload = rg_get_initial_state_payload();
	if (empty($payload['pages']) || !is_array($payload['pages'])) {
		return '';
	}

	foreach ($payload['pages'] as $page) {
		if (!is_array($page) || !isset($page['slug']) || $page['slug'] !== $path) {
			continue;
		}
		if (isset($page['acf']['hero']['image']) && is_string($page['acf']['hero']['image'])) {
			return $page['acf']['hero']['image'];
		}
		break;
	}

	return '';
}

function rg_flush_initial_state_cache() {
	delete_transient(RG_INITIAL_STATE_TRANSIENT);
}
add_action('save_post', 'rg_flush_initial_state_cache');
add_action('acf/save_post', 'rg_flush_initial_state_cache', 20);
