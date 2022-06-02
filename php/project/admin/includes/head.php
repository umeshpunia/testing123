<?php
include_once "./includes/db.php";
include_once "./functions/main.php";
include_once "./functions/sql_functions.php";

if(!isset($_SESSION['email'])){
    redirect("logout.php");
}else{
    $login_user_email=$_SESSION['email'];

    $get_login_info=mysqli_fetch_assoc(mysqli_query($conn,"select * from admin_users where email='$login_user_email'"));

    $login_user_role=$get_login_info['role'];
    $login_user_id=$get_login_info['uid'];
    if($get_login_info['status']!="active"){
        redirect("logout.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- JavaScript Bundle with Popper -->
    
</head>

<body>
    <?php
        include_once "./includes/navbar.php";
    ?>