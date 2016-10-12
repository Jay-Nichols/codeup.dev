<?php 


class Square extends Rectangle
{
	public function __construct($height) 
	{
		parent::__construct($height, $height);
	}

	public function Perimeter()
	{
		return $this->getHeight() * 4;
	}

	public function Area()
	{
		return $this->getWidth() * $this->getHeight();
	}
}

