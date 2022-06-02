<?php
include_once "./includes/db.php";
include_once "./functions/main.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
if (isset($_SESSION['email'])) {
    redirect("dashboard.php");
}

if (isset($_POST['pass'])) {
    $email = $_POST['email'];
    $login_sql = "select * from admin_users where email='$email' and status='active'";
    $login_user_query = mysqli_query($conn, $login_sql);
    if (mysqli_num_rows($login_user_query) > 0) {
        $token = sha1(md5(time()));
        $token_upd_sql = "UPDATE `admin_users` SET `pass_token` = '$token' WHERE `admin_users`.`email` = '$email'";

        $token_upd_query = mysqli_query($conn, $token_upd_sql);

        if ($token_upd_query) {
            $msg = "Please Check Your Email";
            $className = "text-success";

            $reset_url = "http://localhost/5pmclass/project/admin/reset.php?t=$token";

            // mail starts
//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '5pmclass@csrit.net';                     //SMTP username
    $mail->Password   = MAIL_PASS;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('5pmclass@csrit.net', 'Mailer');
    $mail->addAddress($email);     //Add a recipient
    

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = '<a href="'.$reset_url.'" target="_blank">Click Here</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

            // mail ends
        } else {
            $msg = "Please Try Again";
            $className = "text-danger";
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
            Forget Password
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
                    <a href="index.php">Login?</a>
                    <h3 class="<?php echo $className; ?>"><?php echo $msg; ?></h3>
                    <input type="submit" name="pass" class="btn btn-success mt-4" value="Submit">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>