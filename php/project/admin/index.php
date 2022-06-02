<?php
include_once "./includes/db.php";
include_once "./functions/main.php";
if(isset($_SESSION['email'])){
    redirect("dashboard.php");
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $login_sql = "select * from admin_users where email='$email' and status='active'";
    $login_user_query = mysqli_query($conn, $login_sql);
    if (mysqli_num_rows($login_user_query) > 0) {
        $login_user = mysqli_fetch_assoc($login_user_query);
        // match password
        if (password_verify($pass, $login_user['password'])) {
            $_SESSION['email']=$email;
            redirect("dashboard.php");
        } else {
            $msg = "Login Failed,Please Try Again";
        }
    } else {
        $msg = "Something Wrong!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <div class="p-5 text-center my-bg">
        <h1>Admin Panel</h1>
        <p>
            Login Here
        </p>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="post">
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <a href="forget.php">Forget Password?</a>
                    <h3 class="<?php echo $className; ?>"><?php echo $msg; ?></h3>
                    <input type="submit" name="login" class="btn btn-success mt-4" value="Login">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>