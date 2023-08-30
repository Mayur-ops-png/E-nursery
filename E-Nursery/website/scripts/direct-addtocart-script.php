<?php include '../includes/connection.php' ?>
<?php 
session_start();
$uid = $_SESSION['id'];
$pid = $_GET['id'];
$status = "2";
$quantity = "1";

$insertquery = "insert into cart(uid, pid, status, quantity) values('$uid', '$pid', '$status', '$quantity')";
$iquery = mysqli_query($con, $insertquery);

          if($iquery){
                  $url=$_SERVER['HTTP_REFERER'];
                  header("location:$url");

          }else{
            echo "string";
          }

?>