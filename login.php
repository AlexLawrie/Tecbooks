<?php
include("php/functions.php");
include("php/db.php");
include_once('php/login_tools.php');
// include_once('php/session.php');


//if they are logged in send them back to index
if(isset($_SESSION['auth'])){
	header("location: index.php");
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

<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <i><h1 class="my-4">Tecbooks</h1></i>
    <h1 class="my-4">Login</h1>
</div>
</div>

<div class="container">
</div>
                
	<div class="container">
        <div class="row">
			<div class="col">
				<form action="php/login_tools.php" method="post">
				<!-- Boxes that the user can type into to login to the website -->
				<div class="form-group">
					<label for="email">Email</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="email" name="email" id="email">
							</div>
						</div>
				</div>
					
				<div class="form-group">
					<label for="password">Password</label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control" placeholder="password" name="password" id"password">
							</div>
						</div>
				</div>
						
				<div class="form-group">
					<br>
						<div class="row">
							<div class="col">
							<!-- A login button -->
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Login" name="Login">
								<span>
								<?php


								//Using GET to pass information through the URL to check if the user can be found in the database and if the email or password box is empty
								if(isset($_GET['status'])){
									//STATUS CHECKS
									if($_GET['status'] == 'empty_email_password'){
										echo 'Please fill out the form above';	
									} 
									if($_GET['status'] == 'no_email_found'){
										echo 'User not found';	
									} 
								}
								?></span>
							</div>
						</div>
				</div>
				
			
				</form>


				<!-- A register button -->
				<form action="register.php">
				<div class="form-group">
					
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Not got an account?  Click here to Reigster">
							</div>
						</div>
				</div>
				</form>
				<!-- Admin Portal button -->
				<form action="admin/admin-login.php">
				<div class="form-group">
					
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Administrator Portal">
							</div>
						</div>
				</div>
			
				
                
	</div>
				
                </form>

				

			
</div>
</div>
</div>
                
                <?php
footers();
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
