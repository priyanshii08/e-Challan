<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 11:55 PM
 */
include("config.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM `challan` WHERE id='$delete_id'";//delete query
$run=mysqli_query($conn,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('pending.php?deleted=user has been deleted','_self')</script>";
}

?>
