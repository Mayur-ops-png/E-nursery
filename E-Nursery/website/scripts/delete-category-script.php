<?php include '../includes/connection.php' ?>
<?php 
session_start();
$pid = $_GET['id'];



$delete_query = "delete from category where id = '$pid'";
 $delete = mysqli_query($con, $delete_query);
 if($delete){
 	$url=$_SERVER['HTTP_REFERER'];
                  header("location:$url");
 }

?>