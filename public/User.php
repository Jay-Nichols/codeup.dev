<?php

require_once "Model1.php";

class User extends Model 
{
	protected static $table = "users";
}

echo User::getTableName();