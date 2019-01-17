<!DOCTYPE html>
<html>
<body>
<?php
use \League\Glide\ServerFactory;

$url_base = 'https://imaginator.omatech.com';

$global_id=0;
for ($i = 0; $i <= 19; $i++) {
	paint_image_line($url_base, $i, $global_id, 'jpg', 300);$global_id++;
	paint_image_line($url_base, $i, $global_id, 'webp', 900, null, 98);$global_id++;
	paint_image_line($url_base, $i, $global_id, 'webp', 900, null, 50);$global_id++;
	paint_image_line($url_base, $i, $global_id, 'gif', 800);$global_id++;
	paint_image_line($url_base, $i, $global_id, 'jpg', 600, 500, 70);$global_id++;
}

function paint_image_line($url_base, $id, $global_id, $extension = 'jpg', $w = 300, $h = null, $q = 100) {
	$url = "$url_base/$id.$extension?w=$w&h=$h&q=$q";
	echo "<img src='$url' id='img-$global_id'><br>";
	echo "Width: $w Height: $h Quality: $q Format: $extension Size:?<span id='size-$global_id'/><br>";
	echo "$url <br><br>";
}
?>

<script>
document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    // document ready

		var imgElems = document.getElementsByTagName('img');
		for (var i = 0, len = imgElems.length; i < len; i++)
		{
			var url = imgElems[i].src || imgElems[i].href;
			if (url && url.length > 0)
			{
				var iTime = performance.getEntriesByName(url)[0];
				console.log(imgElems[i].id+' '+iTime.transferSize); //or encodedBodySize, decodedBodySize
			}
		}
		
		
  }
};
</script>

</body>
</html>