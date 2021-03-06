<?php
require("php/functions.php");
require("php/db.php");

if(!isset($_SESSION)){
    session_start();
}

if(isset ($_SESSION["email"])!=""){
    header("Location: index.php");
}

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tecbooks</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<?php
headers();
?>

    <div class="container">
    <?php
				if(!isset($_POST['submit'])){
				?>

<div class="row">

  <div class="col-lg-3">

    <i><h1 class="my-4">Tecbooks</h1></i>
    <h1 class="my-4">Register</h1>
    </div>
    </div>
    </div>

    <div class="container">
    <p class="lead"><i class="fa fa-user-plus"></i>User Details</p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
		<div class="form-group">
		<label for="first_name">First Name</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="First name"name="first_name" size="255"> 
				</div>
			 </div>
		</div>
			 
		
		<div class="form-group">
		<label for="last_name">Surname</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" placeholder="Surname"name="surname" size="255">
					</div>
				</div>
		</div>
		
		<div class="form-group">
		<label for="email">Email</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="Email" name="email" size="255">
				</div>
			 </div>
		</div>
		
		<div class="form-group">
		<label for="password">Password</label>
			 <div class="row">
				<div class="col">
				<input type="password" class="form-control" placeholder="Password" name="password" size="255">
			 </div>
		 </div>
		</div>

        <div class="form-group">
		<label for="password">Confirm Password</label>
			 <div class="row">
				<div class="col">
				<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" size="255">
			 </div>
		 </div>
		</div>

        <p class="lead"><i class="fa fa-user-plus"></i>Address Details</p>

        <div class="form-group">
		<label for="first_name">Street Name</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="Full Street Name"name="street_name" size="255"> 
				</div>
			 </div>
		</div>

        <div class="form-group">
		<label for="first_name">Postcode</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="Postcode"name="postcode" size="255"> 
				</div>
			 </div>
		</div>

        <div class="form-group">
		<label for="first_name">City</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="City"name="city" size="255"> 
				</div>
			 </div>
		</div>

        <div class="form-group">
		<label for="first_name">Country</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="Country"name="country" size="255"> 
				</div>
			 </div>
		</div>


		<div class="form-group">
		<label for="confirm_password"></label>
			 <div class="row">
				<div class="col">
				<input class="btn btn-dark btn-lg btn-block" type="submit" value="Create Account">
				
				</div>
			 </div>

             
		
	</form>
			
		 </div>
         </div>

<?php

				} else {
					// Prepare the data to insert into our DB
					$first_name = $_POST["first_name"];
					$surname = $_POST["surname"];
					$email = $_POST["email"];
					$password = $_POST["password"];
					$confirm_password = $_POST["confirm_password"];
                    $ip_address = '127.0.0.1';
                    $street_address = $_POST["street_address"];
                    $postcode = $_POST["postcode"];
                    $city = $_POST["city"];
                    $country = $_POST["country"];


	if ($password == $confirm_password) {

		// A higher "cost" is more secure but it consumes more processing power
		$cost = 10;
		// Create a random salt
		$binarySalt = mcrypt_create_iv ( 16, MCRYPT_DEV_URANDOM);
		$salt = strtr (base64_encode($binarySalt), '+', '.');
		
		// Prefix info about the hash to so PHP knows how to verify it later
		// "$2a$" It means that we're using the blowfish alghorithm
		$salt = sprintf("$2a$%02d$", $cost) . $salt;

		// Hash the password with the salt
		$encrypted_password = crypt($password, $salt); }

		else {

		echo"<script>\n";
		echo"alert('Password Confirmed Failed!');\n";
		echo"window.location='register.php';\n";
		echo"</script>"; 
	}

	
	$exists = 0;

	
	$check_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
	
	
	$run_check_email_query = mysqli_query($con, $check_email);


	$num_row_email = mysqli_num_rows($run_check_email_query);

	$result = $num_row_email;

	if($result == 1){
		$exists = 1;

        $result = $num_row_email;
    }
		
if($exists == 1){
	echo"<script>\n";
	echo"alert('Email already exists!');\n";
	echo"window.location='register.php';\n";
	echo"</script>";
}

else {
	
	$insert_user = "INSERT INTO users (first_name, surname, email, password, str, ip_address, street_address, postcode, city, country) VALUES ('$first_name', '$surname', '$email', '$encrypted_password', '$salt', '$ip_address', '$street_address', '$postcode', '$city', '$country') ";
	$insert_user_query = mysqli_query($con, $insert_user);
	if ($insert_user_query) {
		mysql_close($con);
		echo "<script>\n"; 
		echo "alert('User added to database');\n";
		echo "window.location='index.php';\n"; 
		echo "</script>";
	} else {
		echo "alert('Error in adding user to database:' . $mysqli_query_errno)";
		exit;
	}

}

}
				?>






    <?php
footers();
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>