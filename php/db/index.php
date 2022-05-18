<?php
include_once "./db.php";


$get_students_query=mysqli_query($con,"select * from students");
// $get_students=mysqli_fetch_assoc($get_students_query);
// $get_students=mysqli_fetch_row($get_students_query);
// $get_students=mysqli_fetch_array($get_students_query);


while($get_students=mysqli_fetch_assoc($get_students_query)){
    
    echo "<pre>";
    print_r($get_students);

}
?>