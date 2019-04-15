<?php
require("php/functions.php");
require("php/db.php");

session_start();
$email = "";
$_SESSION['email'] = $email;
var_dump($_SESSION);
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

<?php
	if(!isset($_POST['submit'])){
?>


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
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				
				<div class="form-group">
					<label for="email">Email</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="email" name="email">
							</div>
						</div>
				</div>
					
				<div class="form-group">
					<label for="password">Password: </label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control" placeholder="password" name="password">
							</div>
						</div>
				</div>
						
				<div class="form-group">
					<br>
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Login">
							</div>
						</div>
				</div>
				
			
				</form>


				
				<form method="get" action="register.php">
				<div class="form-group">
					
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Not got an account?  Click here to Reigster">
							</div>
						</div>
				</div>
	</div>
				
                </form>

				<?php

				} else {
						
						$email = $_POST['email'];
						$password = $_POST['password'];

						
						$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

						
						$result = mysqli_query($con, $sql);

						
						$row = mysqli_fetch_array($result);
				} 


						?>
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
