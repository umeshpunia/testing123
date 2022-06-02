<?php

session_start();

// local settings
define('HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '5pm');
// server settings
// define('HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', '5pm');

$conn=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);



?>