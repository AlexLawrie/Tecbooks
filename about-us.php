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
    <h1 class="my-4">About Us</h1>
    <img src="img/about_us/book_shop.jpg" width="1110" height="350">

    
</div>

</div>
Tecbooks have been supplying Edinburgh with the latest and greatest books on computers since 1992.  We focus on books for all levels, from how to use a computer to how to create a website.  We focus on three major 
categories, Computing, Programming and Education.  People from all ages and backgrounds come to Tecbooks.  You will find students from the local universities come to buy books on how to program in C++ to seniors 
coming to buy a book on how to use a computer or a teenager coming to buy a book on how his home network runs.  We also price match any competitors, so if you see a book on a competitors store for cheaper than 
we have it for, provide proof and we will match the price.
<p></p>
<p></p>
<!-- This is the google maps API for showing your companys location on your website through google maps -->
<div class="container">
  <div class="row">
    <div class="col-sm">
    <iframe width="600" height="450" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ84ZScijEh0gR4qkUc-ck9ks&key=AIzaSyC7sHy7vXjGNDuKWaZeJIJg1SEFX6JdPvs" allowfullscreen></iframe>
    </div>
    <div class="col-sm boxed">
    <p>Contact Number: 07123 456 789</p>
    <p> Address: Bankhead Avenue</p>
    <p>City: Edinburgh</p>
    <p>Postcode: EH11 4DE</p>
    <p>Email: info@tecbooks.com</p>
    </div>
    <div class="col-sm">
    </div>
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







    