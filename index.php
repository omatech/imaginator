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
$basename=$path_parts['basename'];
$extension=$path_parts['extension'];
echo "w=$w<br>";
echo "h=$h<br>";
echo "pathname=$pathname<br>";
echo "extension=$extension<br>";
die;
$imaginator->getImage(4);


