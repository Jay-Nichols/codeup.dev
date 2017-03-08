<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'employees_user');
define('DB_PASS', 'averysecurepassword');
require 'database_connection.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;