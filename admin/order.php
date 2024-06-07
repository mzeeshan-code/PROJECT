<?php
require_once '../connection.php';
include('header.php');
include('topbar.php');
include('sidebar.php');
$query = "SELECT * from cart";
$result = mysqli_query($conn,$query);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
    while($row = mysqli_fetch_assoc($result))
    {?>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    </tr>
    <?php } ?>

    </tbody>
</table>
<?php
include('footer.php');
?>