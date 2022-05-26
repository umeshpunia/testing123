<?php
include_once "./db.php";
$get_students_query = mysqli_query($con, "select * from students");
if(isset($_GET['did'])){
  $did=base64_decode($_GET['did']);
  $del_sql="delete from students where sid='$did'";
  $del_query=mysqli_query($con,$del_sql);
  if($del_query){
    header("location:index.php");
  }else{
    echo "Not Deleted";
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container my-5">
  <div class="text-center">
    <a href="./add.php" class="btn btn-info">Add Student</a>
  </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">City Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php
          $i=1;
            while($get_students=mysqli_fetch_assoc($get_students_query)){
            ?>
            <tr>
              <th scope="row"><?php echo $i++?></th>
              <td><?php echo $get_students['name']?></td>
              <td><?php echo $get_students['class']?></td>
              <td><?php echo $get_students['city_name']?></td>
              <td>
                  <a href="profile.php?id=<?php echo base64_encode($get_students['sid'])?>" class="btn btn-outline-info">View</a>
                  <a href="index.php?did=<?php echo base64_encode($get_students['sid'])?>" class="btn btn-outline-danger">Delete</a>
                  <a href="update.php?uid=<?php echo base64_encode($get_students['sid'])?>" class="btn btn-outline-success">Update</a>
              </td>
            </tr>
            <?php
            }
          ?>        
      </tbody>
    </table>
  </div>
</body>
</html>