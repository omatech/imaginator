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

$source_folder=$_SERVER["DOCUMENT_ROOT"].'/original_images';
$cache_folder=$_SERVER["DOCUMENT_ROOT"].'/cache_images';
$imaginator=new \Omatech\Imaginator\Imaginator($source_folder, $cache_folder);
$url = parse_url($_SERVER['REQUEST_URI']);
$pathparts=pathinfo($url['path']);
$filename=$pathparts['filename'];

if (is_numeric($filename) && is_numeric($q))
{
	if ($filename>=0 && $filename<20 && $q>=1 && $q<=100)
	{
		$imaginator->getOriginal($filename);
		die;
	}
}
die("Please input a number between 0 and 19 as filename and a number between 1 and 100 for quality\n");



