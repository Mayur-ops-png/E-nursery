<?php include '../includes/connection.php' ?>
<?php 
session_start();
$pid = $_GET['id'];
$uid = $_SESSION['id'];
$status = 2;

$delete_query = "delete from cart where pid = '$pid' and (uid = '$uid' and status = '1') ";
 $delete = mysqli_query($con, $delete_query);
 if($delete){
 	$url=$_SERVER['HTTP_REFERER'];
                  header("location:$url");
 }

?>