<?php
include_once "./includes/head.php";
$get_admin_users_query = mysqli_query($conn, "select * from admin_users");

if (isset($_GET['id']) && isset($_GET['status'])) {
    $uid = base64_decode($_GET['id']);
    $status = $_GET['status'];

    $get_user_status_query = mysqli_query($conn, "select * from admin_users where uid='$uid'");

    if (mysqli_num_rows($get_user_status_query) > 0) {
        if ($status == "active") {
            $status_changed = update_admin_status($uid, "disabled", $conn);
        } else if ($status == "disabled") {
            $status_changed = update_admin_status($uid, "active", $conn);
        } else {
            $status_changed = update_admin_status($uid, "disabled", $conn);
        }

        if ($status_changed) {

            if($login_user_id==$uid){
                redirect("logout.php");
            }

            alert("changed");
            redirect("admin-users.php");
        } else {
            alert("not changed");
            redirect("admin-users.php");
        }
    } else {
        redirect("admin-users.php");
    }
}
?>

<div class="container my-5">
    <h1 class="text-center my-4">
        Admin Users
    </h1>
    <div class="text-center my-4">
        <a href="add-admin-user.php" class="btn btn-info">Add User</a>
    </div>
    <table id="dt" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Picture</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($get_admin_users = mysqli_fetch_assoc($get_admin_users_query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $get_admin_users['name'] ?></td>
                    <td><?php echo $get_admin_users['email'] ?></td>
                    <td>
                        <img src="./assets/images/users/<?php echo $get_admin_users['pro_pic'] ?>" height="100" alt="">
                    </td>
                    <td>
                        <?php
                        if ($get_admin_users['status'] == "active") {
                        ?>
                            <a href="admin-users.php?id=<?php echo base64_encode($get_admin_users['uid']) ?>&status=active" class="btn btn-warning">Disbaled?</a>
                        <?php
                        } else {
                        ?>
                            <a href="admin-users.php?id=<?php echo base64_encode($get_admin_users['uid']) ?>&status=disabled" class="btn btn-primary">Active?</a>

                        <?php
                        }
                        ?>

                    </td>
                    <td><?php echo $get_admin_users['role'] ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>


<?php
include_once "./includes/footer.php";
?>