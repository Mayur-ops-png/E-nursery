
<?php include("./includes/check.php"); ?>
<?php 
if ($_SESSION['status']==='1') {
    header("location:admin.php");

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱  | Payment</title>
  <?php include("./includes/links.php") ?>
<style type="text/css">
    .paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 900px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 50px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #f2f2f2;
    outline: none !important;

}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("./images/visa.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("./images/master.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("./images/Amex-icon.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("./images/VkiM7PL.jpg");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #f2f2f2;
    outline: none !important;
}
</style>
</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Select Payemnt Method</h1>
</div>

 <div class="container">
    <div class="container">
    <div class="row">

        <div class="paymentCont" style=" width: 600px; margin: auto;text-align: center; margin-top: -50px">
                        <div class="headingWrap">
                           <h3 style="margin: 30px 0px; color: grey"><b>RS<?php echo $_GET['price']; ?></b></h3>
                        </div>
                        <div class="paymentWrap" style="margin-top: -80px">
                            <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                <label class="btn paymentMethod active">
                                    <div class="method visa"></div>
                                    <input type="radio" name="options" checked> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method master-card"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method amex"></div>
                                    <input type="radio" name="options">
                                </label>
                                 <label class="btn paymentMethod">
                                    <div class="method vishwa"></div>
                                    <input type="radio" name="options"> 
                                </label>
                             
                            </div>        
                        </div>
                       
                    </div>
        
    </div>
</div>

<div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form action="success.php" method="POST">
                <div class="row">



                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
        
                        <input type="text" name="name" placeholder="Name on Card" class="form-control bg-white  border-md" required>
                    </div>

                    <div class="input-group col-lg-12 mb-4">
        
                        <input type="text" name="name" placeholder="Card Number" class="form-control bg-white  border-md" required>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
        
                        <input type="text" name="name" placeholder="Billing Address" class="form-control bg-white  border-md" required>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
        
                        <input type="text" name="name" placeholder="CVC" class="form-control bg-white  border-md" required>
                    </div>
                    <div style="margin-left: 20px">Expiration</div>
                    <!-- First Name -->
                    <div class="d-flex">
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                           
                        </div>
                        <input id="firstName" type="number" name="fname" placeholder="MM" class="form-control bg-white border-md" required>
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input id="lastName" type="number" name="lname" placeholder="YY" class="form-control bg-white border-md" required>
                    </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-dark btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Checkout</span>
                        </button>
                    </div>

                </div>
            </form>
        </div>
      
 </div>
</div>
    </div>

 <?php include("./includes/footer.php") ?>

</body>
</html>