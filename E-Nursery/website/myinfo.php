
<?php include("./includes/check.php"); ?>
<?php 
if ($_SESSION['status']==='1') {
    header("location:admin.php");

}

?>
<?php include './includes/connection.php' ?>
<?php


$email = $_SESSION['email'];

if($_SESSION['status'] ==="1"){
    header('location:admin.php');
}

  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);




  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱  | My Information</title>
     <?php include("./includes/links.php") ?>

</head>
<body>

 <?php include("./includes/navbar.php") ?>

<br><br>
<div class="container">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: absolute; right: 0px">
    Settings
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="change-password.php">Change Password</a>
    <a class="dropdown-item" href="order-history.php">View History</a>
    <a class="dropdown-item" href="./scripts/logout-script.php">Logout</a>
    <a class="dropdown-item" href="./scripts/delete-account-script.php?id=<?php echo $arradata['id']; ?>" onclick="return confirm('Are Really want to Delete this Account?')">Delete Account</a>
  </div>
</div>
<br>
<br><br>


 
       


    <div class="row" id="main">
        <div class="col-md-7 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2><?php echo $arradata['fname']." ".$arradata['lname'];?></h2>
                        <p><i><?php echo $arradata['email']; ?></i></p>
                        <p><?php echo $arradata['address'];?></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
        <form action="" method="POST">
            <h4>Edit your profile.</h4>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="fname" value="<?php echo $arradata['fname']; ?>" class="form-control input-lg" placeholder="First Name" tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="lname" value="<?php echo $arradata['lname']; ?>" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <input type="email" name="email" value="<?php echo $arradata['email']; ?>" class="form-control input-lg" placeholder="Email" tabindex="4">
            </div>
            <div class="form-group">
                <textarea type="text" name="address" class="form-control input-lg" placeholder="Address" tabindex="4"><?php echo $arradata['address']; ?></textarea>
            </div>
       
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"></div>
                <div class="col-xs-12 col-md-6"><button name="submit" href="#" class="btn btn-success btn-block">Save Info</button></div>
            </div>
        </form>
    </div>
</div>
<!-- /.modal -->
</div>
        </div>
     </div>       
</div>
<?php 
 if(isset($_POST['submit'])){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $id = $arradata['id'];

$infoupdate = "update users set fname='$fname', lname='$lname', email='$email', address='$address' where id=$id";

$updateres = mysqli_query($con, $infoupdate);
if($updateres){
?>
<script type="text/javascript">
    window.location.href="myinfo.php";
</script>

<?php
}else{
  echo "Not updated";
}

 

}

 ?>

 <?php include("./includes/footer.php") ?>



</body>
</html>