<?php
include("db.php");
session_start();
//This is stating that if the 'Login' button is pressed and the email and password field are emtpy it will show an error using GET
if (isset($_POST['Login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
            header('location: ../login.php?status=empty_email_password');
        }
    else {
        //Define username and password
        $email=$_POST['email'];
        $password=$_POST['password'];


        //All password used in the website will be encrypted.  The key to decrypt the passwords is 'alex'
		$salt = base64_encode('alex');
        $encrypted_password = crypt($password, $salt);


        $query = mysqli_query($con, "SELECT * FROM users WHERE password='$encrypted_password' AND email='$email'");
        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            $_SESSION['user'] = $email; // Initializing Session
            $_SESSION['auth'] ='user'; // Set this via DB later
            mysqli_close($con); 
            header("location: ../index.php?status=Login_Success");
        } elseif ($rows == 0) {
            mysqli_close($con); 
            header("location: ../login.php?status=no_email_found");
        }
    
    }
    
}
    ?>