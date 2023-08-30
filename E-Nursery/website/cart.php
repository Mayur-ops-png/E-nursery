
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
    <title>Mobile Shop | Cart</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Cart 🌱</h1>
</div>

 <div class="container">
    <?php  

                       include './includes/connection.php';
                $uid = $_SESSION['id'];

      $c_selectquery = "select * from cart where uid='$uid' and status = '2' ";
      $c_query = mysqli_query($con, $c_selectquery);
      $count = mysqli_num_rows($c_query);
    if($count===0){
      ?>
      <div style="text-align:center;">
        <i class="fa fa-shopping-cart text-center" style="font-size: 250px; color: #f2f2f2;"></i>
        <p style="color: grey">Your cart is Empty. Items added to cart show here</p>
        <a href="products.php">Continoue Shopping...</a>
      </div>
      <?php
    }else{

      ?>
          <div class="row">
       <div class="col-lg-10 col-md-12 ml-auto mr-auto">
        <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                        <tr style="border: 1px solid #f2f2f2">
                           <th>#</th>
                            <th class="text-center">Product</th>
                            <th></th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                       

      <?php
      $c_total = 0;
      
 $i=0;
    while($c_res = mysqli_fetch_array($c_query)){
     $user_id;
         $pid = $c_res['pid'];


   $p_selectquery = "select * from product where id='$pid' ";
      $p_query = mysqli_query($con, $p_selectquery);
    
while($p_res = mysqli_fetch_array($p_query)){
        $i = $i+1;
        $total = $p_res['price']*$c_res['quantity'];
  $c_total = $c_total+$total;


  ?>
                        <tr style="border: 1px solid #f2f2f2; padding: 20px;">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><img style="width: 90px; height: 90px" src="<?php echo $p_res['image']; ?>"></td>
                            <td>
                                <h4 style="margin: 0px"><?php echo substr($p_res['name'], 0, 15)?>...</h4>
                                <p style="color: grey; margin: 0px"><i><?php echo $p_res['category']; ?></i></p>
                                <h5 style="margin: 0px; color: grey">$ <?php echo $p_res['price'];?></h5>
                                    
                            </td>

                            <td>
                                <form id="frm<?php echo $c_res['id']; ?>">
                                    <input type="hidden" name="cart_id" value="<?php echo $c_res['id']; ?>">
                                    <input type="number" name="qty" value="<?php echo $c_res['quantity']; ?>" onchange="updcart(<?php echo $c_res['id'] ?>)" style="width: 50px">
                                </form>
                            </td>

                            <td><h5>$ <?php echo $total; ?></h5></td>

                            <td class="td-actions text-center">
                                <a href="./scripts/backtowishlish-script.php?id=<?php echo $p_res['id'];?>">Move to wishlist </a> 
                                <a href="./scripts/remove-cart-script.php?id=<?php echo $c_res['id']; ?>"><button type="button" rel="tooltip" class="btn btn-light btn-just-icon btn-sm" onclick="return confirm('Are want to Remove this from Cart?')" style="margin-left: 15px;" data-original-title="" title="">
                                    <i class="material-icons"><i class="fa fa-trash" style="color: grey;"></i></i>
                                </button></a>
                            </td>
                        </tr>

     <?php } } ?>
      <tr style="border: 1px solid #f2f2f2">
                            <td class="text-center"></td>
                            <td></td><td></td>
                            
                            <td><h3>Total: </h3></td>
                            <td> <h3>$ <?php echo $c_total; ?></h3></td>
                            <td class="td-actions text-right">
                                <a href="payment.php?price=<?php echo $c_total; ?>"><button type="button" rel="tooltip" class="btn btn-warning btn-just-icon btn" data-original-title="" title="">
                                    Proceed to Payment
                                </button></a>
                               
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
   
            <?php } ?>
                </div>

        </div>

    </div>
</div>
</div>
 <?php include("./includes/footer.php"); ?>

 <script type="text/javascript">
     
    function updcart(id){

        location.reload(true);
        $.ajax({
            url: "update-cart.php",
            type: "POST",
            data:$("#frm"+id).serialize(),
            success:function(res){

            }

        })
    }
 </script>
</body>
</html>