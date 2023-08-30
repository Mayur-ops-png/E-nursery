<?php include '../includes/connection.php' ?>
<?php 
session_start();
$uid = $_SESSION['id'];
$status = 3;

$total = $_GET['tsale'];

$insertquery = "update cart set status = '$status' where uid = '$uid' and status = '2' ";
$iquery = mysqli_query($con, $insertquery);


 $u_selectquery = "select * from users where id='$uid' ";
 $u_query = mysqli_query($con, $u_selectquery);
 $u_res = mysqli_fetch_array($u_query);

 $tsale = $u_res['tsale'] + $total;
 
 $i = "update users set tsale = '$tsale' id = '$uid' ";
 $query = mysqli_query($con, $i);

          if($iquery){

                  header("location:../products.php");

          }else{
            echo "string";
          }

?>