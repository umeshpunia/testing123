<?php
include_once "./db.php";
$msg="";
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $city=$_POST['city'];
    $class_name=$_POST['class'];
    $status=@$_POST['status'];

    $ins_stu_sql="insert into students (name,class,city_name,status) values ('$name','$class_name','$city','$status')";


    if(!$name || !$city || !$class_name || !$status){
        $msg="Please Fill All Fields";
    }else{
        $ins_query=mysqli_query($con,$ins_stu_sql);

        if($ins_query){
            header("location:index.php");
        }else{
            $msg="Please Try Again";
        }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>
        .form-group,input[type=submit]{
            margin: 30px;
        }
    </style>

</head>
<body>
    

<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Class</label>
            <input type="text" name="class" class="form-control">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option selected disabled>Choose Status</option>
                <option value="active">Active</option>
                <option value="disabled">Disabled</option>
            </select>
        </div>
        <h3 class="text-danger">
            <?php echo $msg?>
        </h3>
        <input type="submit" name="add" value="Add" class="btn btn-success">
    </form>
</div>


</body>
</html>