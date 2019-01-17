<?php

$autoload_location = '/vendor/autoload.php';
$tries=0;
while (!is_file(__DIR__.$autoload_location))
{
 $autoload_location='/..'.$autoload_location;
 $tries++;
 if ($tries>10) die("Error trying to find autoload file\n");
}
require_once __DIR__.$autoload_location;

$imaginator=new \Omatech\Imaginator\Imaginator();
$url = parse_url($_SERVER['REQUEST_URI']);
$pathparts=pathinfo($url['path']);
$filename=$pathparts['filename'];
$extension=$pathparts['extension'];
if(isset($_REQUEST['w'])) $w=$_REQUEST['w'];
if(isset($_REQUEST['h'])) $h=$_REQUEST['h'];
if(isset($_REQUEST['q'])) $q=$_REQUEST['q'];

/* debug
echo "w=$w<br>";
echo "h=$h<br>";
echo "filename=$filename<br>";
echo "extension=$extension<br>";
*/

$imaginator->getImage($filename, $w, $h, $extension, $q);


