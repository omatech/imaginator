<?php
$url_base='https://imaginator.omatech.com';

foreach (range(0,19) as $i)
{
	paint_image_line($url_base, $i, 'jpg', 300);
	paint_image_line($url_base, $i, 'webp', 900, null, 98);
	paint_image_line($url_base, $i, 'webp', 900, null, 50);
	paint_image_line($url_base, $i, 'gif', 800);
	paint_image_line($url_base, $i, 'jpg', 600, 500, 70);
}

function get_url_size ($url)
{
	$ch = curl_init($url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($ch, CURLOPT_HEADER, TRUE);
 curl_setopt($ch, CURLOPT_NOBODY, TRUE);

 $data = curl_exec($ch);
 $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

 curl_close($ch);
 return $size;
}

function paint_image_line($url_base, $id, $extension='jpg', $w=300, $h=null, $q=100)
{
	$url="$url_base/$i.$extension?w=$w&h=$h&q=95";
	echo "<img src='$url'> Width: $w Height: $h Quality: $q Format: $extension Size:". get_url_size($url);
  echo "$url <br>";	
}
