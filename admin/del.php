<?php
require_once '../connection.php';

include('header.php');
include('topbar.php');
include('sidebar.php');

// Check if form is submitted
if(isset($_POST['delete'])){
    // Extract data from POST
    $user_id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['name']);
    $user_phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_address = mysqli_real_escape_string($conn, $_POST['address']);
    $role_as = mysqli_real_escape_string($conn, $_POST['role_as']);

    // Update query
    $query = "UPDATE user SET name='$user_name', phone_no='$user_phone_no', email='$email', address='$user_address', role_as='$role_as' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo '<script type="text/javascript">alert("User updated successfully.")</script>';
    } else {
        echo '<script type="text/javascript">alert("Error updating user. Please try again.")</script>';
    }
}

?>

<div>
    <h2><u>Edit User</u></h2>
</div>

<div class="signup-form" style="text-align:center;">
    <form action="" method="post">
        <?php
        if(isset($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "SELECT * FROM user WHERE id='$id'";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0){
                $row = mysqli_fetch_assoc($query_run);
        ?>
                <div class="form-group">
                    <p><b>Name</b></p>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Your Name" required="required">
                </div>
                <div class="form-group">
                    <p><b>Email</b></p>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <p><b>Phone No</b></p>
                    <input type="tel" name="phone_no" value="<?php echo $row['phone_no']; ?>" placeholder="Phone No." required="required">
                </div> 
                <div class="form-group">
                    <p><b>Address</b></p>
                    <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required="required">
                </div>
                <div class="form-group">
                    <p><b>Role</b></p>
                    <input type="text" name="role_as" value="<?php echo $row['role_as']; ?>" placeholder="Role as" required="required">
                </div>    
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <?php
            } else {
                echo "No Record Found!";
            }
        }
        ?>

        <div>
            <button type="submit" name="delete" class="btn btn-success">Delete</button>
        </div>
    </form>
</div>

<?php
include('footer.php');
?>
