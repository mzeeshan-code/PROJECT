<?php
require_once 'connection.php';
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status'] = "Logout Successfully";
    header('location: index.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
            window.history.forward();
    </script>

</head>
<body>
    
</body>
</html>
