<?php include '../includes/connection.php' ?>
<?php 
session_start();
$uid = $_SESSION['id'];
echo $id = $_GET['id'];
$status = 1;

$insertquery = "update cart set status = '$status' where pid = '$id' and uid = '$uid' ";
$iquery = mysqli_query($con, $insertquery);

          if($iquery){
                  $url=$_SERVER['HTTP_REFERER'];
                  header("location:$url");

          }else{
            echo "string";
          }

?>