<?php

require_once '../src/User-Adlister.php';

$user = new User();
$user->name = "Bob Parker";
$user->description = "Something...";
$user->save();

$user = User::find(4);
$user->name = "Bob Simon";
$user->description = "Something Else";
$user->save();

$user = USER::all();