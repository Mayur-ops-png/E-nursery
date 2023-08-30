
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Change Password</title>
     <?php include("./includes/links.php") ?>

</head>
<body>
<?php include("./includes/navbar.php") ?>


<div class="container" style="padding: 50px 0">
  <h1 class="lab">Change Password 🌱</h1>
    <div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST">
                         <p style="text-align: center; color: red"> <?php include("./scripts/change-password-script.php") ?></p>
                <div class="row">



                   

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                 
                        <input type="password" name="opass" placeholder=" Old Password" class="form-control bg-white  border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                 
                        <input type="password" name="npass" placeholder="New Password" class="form-control bg-white  border-md">
                    </div>
                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                 
                        <input id="email" type="password" name="ncpass" placeholder="Confirm Password" class="form-control bg-white  border-md">
                    </div>
           
     

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Change Password</span>
                        </button>
                    </div>

                   

          
                

                </div>
            </form>
        </div>
    </div>
</div>

 <?php include("./includes/footer.php") ?>
</body>
</html>