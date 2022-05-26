<?php

echo "<pre>";
print_r($_SERVER['REQUEST_METHOD']);


// include_once "./db.php";
// if(isset($_POST['name'])  && isset($_POST['city'])){

//     $name=$_POST['name'];
//     $city=$_POST['city'];


//     $ins_sql="insert into students (name,city_name) values ('$name','$city')";

//     $ins_query=mysqli_query($con,$ins_sql);

//     if($ins_query){
//         $res=["status"=>200,"msg"=>"Added Success"];
//     }else{
//         $res=["status"=>500,"msg"=>"Not Added"];        
//     }
    
// }else{
//     // no name and no city
//     $res=["status"=>400,"msg"=>"Please Fill Fields"];
// }

// echo json_encode($res);

?>