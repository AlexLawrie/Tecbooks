<?php
include("../php/db.php");
include_once("admin_tools.php");
include("../php/functions.php");

session_start();




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
<?php
adminheaders();
?>

<p>Please logout when done!</p>

              <a class="nav-link" href="../php/logout.php">Logout</a>

<p></p>
<p></p>
<p></p>

<u><b><p>Add a Admin</p></b></u>
<?php
if (!isset($_POST['submit'])){
?>
          <div class="container">
	<form method="post">
	
		<div class="form-group">
		<label for="admin_name">Admin Name</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" name="admin_name" size="100" id="admin_name"> 
				</div>
			 </div>
		</div>
			 
		
		<div class="form-group">
		<label for="surname">Surname</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="surname" size="100" id="surname">
					</div>
				</div>

                <div class="form-group">
		<label for="admin_email">Admin Email</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="admin_email" size="100" id="admin_email">
					</div>
				</div>
		</div>

    <div class="form-group">
		<label for="admin_password">Admin Password</label>
				<div class="row">
					<div class="col">
					<input type="password" class="form-control" name="admin_password" size="100" id="admin_password">
					</div>
				</div>
		</div>

    <div class="form-group">
    <label for="add_admin"></label>
    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Add Admin">
        </div>
        </div>
        </div>
        <?php
  } else {
    $admin_name = $_POST['admin_name'];
    $surname = $_POST['surname'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];


    $insert_admin = "INSERT INTO `admins` (`id`, `admin_name`, `surname`, `admin_email`, `admin_password`, `gateway`) 
    VALUES (NULL, '$admin_name', '$surname', '$admin_email', '$admin_password', 'NO');";

    $insert_admin_query = mysqli_query($con, $insert_admin);

    if ($insert_admin_query) {
      mysqli_close($con);
          
      echo "<script language=\"JavaScript\">\n";
      echo "alert('Admin Added');\n";
      echo "window.location='admin_dashboard.php'";
      echo "</script>";
  }
}
?>
<p></p>
<p></p>
<p></p>

              <a class="nav-link" href="admin_dashboard.php">Back to Dashboard</a>

              <!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
