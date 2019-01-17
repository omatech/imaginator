<?php

namespace Omatech\Imaginator;

class Imaginator {

	public $test_images_array = [];

	function __construct() {
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
	}
	
	function getImage($id)
	{
		$image_url=$this->test_images_array[$id];
		echo $image_url;
	}

}
