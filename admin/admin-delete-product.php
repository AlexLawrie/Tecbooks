<?php
include("../php/db.php");
include_once("admin_tools.php");
include("../php/functions.php");

session_start();



//The code below will delete a item from the database when the admin enters in its id number.  Its id number is in the URL of the product.
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
<u><b><p>Delete a Product</p></b></u>
<?php
if (!isset($_POST['submit'])){
?>

          <div class="container">
	<form method="post">

<div class="form-group">
		<label for="review_name">Item Number (Enter the Products Item Number, this can be found in the URL of the Product.)</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" name="id" size="2" id="id"> 
				</div>
			 </div>
		</div>
		<div class="form-group">
    <label for="Add Review"></label>
    <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Delete Product">
        </div>
        </div>
        </div>
		<?php
} else {
	$id = $_POST['id'];

	$delete_product = "DELETE FROM products WHERE id IN ($id);";

	$delete_product_query = mysqli_query($con, $delete_product);

	if ($delete_product_query) {
		mysqli_close($con);
			
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Product Deleted');\n";
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