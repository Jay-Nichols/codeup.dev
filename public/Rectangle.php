<?php


class Rectangle 
{

	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function perimeter()
	{
		return (2 * ($this->width)) + (2 * ($this->height));
	}

	public function area()
	{
		return $this->width * $this->height;
	}
}