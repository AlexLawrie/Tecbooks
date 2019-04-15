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

<u><b><p>Add a Product</p></b></u>
<?php
if (!isset($_POST['submit'])){
?>
          <div class="container">
	<form method="post">
	
		<div class="form-group">
		<label for="review_name">Product Title</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" name="product_title" size="100" id="product_title"> 
				</div>
			 </div>
		</div>
			 
		
		<div class="form-group">
		<label for="review_text">Product Price</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_price" size="10" id="product_price">
					</div>
				</div>
                <div class="form-group">
		<label for="review_text">Product Was Price (Enter 0.00 if not on Sale)</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_was_price" size="10" id="product_was_price">
					</div>
				</div>
		</div>
    <div class="form-group">
		<label for="review_score">Product Image Name and Extension (Place the image into the web server folder(www) of Tecbooks/img/products)</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_image" size="30" id="product_image">
					</div>
				</div>
		</div>
        <div class="form-group">
		<label for="review_text">Product Description</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_description" size="255" id="product_description">
					</div>
				</div>
                <div class="form-group">
                <p></p>
		<label for="review_score">Product Category</label>
        <p>1 = best sellers</p>
                <p>2 = education</p>
                <p>3 = computing</p>
                <p>4 = programming</p>
                <p>5 = front page (max 6 products)</p>
                <p>Only use 1 through 5.</p>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_category" size="1" id="product_category">
					</div>
				</div>
                <div class="form-group">
		<label for="review_score">Product Quantity</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_qty" size="10" id="product_qty">
					</div>
				</div>
                <div class="form-group">
		<label for="review_score">Product Posted Date</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" name="product_posted" size="6" id="product_posted">
					</div>
				</div>



    <div class="form-group">
    <label for="Add Review"></label>
    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Add Product">
        </div>
        </div>
        </div>
        <?php
  } else {
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_was_price = $_POST['product_was_price'];
    $product_image = $_POST['product_image'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_qty = $_POST['product_qty'];
    $product_posted = $_POST['product_posted'];


    $insert_review = "INSERT INTO `products` (`id`, `product_title`, `product_price`, `product_was_price`, `product_image`, `product_description`, `product_category`, `product_qty`, `average_review`, `product_posted`)  
    VALUES (NULL, '$product_title', '$product_price', '$product_was_price', '$product_image', '$product_description', '$product_category', '$product_qty', '', '$product_posted');";

    $insert_review_query = mysqli_query($con, $insert_review);

    if ($insert_review_query) {
      mysqli_close($con);
          
      echo "<script language=\"JavaScript\">\n";
      echo "alert('Product Added');\n";
      echo "window.location='admin_dashboard.php'";
      echo "</script>";
  }
}
?>
<p></p>
<p></p>


              <a class="nav-link" href="admin_dashboard.php">Back to Dashboard</a>


			<!-- Bootstrap core JavaScript -->
			<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

