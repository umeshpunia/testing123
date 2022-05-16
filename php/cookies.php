<?php

session_start();



$_SESSION['name']="abc";

// setcookie("username","umesh",time()+20000);

// echo $_COOKIE['username']

echo $_SESSION['name']


?>