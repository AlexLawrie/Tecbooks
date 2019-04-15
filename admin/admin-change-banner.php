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
<p>To change the banner, rename the image you would like to change to either bannerone.png, bannertwo.png, or bannerthree.png and move it into the web servers www/tecbooks/img/banner folder.  
the one, two, and three represent what image shows up first or last.  Please make sure the image is 950x350 pixels and a jpg file.</p>


              <a class="nav-link" href="admin_dashboard.php">Back to Dashboard</a>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
