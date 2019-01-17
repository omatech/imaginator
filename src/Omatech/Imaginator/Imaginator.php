<?php

namespace Omatech\Imaginator;
use \League\Glide\ServerFactory;

class Imaginator {

	private $test_images_array = [];
	private $image_handler;
	private $source_folder;
	private $cache_folder;

	function __construct($source_folder, $cache_folder) {
		$this->source_folder=$source_folder;
		$this->cache_folder=$cache_folder;
		$this->test_images_array[0] = 'SampleJPGImage_100kbmb.jpg';
		$this->test_images_array[1] = 'SampleJPGImage_30mbmb.jpg';
		$this->test_images_array[2] = 'SamplePNGImage_200kbmb.png';
		$this->test_images_array[3] = 'SampleJPGImage_10mbmb.jpg';
		$this->test_images_array[4] = 'SampleJPGImage_500kbmb.jpg';
		$this->test_images_array[5] = 'SamplePNGImage_20mbmb.png';
		$this->test_images_array[6] = 'SampleJPGImage_15mbmb.jpg';
		$this->test_images_array[7] = 'SampleJPGImage_50kbmb.jpg';
		$this->test_images_array[8] = 'SamplePNGImage_30mbmb.png';
		$this->test_images_array[9] = 'SampleJPGImage_1mbmb.jpg';
		$this->test_images_array[10] = 'SampleJPGImage_5mbmb.jpg';
		$this->test_images_array[11] = 'SamplePNGImage_3mbmb.png';
		$this->test_images_array[12] = 'SampleJPGImage_200kbmb.jpg';
		$this->test_images_array[13] = 'SamplePNGImage_100kbmb.png';
		$this->test_images_array[14] = 'SamplePNGImage_500kbmb.png';
		$this->test_images_array[15] = 'SampleJPGImage_20mbmb.jpg';
		$this->test_images_array[16] = 'SamplePNGImage_10mbmb.png';
		$this->test_images_array[17] = 'SamplePNGImage_5mbmb.png';
		$this->test_images_array[18] = 'SampleJPGImage_2mbmb.jpg';
		$this->test_images_array[19] = 'SamplePNGImage_1mbmb.png';
		
		$server = ServerFactory::create([
				'source' =>                  $this->source_folder,
				'cache' =>                   $this->cache_folder,
				'group_cache_in_folders' =>  true,
				'driver' =>                  'gd',
		]);			
		$this->image_handler=$server;
	}
	
	function getImage($id, $w=null, $h=null, $extension=null, $q=null)
	{
		$image_file=$this->test_images_array[$id];
    $this->image_handler->outputImage($image_file, ['w' => $w, 'h' => $h, 'fm'=>$extension, 'q'=>$q]);		
	}
	
	function getOriginal($id)
	{
		$image_file=$this->test_images_array[$id];
		header("Location: ".str_replace($_SERVER['DOCUMENT_ROOT'], '', $this->source_folder).$image_file);
		die();
	}

}
