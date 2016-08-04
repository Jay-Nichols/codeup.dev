<?php 


class Square extends Rectangle
{

	public function perimeter()
	{
		return (2 * ($this->width)) + (2 * ($this->height));
	}

}