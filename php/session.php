<?php
include_once("db.php");
include_once("login_tools.php");
include_once("login.php");


session_start();// Starting Session
// Storing Session
$email_check = "";
if(isset($_SESSION['user'])){
    $email_check=$_SESSION['user'];
}
// SQL Query To Fetch Complete Information Of User
$usr_sql=mysqli_query( $con, "SELECT email FROM users WHERE email='$email_check'");
$usr_row = mysqli_fetch_assoc($ses_sql);

$login_session =$ses_row['email'];

if(!isset($login_session)){
mysqli_close($con); // Closing Connection
}
?>