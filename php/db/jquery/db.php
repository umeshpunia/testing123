<?php

define('DB_HOST', 'localhost');
define('DB_NAME', '5pm');
define('DB_USERNAME', 'root');
define('DB_PASS', '');


$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME);
// 1. hostname 2. username 3. password 4. dbname
// if($con){
//     echo "Connected";
// }

?>