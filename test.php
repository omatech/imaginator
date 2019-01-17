<?php

use \League\Glide\ServerFactory;

$url_base = 'https://imaginator.omatech.com';

for ($i = 0; $i <= 19; $i++) {
	paint_image_line($url_base, $i, 'jpg', 300);
	paint_image_line($url_base, $i, 'webp', 900, null, 98);
	paint_image_line($url_base, $i, 'webp', 900, null, 50);
	paint_image_line($url_base, $i, 'gif', 800);
	paint_image_line($url_base, $i, 'jpg', 600, 500, 70);
}


function paint_image_line($url_base, $id, $extension = 'jpg', $w = 300, $h = null, $q = 100) {
	$url = "$url_base/$id.$extension?w=$w&h=$h&q=$q";
	echo "<img src='$url'> Width: $w Height: $h Quality: $q Format: $extension Size:?";
	echo "$url <br>";
}
