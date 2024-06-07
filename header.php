<?php
  
  require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript">
            window.history.forward();
    </script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">MEDSTR</a>

      <!-- Toggle button for small screens -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar items for larger screens -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="userindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delivery.php">Delivery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <!-- Search bar -->
        <form class="form-inline my-2 my-lg-0 mx-auto d-flex">
    <input class="form-control mr-sm-2 flex-grow-1" name="search" value="<?php 
    if(isset($_GET['search'])) {echo $_GET['search'];}
    ?>" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-secondary my-2 my-sm-0" name="searchbtn" id="srcbtn" type="submit">Search</button>
</form>        <!-- User and Cart icons -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user" style="font-size: 25px;"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!-- Dropdown menu items -->
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="testprd.php">My History</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="logout.php" method="post">
            <button type="submit" name="logout" class="dropdown-item">Logout</button>
          </form>
        </li>
    </ul>
    </li>          
    <li class="nav-item">
            <a class="nav-link" href="cart.php">
              <i class="fa fa-shopping-cart" style="font-size: 25px;"></i><span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span>
            </a>
          </li>
</ul>
      </div>
    </nav> 
    <!-- <a href="cart.php" class="cartsmb"><i class="fa fa-shopping-cart" style="font-size: 25px;"></i> <span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span></a> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>