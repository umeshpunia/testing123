<?php


if($_GET['x']){
    echo "<pre>";
    print_r($_GET);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form >
    <input type="text" name="email"> <br>
    <input type="text" name="password"> <br>
    <input type="submit" name="x">
</form>


</body>
</html>