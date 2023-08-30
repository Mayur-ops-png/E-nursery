
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
    <title>E nursery 🌱  | Wishlist</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Wishlist 🌱</h1>
</div>

 <div class="container">
    <?php  

                       include './includes/connection.php';
                $uid = $_SESSION['id'];

      $c_selectquery = "select * from cart where uid='$uid' and status = '1' ";
      $c_query = mysqli_query($con, $c_selectquery);
      $count = mysqli_num_rows($c_query);
    if($count===0){
      ?>
            <div style="text-align:center;">
        <i class="fa fa-heart text-center" style="font-size: 250px; color: #f2f2f2;"></i>
        <p style="color: grey">Your Wishlist is Empty. Items added to wishlist show here</p>
        <a href="products.php">Continoue Shopping...</a>
      </div>
      <?php
    }else{

      ?>
          <div class="row">
       <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                        <tr style="border: 1px solid #f2f2f2">
                           <th>#</th>
                            <th class="text-center">Product</th>
                            <th></th>
                            <th class="text-right"></th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                       

      <?php
      $c_total = 0;
      $user_id;
 $i=0;
    while($c_res = mysqli_fetch_array($c_query)){
     
         $pid = $c_res['pid'];


   $p_selectquery = "select * from product where id='$pid' ";
      $p_query = mysqli_query($con, $p_selectquery);
    
while($p_res = mysqli_fetch_array($p_query)){
        $i = $i+1;
  $c_total = $c_total+$p_res['price'];


  ?>
<form method="POST">
        <tr style="border: 1px solid #f2f2f2; padding: 20px;">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><img style="width: 90px; height: 90px" src="<?php echo $p_res['image']; ?>"></td>
                            <td>
                                <h4 style="margin: 0px"><?php echo substr($p_res['name'], 0, 15)?>...</h4>
                                <p style="color: grey; margin: 0px"><i><?php echo $p_res['category']; ?></i></p>
                                <h5 style="margin: 0px; color: grey" class="itotal" >$ <?php echo $p_res['price'];?></h5>
                                    
                            </td>
                            
                            <td class="td-actions text-right">
                                <a href="./scripts/addtocart-script.php?id=<?php echo $p_res['id'];?>"><button type="button" rel="tooltip" class="btn btn-dark btn-just-icon btn" data-original-title="" title="">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button></a>
                            </td>

                            <td>

                                <a href="./scripts/remove-wishlist-script.php?id=<?php echo $p_res['id'];?>"><button type="button" rel="tooltip" name="submit" class="btn btn-light btn-just-icon btn" data-original-title="" title="">
                                   <i class="fa fa-close"  style="color: grey"></i>
                                </button></a>
                            </td>
                        </tr>
</form>


     <?php 

 } } 

     ?>


                        
                    </tbody>
                </table>
                  <?php } ?>
                </div>

        </div>

    </div>
</div>
</div>
 <?php include("./includes/footer.php") ?>

 
</body>
</html>
