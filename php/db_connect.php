<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'employees');

define('DB_USER', 'vagrant');

define('DB_PASS', 'vagrant');





$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";