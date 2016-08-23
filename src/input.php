<?php

class Input
{   
    

    public static function getString($key, $min = 0, $max = PHP_INT_MAX)
    {
        $string = self::get($key);
    
        if (!is_string($string) || !is_int($min) || !is_int($max)) {
            throw new InvalidArgumentException("$key must be a string, and $max and $min must be numbers.");
        }


        if ($string == null){
            throw new OutOfRangeException("$key does not have a value.");
        }
        if (is_numeric($string)){
            throw new DomainException("$key is a number. It should be a string.");
        }
        if (strlen($string) < $min || strlen($string) > $max){
            throw new LengthException("String length is outside parameters.");
        }
        return $string;
    }

    public static function getNumber($key, $min = 0, $max = PHP_INT_MAX)
    {
        $number = self::get($key);
        
        if(!is_numeric($number) || !is_int($min) || !is_int($max)) {
            throw new InvalidArgumentException("$key must be a string, and $max and $min must be numbers.");
        }

        if ($number == null){
            throw new OutOfRangeException("$key does not have a value.");
        }
        if (is_numeric($number)){
            throw new DomainException("$key is a number. It should be a string.");
        }
        if ($number < $min || $string > $max){
            throw new RangeException("String length is outside parameters.");
        }
        return $number;
    }


    public static function getDate($key)
    {
        $value = self::get($key);
        if (!strtotime($value)) {
            throw new Exception("The value for $key should be a date.");
        }

        return new DateTime($value);
        

    }
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
        return true;
        } else {
        return false;
        }
        // TODO: Fill in this function
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
        return $_REQUEST[$key];
    } else {
        return $default;
    }
        // TODO: Fill in this function
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
