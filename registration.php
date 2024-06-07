<?php 
require_once 'connection.php';
if(isset($_POST['submit'])){  // Change to 'SUBMIT'
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['confirm_password']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $select = "SELECT * FROM user WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
                header('location: index.php');

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
        header('location: registration.php');
    } else {
        if($pass != $cpass){
            $error[] = 'Password not matched!';
            $_SESSION['name'] = $name;
        } else {
            $insert = "INSERT INTO user(name, email, password, phone_no, address) VALUES('$name','$email','$pass','$phone_no','$address')";
            mysqli_query($conn, $insert);
            echo "<script type='text/javascript'> alert('Successfuly Registered')</script>";
            header('location:../index.php');
            $_SESSION['name'] = $name;

        }
    }
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
  <link href="css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script type="text/javascript">
            window.history.forward();
    </script>

</head>
<body>
    <div class="form">
<div class="signup-form">
    <form action="" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <?php if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msgs">'.$error. '</span>';
            };
        };
        ?>
        <div class="form-group">
        	<input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>    
        <div class="form-group">
            <input type="tel" class="form-control" name="phone_no" placeholder="Phone No." required="required">
        </div> 
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <input type="submit" name="submit" value="Register Now" class="form-btn btn btn-success btn-lg btn-block">

        </div>
        <div class="text-center">Already have an account? <a href="index.php">Log in</a>
    <?php
    ?>
    </div>

    </form>

    </div>
</div>
</body>
</html>