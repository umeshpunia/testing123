<?php
include_once "./includes/head.php";
if($login_user_role!="admin"){
    redirect("admin-users.php");
}
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $role=@$_POST['role'];

    $file_name=$_FILES['myFile']['name'];
    $tmp_file_name=$_FILES['myFile']['tmp_name'];

    $file_arr=explode(".",$file_name);
    $ext=end($file_arr);

    if($ext=="jpg" || $ext=="png"){
        $uniq_name=md5(time()).".".$ext;

        $path="./assets/images/users/$uniq_name";

        if(move_uploaded_file($tmp_file_name,$path)){
            $ins_user_sql="INSERT INTO `admin_users` (`uid`, `email`, `password`, `status`, `name`, `role`, `added_by`, `added_on`, `pro_pic`) VALUES (NULL, '$email', '$password', 'active', '$name', '$role', '$login_user_email', current_timestamp(), '$uniq_name')";


            $ins_user_query=mysqli_query($conn,$ins_user_sql);

            if($ins_user_query){
                $msg="Added Successfully";
                $className="text-success";
                redirect_some_time("admin-users.php");
            }else{
                $msg="Not Inserted Into Db";
            }
        }else{
            $msg="File Not Uploaded Please Try Again!";
        }

    }else{
        $msg="Please Choose Valid Image File";
    }

}


?>
<div class="container my-5">
    <h1 class="text-center my-4">Add Admin User</h1>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group my-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group my-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="my-3">
                    <label for="formFile" class="form-label">Choose Profile Picture</label>
                    <input class="form-control" name="myFile" type="file" id="formFile">
                </div>
                <div class="form-group my-3">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option selected disabled>Choose Role</option>
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>
                <h2 class="<?php echo $className?>"><?php echo $msg?></h2>
                <input type="submit" class="btn btn-warning" name="add" value="Add User">
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
include_once "./includes/footer.php";
?>