
<html>
<head>
  <title>WHEELS ON FIRE</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>WHEELS ON FIRE</title>
<link rel="stylesheet" href="home.css"></link>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
</head>
<body> <header>
  <div class="banner">
    <div class="circle-image">
        <img width="189" height="120" style="border-radius: 50%;"  src="logo1.jpg" loading="eager" alt=" Best place to buy New and Used Cars in India">
        <div class="search-container">
            <form action="/search" method="GET">
              <input type="text" name="query" placeholder="Search...">
              <input type="submit" value="Search">
            </form>
          </div>
          <div class="log">
          <button class="button login-button">Log In</button>
  <button class="button signup-button">Sign Up</button>
</div>
      </div>
     
  </div>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="newcar.html">New car</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="usedcar.html">Used car <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SELLCAR.HTML">Sell car</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modify.html">Modify</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="NEWS.HTML">News and Reviews</a>
        </li>
        <li class="nav-item">
            
            
            <div class="dropdown">
                <h5 class="more">More</h5>
                <div class="dropdown-content">
                  <a href="HOMEPAGE.HTML">HOME PAGE</a>
                  <a href="listedcar.php">Your Listed Car</a>
                  <a href="CART.HTML">YOUR CART</a>
                </div>
          </li>
      </ul>
    </div>
  </nav>
  <h1>Car  Sell Information</h1>
<?php
// Connect to the database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sellcar';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$company = $_POST["carMake"] ?? "";
$carModel = $_POST["carModel"] ?? "";
$carYear = $_POST["carYear"] ?? "";
$carPrice = $_POST["carPrice"] ?? "";
$carDescription = $_POST["carDescription"] ?? "";


// Store the car sell information in the database
$sql = "INSERT INTO cars (company1, model, year, price, description) VALUES ('$company', '$carModel', '$carYear', '$carPrice', '$carDescription')";
if ($conn->query($sql) === TRUE) {
  echo 'Car sell information stored successfully.';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}


$sql = "SELECT * FROM cars";   
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Display car information
  while ($row = $result->fetch_assoc()) {

    echo " <p><strong>Manufacture company:</strong> " . $row["company1"] . "</p> ";
    
    echo "<p><strong>Model:</strong> " . $row["model"] . "</p>";
    echo "<p><strong>Year:</strong> " . $row["year"] . "</p>";
    echo "<p><strong>Price:</strong> " . $row["price"] . "</p>";
    echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
    echo "<hr>";
  }
} else {
  echo "No car sell information found";
}
 

$conn->close();

?>

<div class="bottom-nav">
            <a href="https://www.facebook.com">Facebook</a>
            <a href="https://www.instagram.com">Instagram</a>
            <a href="https://www.twitter.com">Twitter</a>
            <a href="https://www.linkedin.com">LinkedIn</a>
          </div>
 
       
 
  

  <div class="foot1">
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>
<style>
  .company {
    font-weight: bold;
  }

  .model {
    color: blue;
  }

  .year {
    font-style: italic;
  }

  .price {
    color: green;
  }

  .description {
    font-size: 14px;
  }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>