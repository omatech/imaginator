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
print_r($pathparts);
$filename=$pathparts['filename'];
$extension=$pathparts['extension'];
$w=$_REQUEST['w'];
$h=$_REQUEST['h'];

echo "w=$w<br>";
echo "h=$h<br>";
echo "filename=$filename<br>";
echo "extension=$extension<br>";
die;
$imaginator->getImage(4);


