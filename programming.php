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

 <!-- Page Content -->
 <div class="container">

<div class="row">

  <div style="margin: 10px;" class="col-lg-3">

    <i><h1 class="my-4">Tecbooks</h1></i>
    <h1 class="my-4">Programming</h1>
    <div class="list-group">
      <a href="best-sellers.php" class="list-group-item">Best Sellers</a>
      <a href="education.php" class="list-group-item">Education</a>
      <a href="computing.php" class="list-group-item">Computing</a>
      <a href="programming.php" class="list-group-item">Programming</a>
    </div>
    <h1 class="my-4">Filter</h1>
    <a href="filter.php?search=java" class="list-group-item">Java</a>
      <a href="filter.php?search=bash" class="list-group-item">Bash</a>
      <a href="filter.php?search=python" class="list-group-item">Python</a>
  </div>
  </div>
  </div>

<div class="container">
    <div class="row">
    <?php 
    ItemsInProgramming();
    ?>
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