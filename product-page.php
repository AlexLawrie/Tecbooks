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
  <!-- /.col-lg-3 -->

<?php
GetOneProduct();
?>

          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <?php
              ShowReviews();
              ?>
            </div>
          </div>
          <!-- /.card -->
<?php
//If the post is not set means that if the button is not clicked on then the following variables below are created
//If is stating that if something is true then run the following block of code
if (!isset($_POST['addreview'])){
?>
          <div class="container">
    <p class="lead"><i class="fa fa-user-plus"></i>Leave a Review</p>
	<form action="product-page.php?item=<?php $item = $_GET['item']; echo $item ?>" method="post">
	
		<div class="form-group">
		<label for="review_name">Name</label>
			 <div class="row">
				<div class="col">
				<input type="text" class="form-control" placeholder="Name" name="review_name" size="255" id="review_name"> 
				</div>
			 </div>
		</div>
			 
		
		<div class="form-group">
		<label for="review_text">Review</label>
				<div class="row">
					<div class="col">
					<input type="text" class="form-control" placeholder="Type your review here!" name="review_text" size="255" id="review_text">
					</div>
				</div>
		</div>
    <div class="form-group">
		<label for="review_score">Score</label>
				<div class="row">
					<div class="col">

          <select name='review_score'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
					</div>
				</div>
		</div>
    <div class="form-group">
    <label for="Add Review"></label>
    <input class="btn btn-dark btn-lg btn-block" type="submit" name="addreview" value="Add Review">
        </div>
        </div>
        </div>
        <?php
  } else {
    //Variables.  Get meaning get inforamtion from the URL and POST meaning get information from the database or get ready to add information to the database
    $item = $_GET['item'];
    $username = $_POST['review_name'];
    $review_text = $_POST['review_text'];
    $review_score = $_POST['review_score'];

    $insert_review = "INSERT INTO reviews (id, review_name, review_text, review_score) VALUES ('$item', '$username', '$review_text', '$review_score')";

    $insert_review_query = mysqli_query($con, $insert_review);
//This is stating IF the user clicks the add review button then the following variables above this comment will be added into the database
    if ($insert_review_query) {
      mysqli_close($con);
          //A JavaScript alert box
      echo "<script language=\"JavaScript\">\n";
      echo "alert('Your review has been placed. Thank you!');\n";
      echo "window.location='index.php'";
      echo "</script>";
  }
}
        ?>
        <!-- /.col-lg-9 -->
 

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