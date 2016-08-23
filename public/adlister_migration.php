<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'adlister_db');

define('DB_USER', 'jay');

define('DB_PASS', 'password');


$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($query);

$adlisterTable = 'CREATE TABLE adlister (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    -- location VARCHAR(240) NOT NULL,
    -- date_established DATE,
    -- area_in_acres DECIMAL(10,2),
    description TEXT,
    PRIMARY KEY (id)
    )';

$dbc->exec($adlisterTable);