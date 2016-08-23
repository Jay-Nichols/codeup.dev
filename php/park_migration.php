<?php

require_once "db_connect.php";


$query = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($query);

$parksTable = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE,
    area_in_acres DECIMAL(10,2),
    description TEXT,
    PRIMARY KEY (id)
    )';

$dbc->exec($parksTable);