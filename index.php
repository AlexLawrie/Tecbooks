<?php
//require means that this page needs these two php files to function
require("php/functions.php");
require("php/db.php");

//starting the session if someone logs in
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>
<!-- A function being called from functions.php -->
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
        <!-- /.col-lg-3 -->

<?php
bannerimages();
?>

          <div class="row">
<?php
          FrontPageDeals()
          ?>

           

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
footers();
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>