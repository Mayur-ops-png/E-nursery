<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Login</title>
     <?php include("./includes/links.php") ?>

</head>
<body>
<?php include("./includes/navbar.php") ?>


<div class="container" style="padding: 50px 0">
  <h1 class="lab">Login 🌱</h1>
    <div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST">
                         <p style="text-align: center; color: red"> <?php include("./scripts/login-script.php") ?></p>
                <div class="row">



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
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Login</span>
                        </button>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

          
                  

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Don't have an Account? <a href="signup.php" class="text-primary ml-2">Register</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

 <?php include("./includes/footer.php") ?>
</body>
</html>