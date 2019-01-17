<!DOCTYPE html>
<html>
<body>
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
	echo "<img src='$url'><br>";
	echo "Width: $w Height: $h Quality: $q Format: $extension Size:?<br>";
	echo "$url <br><br>";
}
?>

<script>
document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    // document ready

alert('hola');
		var imgElems = document.getElementsByTagName('img');
		for (var i = 0, len = imgElems.length; i < len; i++)
		{
			var url = imgElems[i].src || imgElems[i].href;
			if (url && url.length > 0)
			{
				var iTime = performance.getEntriesByName(url)[0];
				console.log(iTime.transferSize); //or encodedBodySize, decodedBodySize
			}
		}
		
		
  }
};
</script>

</body>
</html>