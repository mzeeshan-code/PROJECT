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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
       include_once 'header.php';
    ?>
    <hr>
    <div class="hdng">
        <h4><b><u>My Cart</u></b></h4>

    </div>
    <div class="container cartcnt">
    <main class="col-md-9">
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM productlist WHERE product_id=".$row_cart["product_id"];
              $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
                $imageData = $row["image"]; 
                $imageBase64 = base64_encode($imageData);
        ?>
        <div class="col-lg-3"> 
            <div class="card">
                <div class="image">
                    <img src="data:image/jpeg;base64,<?php echo $imageBase64; ?>" alt="">
                </div>
                <div class="caption">

                    <p class="product_name"><?php echo $row["product_name"]; ?></p>
                    <p class="price"><b>Rs.<?php echo $row["price"]; ?></b></p>
                    <p class="quantity"><b>Quantity</b></p>
                    <input style="width: 40px;" type="number" min="1" name="cart_quantity" class="cartQuantity" value="1" data-price="<?php echo $row['price']; ?>">
                    <p>Total: Rs.<span class="product_total">0.00</span></p>
                    <button class="remove" onClick="window.location.reload();" data-id="<?php echo $row["product_id"]; ?>" >Remove from Cart</button>
                    <p style="font-size: 10px;">Double tap to remove!</p>
                </div>
            </div>
        </div>
        <?php } } ?>
    </main>
    <div class="col-md-3 order">
        <h5><b><u>Order Summary</u></b></h5>
        <table style="width:100%">
            <tr>
                <td>Items total</td>
                <td>Rs.<span id="items_total">0.00</span></td>            
            </tr>
            <tr>
                <td>Delivery Charges</td>
                <td>Rs. 250</td>
            </tr>
            <tr>
                <td><b>Grand Total</b></td>
                <td><b>Rs.<span id="grand_total"></b></td>
            </tr>
        </table>
        <button onclick="document.getElementByClass('payment').innerHTML = Date()" id="proceed" class="btn btn-primary">Proceed</button>
        <div class="payment">
            <p>Select the payment method and upload the transaction successful receipt.</p>
        <form method="$_GET">
            <label>
                <input type="radio" name="choice" value="option1"><b> EasyPaisa</b>
            </label><br>
            <small>0312345678</small> <br>

            <label>
                <input type="radio" name="choice" value="option2"> <b>JazzCash</b>
            </label><br>
            <small>0312345678</small> <br>
            <label>
                <input type="radio" name="choice" value="option3"> <b>Cash On Delivery</b> 
            </label><br><br>
            <input type="file" name="trx" id="trx" required>
            <br> <br>
            <input type="submit"name="order" class="btn btn-primary submit">        
        </form>
        </div>
    </div>
    </div>
    <script>
        document.getElementById('proceed').addEventListener('click', function() {
  var paymentElement = document.querySelector('.payment');
  paymentElement.style.display = 'block';
});
    </script>
    <script>
    // Function to update total for a specific product
    function updateProductTotal(inputElement) {
        var selectedQuantity = parseInt(inputElement.value);
        var price = parseFloat(inputElement.getAttribute('data-price'));
        var productTotalElement = inputElement.closest('.caption').querySelector('.product_total');
        
        if (!isNaN(selectedQuantity)) {
            var total = selectedQuantity * price;
            productTotalElement.innerText = total.toFixed(2);
        }
    }

    var cartQuantityInputs = document.querySelectorAll('.cartQuantity');
    cartQuantityInputs.forEach(function(cartQuantityInput) {
        updateProductTotal(cartQuantityInput);

        cartQuantityInput.addEventListener('input', function() {
            updateProductTotal(cartQuantityInput);
            updateItemsTotal();
        });
    });

    // Trigger the input event for each cartQuantityInput to initialize the product total
    cartQuantityInputs.forEach(function(cartQuantityInput) {
        var event = new Event('input');
        cartQuantityInput.dispatchEvent(event);
    });

    function updateItemsTotal() {
        var itemsTotal = 0;
        var productTotalElements = document.querySelectorAll('.product_total');

        productTotalElements.forEach(function(productTotalElement) {
            itemsTotal += parseFloat(productTotalElement.innerText);
        });

        document.getElementById('items_total').innerText = itemsTotal.toFixed(2);
        updateGrandTotal(); // Call updateGrandTotal here to update both itemsTotal and grandTotal
    }

    function updateGrandTotal() {
        var itemsTotal = parseFloat(document.getElementById('items_total').innerText);
        var deliveryCharges = 250; // Assuming delivery charges are Rs. 250
        var grandTotal = itemsTotal + deliveryCharges;
        document.getElementById('grand_total').innerText = grandTotal.toFixed(2);
    }

    updateGrandTotal(); // Initial call to set the grand total
</script>

<script>
    var remove = document.getElementsByClassName("remove");
    for (var i = 0; i < remove.length; i++) {
        remove[i].addEventListener("click", function(event) {
            var target = event.target;
            var cart_id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    target.innerHTML = this.responseText;
                    target.style.opacity = .3;
                }
            }

            xml.open("GET", "connection.php?cart_id=" + cart_id, true);
            xml.send();
        })
    }
</script>
    </body>
</html>