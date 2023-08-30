
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Update User</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">


<div class="container" style="padding: 30px 0">
  <h1 class="lab">Update User 🌱</h1>
    <div class="row align-items-center">
 
<?php 

$id = $_GET['id'];
include './includes/connection.php';
  $showquery = "select * from users where id='$id'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);

  ?>
        <!-- Registeration Form -->
        <div class="form">
            <form method="POST" action="">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                           
                        </div>
                        <input id="firstName" type="text" name="fname" placeholder="First Name" class="form-control bg-white border-md" value="<?php echo $arradata['fname']; ?>">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input id="lastName" type="text" name="lname" placeholder="Last Name" class="form-control bg-white border-md" value="<?php echo $arradata['lname']; ?>">
                    </div>



                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
        
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white  border-md" value="<?php echo $arradata['email']; ?>">
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                <textarea type="text" name="address" class="form-control input-lg" placeholder="Address" tabindex="4"><?php echo $arradata['address']; ?></textarea>
            </div>

     

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" type="submit" name="submit">
                            <span class="font-weight-bold">Update User</span>
                        </button>
                    </div>
                </div>
            </form>
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

$infoupdate = "update users set fname='$fname', lname='$lname', email='$email', address='$address' where id=$id";

$updateres = mysqli_query($con, $infoupdate);
if($updateres){
?>
<script type="text/javascript">
    window.location.href="view-users.php";
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