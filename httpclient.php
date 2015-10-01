<?php

if (!function_exists('http_post')) {

	function post($url, $data) {

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
		$file_contents = curl_exec($ch);
		curl_close($ch);

		return $file_contents;
	}
}