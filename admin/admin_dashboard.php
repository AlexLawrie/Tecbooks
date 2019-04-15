<?php
include("../php/db.php");
include_once("admin_tools.php");
include("../php/functions.php");

session_start();

//This code states if the admin is not logged in, you will be sent back to the admin login page
if(isset($_SESSION['auth'])){
  if($_SESSION['auth'] == 'admin'){
  }
  else{
    header("Location: admin-login.php");
  }
}


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

              <a class="nav-link" href="admin-add-product.php">Add a Product</a>


              <a class="nav-link" href="admin-delete-product.php">Delete a Product</a>


              <a class="nav-link" href="admin-delete-review.php">Delete a Review</a>


              <a class="nav-link" href="admin-create-admin.php">Add a Admin</a>


              <a class="nav-link" href="admin-delete-admin.php">Delete a Admin</a>


              <a class="nav-link" href="admin-change-banner.php">Change Banner</a>


            <!-- Bootstrap core JavaScript -->
				 <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

<?php
adminfooters();
?>