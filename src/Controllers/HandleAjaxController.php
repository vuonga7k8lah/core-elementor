<?php

namespace WilokeCard\Controllers;

class HandleAjaxController
{
	public function __construct()
	{
		add_action('wp_ajax_' . WILOKE_WILOKECARD_NAMESPACE . '_custom_wil_post', [$this, 'ajaxCustomWilPost']);
	}

	public function ajaxCustomWilPost()
	{
		$posts = get_posts();

		$response = [];
		foreach ($posts as $post) {
			$response[] = [
				"id"   => $post->ID,
				"text" => $post->post_title,
			];
		}

		wp_send_json($response);
	}
}