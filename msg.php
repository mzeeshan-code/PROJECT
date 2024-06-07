<?php
if(isset($_SESSION['status'])){
    ?>
    <div class="alert alert-success" role="alert" style="margin: 0;" stye="padding:0;">
        <strong><?php echo $_SESSION['status'];?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
<?php
    unset($_SESSION['status']);
}
?>