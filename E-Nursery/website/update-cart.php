<?php 
include './includes/connection.php';

echo $cartid = $_POST['cart_id'];
echo $qty= $_POST['qty'];

$update = "update cart set quantity = '$qty' where id = '$cartid'";
$iquery = mysqli_query($con, $update);
?>