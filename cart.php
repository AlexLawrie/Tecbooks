<?php
//require means that this page needs these two php files to function
require("php/functions.php");
require("php/db.php");

//starting the session if someone logs in
session_start();

if(!isset($_SESSION['auth'])){
  echo "<script language=\"JavaScript\">\n";
  echo "alert('Please login to check out');\n";
  echo "window.location='index.php'";
  echo "</script>";
}

?>

<html lang="en">

  <head>
<!-- Required charset and meta names for Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


<!-- Code required for thr paypal button -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>

<!-- The title is the name that appears on the tab in your web browser -->
    <title>Tecbooks</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>
<!-- A function being called from functions.php -->
<?php
headers();
?>

<div class="container">

<div class="row">

  <div class="col-lg-3">

    <i><h1 class="my-4">Tecbooks</h1></i>

    </div>
    
    </div>
    </div>

<?php Cart();?>

<?php
footers();
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>