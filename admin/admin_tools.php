<?php
include("../php/db.php");
if (isset($_POST['admin_login'])) {
    if (empty($_POST['admin_name']) || empty($_POST['admin_password'])) {
            header('location: admin-login.php?status=empty_admin_name_password');
        }
    else {
        // Define $username and $password
        $admin_name=$_POST['admin_name'];
        $admin_password=$_POST['admin_password'];

        $query = mysqli_query($con, "SELECT * FROM admins WHERE admin_password = '$admin_password' AND admin_name = '$admin_name' AND gateway = 'NO';");
        $rows = mysqli_num_rows($query);


        if ($rows == 1) {
            $_SESSION['user'] = $admin_name; // Initializing Session
            $_SESSION['auth'] ='admin'; // Set this via DB later
            mysqli_close($con); 
            header("location: admin_dashboard.php?status=Login_Success");
        } else {
            mysqli_close($con); 
            header("location: admin-login.php?status=no_email_found");
        }
    
    }
}
?>