<?php

class Model
{
	protected static $table;
	
	public static function getTableName()
	{
		return static::$table;
	}

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
$test->instrument = "guitar";

var_dump($test);


