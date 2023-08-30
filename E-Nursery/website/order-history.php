
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
    <title>E nursery 🌱  | Order History</title>
     <?php include("./includes/links.php") ?>

</head>
<body>

 <?php include("./includes/navbar.php") ?>

<br><br>
<div class="container">
<h1 class="lab">Your Order History</h1>


     <div class="container">


    <?php  

     include './includes/connection.php';


     $uid = $_SESSION['id'];

      $c_selectquery = "select * from cart where uid='$uid' and status = '3' ";
      $c_query = mysqli_query($con, $c_selectquery);
      $count = mysqli_num_rows($c_query);
    if($count===0){
      ?>
     
      <?php
    }else{

      ?>

          <div class="row" style="margin: 30px 0px">
       <div class="col-lg-8 col-md-12 ml-auto mr-auto" style="margin-top: 40px">
        <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                        <tr style="border: 1px solid #f2f2f2">
                           <th>#</th>
                            <th>Product</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-right">Price</th>
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
                            <td>
                                <h5 style="margin: 0px"><?php echo $p_res['name']; ?></h5>
                                <p style="color: grey; margin: 0px"><i><?php echo $p_res['category']; ?></i></p>
                                <h5 style="margin: 0px; color: grey">$ <?php echo $p_res['price'];?></h5>
                                    
                            </td>

                            <td>

                                    <p class="text-center"><?php echo $c_res['quantity']; ?></p>
 
                            </td>

                            <td class="text-right"><h5>RS<?php echo $total; ?></h5></td>
                        </tr>

     <?php } } ?>
      <tr style="border: 1px solid #f2f2f2">
                            <td class="text-center"></td>
                            <td></td>
                            
                            <td><h5>Total: </h5></td>
                            <td class="text-right"> <h5>RS<?php echo $c_total; ?></h5></td>
                        </tr>
                        
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