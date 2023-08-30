<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱  | Signup</title>
     <?php include("./includes/links.php") ?>

</head>
<body>

 <?php include("./includes/navbar.php") ?>


<div class="container" style="padding: 50px 0">
  <h1 class="lab">Create Account 🌱</h1>
    <div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form method="POST" action="">
          <p style="text-align: center; color: red"> <?php include("./scripts/signup-script.php") ?></p>
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                           
                        </div>
                        <input id="firstName" type="text" name="fname" placeholder="First Name" class="form-control bg-white border-md">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input id="lastName" type="text" name="lname" placeholder="Last Name" class="form-control bg-white border-md">
                    </div>



                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
        
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white  border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                 
                        <input id="email" type="password" name="password" placeholder="Password" class="form-control bg-white  border-md">
                    </div>

           
     

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" type="submit" name="submit">
                            <span class="font-weight-bold">Create your account</span>
                        </button>
                    </div>
          
                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                  

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

 <?php include("./includes/footer.php") ?>
</body>
</html>