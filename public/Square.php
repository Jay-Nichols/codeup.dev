<?php 


class Square extends Rectangle
{
	public function __construct($height) 
	{
		parent::__construct($height, $height);
	}

	public function Perimeter()
	{
		return (2 * ($this->width)) + (2 * ($this->height));
	}

	public function Area()
	{
		return $this->width * $this->height;
	}
}

