<?php
include("../php/db.php");
include_once('admin_tools.php');


?>
<html lang="en">

<head>
<!-- Required charset and meta names for Bootstrap -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- The title is the name that appears on the tab in your web browser -->
  <title>Tecbooks</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>
<body>



<div class="container">

<div class="row">

  <div class="col-lg-3">

    <i><h1 class="my-4">Tecbooks</h1></i>
    <h1 class="my-4">Admin Login</h1>
</div>
</div>

<div class="container">
</div>
                
	<div class="container">
        <div class="row">
			<div class="col">
				<form action="admin_tools.php" method="post">
				
				<div class="form-group">
					<label for="admin_name">Admin Name</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="Admin Name" name="admin_name" id="admin_name">
							</div>
						</div>
				</div>
					
				<div class="form-group">
					<label for="admin_password">Password</label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control" placeholder="Password" name="admin_password" id"admin_password">
							</div>
						</div>
				</div>
						
				<div class="form-group">
					<br>
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Login" name="admin_login">
								<span>
								<?php 
								if(isset($_GET['status'])){
									//STATUS CHECKS
									if($_GET['status'] == 'empty_admin_name_password'){
										echo 'Please fill out the form above';	
									} 
									if($_GET['status'] == 'no_admin_found'){
										echo 'User not found';	
									} 
								}
								?></span>
							</div>
						</div>
				</div>
				
			
				</form>

				 <!-- Bootstrap core JavaScript -->
				 <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>