<?php

    function update_admin_status($id,$status,$conn)
    {
        return mysqli_query($conn,"UPDATE `admin_users` SET `status` = '$status' WHERE `admin_users`.`uid` = '$id'");
    }

?>