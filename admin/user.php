<?php
require_once '../connection.php';
include('header.php');
include('topbar.php');
include('sidebar.php');
$query = "SELECT * from user";
$result = mysqli_query($conn,$query);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Edit/Delete</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
    while($row = mysqli_fetch_assoc($result))
    {?>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['role_as']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>"; class="btn btn-sm btn-primary">Edit</a>
        <a href="del.php?id=<?php echo $row['id']; ?>"; class="btn btn-sm btn-danger">Delete</a>

    </td>
    </tr>
    <?php } ?>

    </tbody>
</table>
<?php
include('footer.php');
?>