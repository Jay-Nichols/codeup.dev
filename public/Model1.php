<?php

class Model
{

	private $attributes = [];

	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public function __get($name)
	{
		if (array_key_exists($name, $this->attributes)) {
			return $this->attributes[$name];
		}

		return null;
	}
}

$test = new Model();
$test->name = 'Jay Nichols';
$test->age = 37;
$test->gender = 'M';

var_dump($test);

