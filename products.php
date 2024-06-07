<?php
require_once 'connection.php';

// Check if a search query is provided
if(isset($_GET['search'])) {
    // Sanitize the search query to prevent SQL injection
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    
    // Construct the SQL query to search for products
    $sql = "SELECT * FROM productlist WHERE product_name LIKE '%$search_query%'";
} else {
    // If no search query is provided, fetch all products
    $sql = "SELECT * FROM productlist";
}

// Execute the SQL query
$all_products = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<?php include_once 'header.php'; ?>

<main class="container my-3">
<?php
while($row = mysqli_fetch_assoc($all_products)){
    $imageData = $row["image"]; 
    $imageBase64 = base64_encode($imageData);
?> 
<div class="col-lg-3">      
    <div class="card">
        <div class="image">
            <img src="data:image/jpeg;base64,<?php echo $imageBase64; ?>" alt="">                
        </div>
        <div class="caption">
            <p class="rate">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </p>
            <p class="product_name"><?php echo $row["product_name"]; ?></p>
            <p class="price"><b>Rs.<?php echo $row["price"]; ?></b></p>
        </div>
        <button class="add" data-id="<?php echo $row["product_id"];?>" >Add to Cart</button>                
    </div>
</div>
<?php
    } 
?>
</main>

<script>
   var product_id = document.getElementsByClassName("add");
   for(var i = 0; i < product_id.length; i++){
       product_id[i].addEventListener("click", function(event){
           var target = event.target;
           var id = target.getAttribute("data-id");
           var xml = new XMLHttpRequest();
           xml.onreadystatechange = function(){
               if(this.readyState == 4 && this.status == 200){
                   var data = JSON.parse(this.responseText);
                   target.innerHTML = data.in_cart;
                   document.getElementById("badge").innerHTML = data.num_cart + 1;
               }
           }

           xml.open("GET","connection.php?id="+id,true);
           xml.send();
        
       })
   }
</script>
<?php include 'footer.php'; ?>
</body>
</html>
