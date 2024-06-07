<?php 
require_once 'connection.php';

// Include header.php only on the contact page
if (basename($_SERVER['PHP_SELF']) === 'contact.php') {
    include_once 'header.php';
}

if(isset($_POST['submit'])) {
    $Name = $conn->real_escape_string($_POST['name']);
    $Email = $conn->real_escape_string($_POST['email']);
    $Phone = $conn->real_escape_string($_POST['phoneno']);
    $Message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO reviews (name, email, phoneno, message) VALUES ('$Name', '$Email', '$Phone', '$Message')";
    
    if($conn->query($sql)) {
        echo "<script>alert('Thank you! We will contact you soon');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
 
 <!-- contact section -->
<section class="contact_section">
    <div class="container">
        <div class="row">
            <div class="custom_heading-container ">
                <h2>
                    Request A call back
                </h2>
            </div>
        </div>
    </div>
    <div class="container layout_padding2">
        <div class="row">
            <div class="col-md-5">
                <div class="form_contaier">
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1">Phone Number</label>
                            <input type="text" class="form-control" name="phoneno" id="exampleInputNumber1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMessage">Message</label>
                            <input type="text" class="form-control" name="message" id="exampleInputMessage">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="detail-box">
                    <h3>
                        Get Now Medicines
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
</body>
</html>
