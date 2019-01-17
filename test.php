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
	$fo = fsockopen("imaginator.omatech.com", 80, $errno, $errstr, 12); // timeout in sec
//and check the $errno and $errstr...
echo "Error $errno: $errstr<br />";

fputs($fo, "GET /15.jpg?w=600&q=50 HTTP/1.1\r\n");
fputs($fo, "Host: imaginator.omatech.com\r\n");
fputs($fo, "Referer: http://www.omatech.com.com\r\n");
fputs($fo, "User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)\r\n\r\n");
echo "Error $errno: $errstr<br />";
return count($fo);
	/*
	$arrContextOptions = array(
		"ssl" => array(
			"verify_peer" => false,
			"verify_peer_name" => false,
		),
	);

	$url=str_replace('https://', 'http://', $url);
	$response = file_get_contents($url, false, stream_context_create($arrContextOptions));

	return count($response);
	
	 */
}

function paint_image_line($url_base, $id, $extension = 'jpg', $w = 300, $h = null, $q = 100) {
	$url = "$url_base/$id.$extension?w=$w&h=$h&q=$q";
	echo "<img src='$url'> Width: $w Height: $h Quality: $q Format: $extension Size:" . get_url_size($url);
	echo "$url <br>";
}
