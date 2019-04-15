<?php
include("db.php");

function headers(){
//Echo shows the following code on the webpage.  For this to show this function(headers) must be called
    echo'
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="img/logo/booklogotwo.png" alt="Tecbooks logo" width="40" height="40" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About</a>
            </li>

'; 
//this code is stating that if the user is logged in using a php session then login will disapear and logout will appear
if(!isset($_SESSION['auth'])){
echo'
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
';
}
echo'

            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"></a>
            </li>

            '; 
            if(isset($_SESSION['auth'])){
            echo'
            <li class="nav-item">
              <a class="nav-link" href="php/logout.php">Logout</a>
            </li>
';
}
echo'
<li class="nav-item">
              <form action="filter.php" method="get">
              <input type="text" name="search" placeholder="Search for books...">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>';
}

function footers(){
  echo'
  <footer class="py-5 bg-dark">
    <div class="container">
    <center><p class="m-0 text-center text-white">Tecbooks Social Media Links</p>
      <a href="www.facebook.com">
        <img src="img/footer_logo/facebook.png" width="40" height="40">
      </a>
      <a href="www.twitter.com>">
    <img src="img/footer_logo/twitter.png" width="40" height="40">
      </a>
    </div> </center> 
  </footer>
  ';
}

function bannerimages(){
  //Code within a function is stuck within the function.  To use a variable outside a function it has to have global next to it.  $con is from db.php
  global $con;
  //$get_banner is a variable that is an sql query
  $get_banner = "SELECT banner_image, banner_name, active FROM banner";
  //Run_get_banner stores the result from the query being executed
  $run_get_banner = mysqli_query($con, $get_banner);

  echo '<div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
  <div class="carousel-inner" role="listbox">';
//While is keep showing results of the code being true untill there is nothing left to show
//$row_banner = mysqlifetch_array is fetching the results from $get_banner
  while($row_banner = mysqli_fetch_array($run_get_banner)){
    $banner_image = $row_banner['banner_image'];
    $banner_name = $row_banner['banner_name'];
    $active = $row_banner['active'];
    echo'<div class="carousel-item '.$active.'">
          <img class="d-block img-fluid" src="img/banner/'.$banner_image.'" alt="'.$banner_name.'">
        </div>';
    }
  echo'</div>';
    echo'<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>';
    
}


//1 = best sellers
//2 = education#
//3 = computing
//4 = programming
//5 = front page (max 6 products)

function FrontPageDeals(){
  
    global $con;
    $get_products = "SELECT * FROM products WHERE product_category = 5";
    
    $run_get_products = mysqli_query($con, $get_products);
    
    while($row_products = mysqli_fetch_array($run_get_products)){
      $product_id = $row_products['id'];
      $product_title =  $row_products['product_title'];
      $product_price = $row_products['product_price'];
      $product_image = $row_products['product_image'];
      $product_description = $row_products['product_description'];
      $product_was_price = $row_products['product_was_price'];
    
      echo'
        <div class="card col-lg-4 col-md-6 mb-4">
        <div class="card h-200">
          <a href="#"><img class="card-img-top" src="img/products/'.$product_image.'" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="product-page.php?item='.$product_id.'">'.$product_title.'</a>
            </h4>
            <h4>Was £'.$product_was_price.'</h4> <h1>Now £'.$product_price.'!</h1>
            <p class="card-text">'.substr($product_description, 0, 155).' ...</p>
          </div>

        </div>
      </div> ';
    }
    
    }


function ItemsInBestSellers(){

  global $con;
  $get_products = "SELECT * FROM products WHERE product_category = 1";
  
  $run_get_products = mysqli_query($con, $get_products);
  
  while($row_products = mysqli_fetch_array($run_get_products)){
    $product_id = $row_products['id'];
    $product_title =  $row_products['product_title'];
    $product_price = $row_products['product_price'];
    $product_image = $row_products['product_image'];
    $product_description = $row_products['product_description'];
  
    echo'
      <div class="card col-lg-4 col-md-6 mb-4">
      <div class="card h-200">
        <a href="#"><img class="card-img-top" src="img/products/'.$product_image.'" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="product-page.php?item='.$product_id.'">'.$product_title.'</a>
          </h4>
          <h5>£'.$product_price.'</h5>
          <p class="card-text">'.substr($product_description, 0, 155).' ...</p>
        </div>

      </div>
    </div> ';
  }
  
  }

  function ItemsInEducation(){
    
      global $con;
      $get_products = "SELECT * FROM products WHERE product_category = 2";
      
      $run_get_products = mysqli_query($con, $get_products);
      
      while($row_products = mysqli_fetch_array($run_get_products)){
        $product_id = $row_products['id'];
        $product_title =  $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $product_image = $row_products['product_image'];
        $product_description = $row_products['product_description'];
      
        echo'
          <div class="card col-lg-4 col-md-6 mb-4">
          <div class="card h-200">
            <a href="#"><img class="card-img-top" src="img/products/'.$product_image.'" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="product-page.php?item='.$product_id.'">'.$product_title.'</a>
              </h4>
              <h5>£'.$product_price.'</h5>
              <p class="card-text">'.substr($product_description, 0, 155).' ...</p>
            </div>

          </div>
        </div> ';
      }
      
      }

      function ItemsInComputing(){
        
          global $con;
          $get_products = "SELECT * FROM products WHERE product_category = 3";
          
          $run_get_products = mysqli_query($con, $get_products);
          
          while($row_products = mysqli_fetch_array($run_get_products)){
            $product_id = $row_products['id'];
            $product_title =  $row_products['product_title'];
            $product_price = $row_products['product_price'];
            $product_image = $row_products['product_image'];
            $product_description = $row_products['product_description'];
          
            echo'
              <div class="card col-lg-4 col-md-6 mb-4">
              <div class="card h-200">
                <a href="#"><img class="card-img-top" src="img/products/'.$product_image.'" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="product-page.php?item='.$product_id.'">'.$product_title.'</a>
                  </h4>
                  <h5>£'.$product_price.'</h5>
                  <p class="card-text">'.substr($product_description, 0, 155).' ...</p>
                </div>

              </div>
            </div> ';
          }
          
          }

          function ItemsInProgramming(){
            
              global $con;
              $get_products = "SELECT * FROM products WHERE product_category = 4";
              
              $run_get_products = mysqli_query($con, $get_products);
              
              while($row_products = mysqli_fetch_array($run_get_products)){
                $product_id = $row_products['id'];
                $product_title =  $row_products['product_title'];
                $product_price = $row_products['product_price'];
                $product_image = $row_products['product_image'];
                $product_description = $row_products['product_description'];
              
                echo'
                  <div class="card col-lg-4 col-md-6 mb-4">
                  <div class="card h-200">
                    <a href="#"><img class="card-img-top" src="img/products/'.$product_image.'" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="product-page.php?item='.$product_id.'">'.$product_title.'</a>
                      </h4>
                      <h5>£'.$product_price.'</h5>
                      <p class="card-text">'.substr($product_description, 0, 155).' ...</p>
                    </div>

                  </div>
                </div> ';
              }
              
              }

              function GetOneProduct() {
                global $con;

                $item = $_GET['item'];
                $get_avg_review = "SELECT AVG(reviews.review_score) FROM reviews, products WHERE products.id = $item AND reviews.id = products.id;";
                $query = mysqli_query($con, $get_avg_review);
                $avg_reviews = mysqli_fetch_assoc($query);
                $average_review = $avg_reviews['AVG(reviews.review_score)'];
                

                if(isset($_GET["item"])){
                  $item = $_GET["item"];

                  $get_products = "SELECT products.*,reviews.review_score FROM products, reviews WHERE products.id = $item;";
                  $qry = mysqli_query($con, $get_products);
                  $row_products = mysqli_fetch_assoc($qry);
                    $product_id = $row_products['id'];
                    $product_title = $row_products['product_title'];
                    $product_price = $row_products['product_price'];
                    $product_image = $row_products['product_image'];
                    $product_description = $row_products['product_description'];
                    $product_qty = $row_products['product_qty'];

                    if(isset($_POST['addcart']))
                    {
                      $SQL = "INSERT INTO cart (id, user_ip_address, qty) VALUES ('$item', '127.0.0.1', '1')";
                      $result = mysqli_query($con, $SQL);
                    
                  
                    if($result) {
                      mysqli_close($con);
                          //A JavaScript alert box
                      echo "<script language=\"JavaScript\">\n";
                      echo "alert('Added to Cart');\n";
                      echo "window.location='index.php'";
                      echo "</script>";
                  }
                }

//substr is only showing part of a block of text.  The 0 being what character it starts at and the 1 being how many characters you want to show
              echo'
              <div class="col-lg-9">

              <div class="card mt-4">
                <img class="card-img-top img-fluid" src="img/products/'.$product_image.'" alt="">
                <div class="card-body">
                  <h3 class="card-title">'.$product_title.'</h3>
                  <h4>£'.$product_price.'</h4>
                  <h5>'.$product_qty.' Available</h5>
                  <p class="card-text">'.$product_description.'</p>
                  <span class="text-warning">Average Rating = '.substr($average_review, 0, 1).'/5</span>
                  <p></p>
                  <form method="post">
                  <input class="btn btn-dark btn-lg btn-block" type="submit" name="addcart" value="Add to Cart"/>
                  </form>
                    
                </div>
              </div>
              ';
                }
              }

function ShowReviews(){
              global $con;

              $item = $_GET['item'];
              $get_reviews = "SELECT reviews.*,products.id FROM reviews, products WHERE products.id = '$item' AND reviews.id = products.id;";

              $run_get_reviews = mysqli_query($con, $get_reviews);
              
              while($row_reviews = mysqli_fetch_array($run_get_reviews)){
                $review_name = $row_reviews['review_name'];
                $review_text =  $row_reviews['review_text'];
                $review_score = $row_reviews['review_score'];
                $review_id = $row_reviews['review_id'];
              
                echo'
                <p>'.$review_text.'</p>
                <small class="text-muted">Posted by '.$review_name.'('.$review_id.') | '.$review_score.'/5 Rating</small>
                <hr>';

                
              }
                
            }

            function filter(){
              global $con;
              
              if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $get_revision = "SELECT * FROM products WHERE product_title LIKE '%$search%';";
                $run_get_revision = mysqli_query($con, $get_revision);
              while($row_revision = mysqli_fetch_array($run_get_revision)){
                $revision_product_image = $row_revision['product_image'];
                $revision_product_id = $row_revision['id'];
                $revision_product_title = $row_revision['product_title'];
                $revision_product_price = $row_revision['product_price'];
                $revision_product_description = $row_revision['product_description'];

                echo'
                  <div class="card col-lg-4 col-md-6 mb-4">
                  <div class="card h-200">
                    <a href="#"><img class="card-img-top" src="img/products/'.$revision_product_image.'" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="product-page.php?item='.$revision_product_id.'">'.$revision_product_title.'</a>
                      </h4>
                      <h5>£'.$revision_product_price.'</h5>
                      <p class="card-text">'.substr($revision_product_description, 0, 155).' ...</p>
                    </div>

                  </div>
                </div> ';
              }
            }
          }

          function Cart(){
            global $con;
            $ItemInCart = "SELECT cart.*,products.product_title, products.product_price, products.product_image FROM cart, products WHERE cart.id = products.id AND cart.user_ip_address = '127.0.0.1'";
            $result = mysqli_query($con, $ItemInCart);
          
            $TotalPrice = "SELECT SUM(product_price) FROM cart, products WHERE cart.id = products.id";
            $row1 = mysqli_query($con, $TotalPrice);
          
            if(isset($_POST['deletecart']))
            {
              $SQL = "DELETE FROM cart";
              $result = mysqli_query($con, $SQL);

              if($result){
                mysqli_close($con);
                          //A JavaScript alert box
                      echo "<script language=\"JavaScript\">\n";
                      echo "alert('All products removed from cart');\n";
                      echo "window.location='index.php'";
                      echo "</script>";
              }
            }



            while($row = mysqli_fetch_array($row1)){
              $sum_product_price = $row['SUM(product_price)'];

            echo '<table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Total Price = £'.$sum_product_price.'</th>
              </tr>
              </thead>
  <tbody>';
          
            } 
                  while ($row_products = mysqli_fetch_assoc($result)) {
                  $product_title = $row_products['product_title'];
                  $product_price = $row_products['product_price'];
                  $product_image = $row_products['product_image'];
          
          
          echo'<tr>
          <td>'.$product_title.'</td>
          <td>£'.$product_price.'</td>
          <td><img src="img/products/'.$product_image.'"></td>
        </tr>';}

          echo'</tbody>
          </table>
           <center><div id="paypal-button"></div></center>

  <script>
    paypal.Button.render({
      env: "production", // Or "sandbox",

      client: {
        sandbox:    "AeMx6vcbZ584cpNIfz_rVU9REqJL7TfQaJs6R4ueLfkbIjbQ3e3i2wdpXkwi02Ml3WIogRFkMbaoz7Kl",
        production: "AYr6cuzKXWROhchevJDOyYYyCa0ydnIzvqy9NTiY7fo48Gp1-oBFbLDWx4IWS-fdGr6zrwud6p9fdByU"
    },

      commit: true, // Show a "Pay Now" button

      style: {
        color: "gold",
        size: "large"
      },

      payment: function(data, actions) {
        return actions.payment.create({
          payment: {
              transactions: [
                  {
                      
                      amount: { total: "'.$sum_product_price.'", currency: "GBP" }
                  }
              ]
          }
      });
      },

      onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {

          // The payment is complete!
          // You can now show a confirmation message to the customer
          window.location="success.php";
          

      });
      },

      onCancel: function(data, actions) {
        /* 
         * Buyer cancelled the payment 
         */
      },

      onError: function(err) {
        /* 
         * An error occurred during the transaction 
         */
      }
    }, "#paypal-button");
  </script>
          <form method="post">
          <th scope="col"><input class="btn btn-dark btn-lg btn-block" type="submit" name="deletecart" value="Delete Cart"/></th>
          </form>
          <p>
          </p>';
          
          
          }

        

          function adminheaders(){
            //Echo shows the following code on the webpage.  For this to show this function(headers) must be called
                echo'
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                  <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                      </ul>
                    </div>
                  </div>
                </nav>';
            }


            function adminfooters(){
              echo'
              <footer class="py-5 bg-dark">
                <div class="container">

                </div>
              </footer>
              ';
            }