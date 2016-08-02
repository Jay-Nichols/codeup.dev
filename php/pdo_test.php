<?php
require "db_connect.php";


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";