<?php
require("php/functions.php");
require("php/db.php");


session_start();

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
    <div class="list-group">
      <a href="best-sellers.php" class="list-group-item">Best Sellers</a>
      <a href="education.php" class="list-group-item">Education</a>
      <a href="computing.php" class="list-group-item">Computing</a>
      <a href="programming.php" class="list-group-item">Programming</a>
    </div>

  </div>
  </div>
  </div>
  <!-- /.col-lg-3 -->

  <?php
footers();
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>