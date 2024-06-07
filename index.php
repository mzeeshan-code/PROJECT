<?php
require_once 'connection.php';
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $user_id = $row['id'];
            $user_name = $row['name'];
            $user_phone_no = $row['phone_no'];
            $user_address = $row['address'];
            $role_as = $row['role_as'];
        }

        $_SESSION['auth'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_phone_no'=>$user_phone_no,
            'user_address'=>$user_address
        ];
        $_SESSION['status'] = "Logged In Successfully";
        if($_SESSION['auth'] == "1"){
            $_SESSION['status'] = "You are authorized as ADMIN";
            header("location: admin/index.php");
            exit(0);
        }else{
            header("location: userindex.php");
            exit(0);
        }    } else {
        $_SESSION['status'] = "Invalid Email or Password";
        $error[] = 'Incorrect Email or Password!';
    }
} else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <?php include('msg.php')?>
        <div class="signup-form">
            <!-- Login Form -->
            <form action="" method="post">
                <h2>Login</h2>
                <p class="hint-text">Already have an account? Login to your account.</p>
                
                <?php if(isset($error)){
                    foreach($error as $error_msg){
                        echo '<span class="error-msgs">'.$error_msg. '</span>';
                    };
                };
                ?>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-success btn-lg btn-block">Login</button>
                </div>
            </form>

            <div class="text-center">Don't have an account? <a href="registration.php">Signup</a></div>
        </div>
    </div>
</body>
</html>



