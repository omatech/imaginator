<?php

$url_base = 'https://imaginator.omatech.com';

for ($i = 0; $i <= 19; $i++) {
	paint_image_line($url_base, $i, 'jpg', 300);
	paint_image_line($url_base, $i, 'webp', 900, null, 98);
	paint_image_line($url_base, $i, 'webp', 900, null, 50);
	paint_image_line($url_base, $i, 'gif', 800);
	paint_image_line($url_base, $i, 'jpg', 600, 500, 70);
}

function get_url_size($url) {

	$result = -1;

	$curl = curl_init($url);

	// Issue a HEAD request and follow any redirects.
	curl_setopt($curl, CURLOPT_NOBODY, true);
	curl_setopt($curl, CURLOPT_HEADER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

	$data = curl_exec($curl);
	curl_close($curl);

	if ($data) {
		$content_length = "unknown";
		$status = "unknown";

		if (preg_match("/^HTTP\/1\.[01] (\d\d\d)/", $data, $matches)) {
			$status = (int) $matches[1];
		}

		if (preg_match("/Content-Length: (\d+)/", $data, $matches)) {
			$content_length = (int) $matches[1];
		}

		// http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
		if ($status == 200 || ($status > 300 && $status <= 308)) {
			$result = $content_length;
		}
	}

	return $result;
}

function paint_image_line($url_base, $id, $extension = 'jpg', $w = 300, $h = null, $q = 100) {
	$url = "$url_base/$id.$extension?w=$w&h=$h&q=$q";
	echo "<img src='$url'> Width: $w Height: $h Quality: $q Format: $extension Size:" . get_url_size($url);
	echo "$url <br>";
}
