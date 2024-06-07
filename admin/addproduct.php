<?php
require_once '../connection.php';
include('header.php');
include('topbar.php');
include('sidebar.php');

if(isset($_POST['upload'])) {
    // Get the product name and price
    $Name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    // File upload handling
    $targetDirectory = "../images"; // Directory where images will be stored
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]); // Path of the uploaded file
    $uploadOk = 1; // Flag to check if the file was uploaded successfully

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) { // Adjust the file size limit as needed
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can adjust this list)
    $allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif');
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedFileTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // If $uploadOk is still 1, move the uploaded file to the target directory
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, now insert product information into the database
            $sql = "INSERT INTO productlist (product_name, price, image) VALUES ('$Name', '$price', '$targetFile')";

            if($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<br><br><br>
<div class="signup-form" style="text-align:center;">
    <form action="" method="post" enctype="multipart/form-data"> <!-- Add enctype attribute for file uploads -->
        <div class="form-group">
            <input type="text" name="name" placeholder="Product Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="price" placeholder="Price" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="image" placeholder=" Image" required="required">
        </div> 
        <div>
            <button type="submit" name="upload" class="btn btn-success">Upload</button>
        </div>
    </form>
</div>
<br><br><br>

<?php
include('footer.php');
?>
