
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
    <title>E nursery 🌱  | Confirm Payment</title>
  <?php include("./includes/links.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<style type="text/css">
    .box img{
        width: 200px;
        margin-top: 50px;


    }

           #imagesave{
            background:  #fff;
        }
</style>
</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">
     <div class="container">
        <div id="imagesave">
            <h2 style="font-family: arial; text-align: center; margin: 30px 0px">Thank You 🌱</h2>
    <?php  

     include './includes/connection.php';
   $c_total = 0;
     $email = $_SESSION['email'];

  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);



     $uid = $_SESSION['id'];

      $c_selectquery = "select * from cart where uid='$uid' and status = '2' ";
      $c_query = mysqli_query($con, $c_selectquery);
      $count = mysqli_num_rows($c_query);
    if($count===0){
      ?>
     
      <?php
    }else{

      ?>

          <div class="row" style="margin: 30px 0px">
            <span class="text-left col-lg-8 col-md-12 ml-auto mr-auto" style="margin: 5px 0px;"><i><b>Name: </b><?php echo $arradata['fname']." ". $arradata['lname']; ?></i></span>
            <span class="text-left col-lg-8 col-md-12 ml-auto mr-auto" style="margin: 5px 0px;"><i><b>Shipping Address: </b>This is my new address</i></span>
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

                            <td class="text-right"><h5>$ <?php echo $total; ?></h5></td>
                        </tr>

     <?php } } ?>
      <tr style="border: 1px solid #f2f2f2">
                            <td class="text-center"></td>
                            <td></td>
                            
                            <td><h5>Total: </h5></td>
                            <td class="text-right"> <h5>$ <?php echo $c_total; ?></h5></td>
                        </tr>
                        
                    </tbody>
                </table>
                
   
            <?php } ?>
                </div>

        </div>

    </div>
</div>


<button id="save_image_locally" class="btn btn-dark d-block m-auto">Download Receipt</button>


</div>
</div>
 <?php include("./includes/footer.php") ?>



   <script>

  $('#save_image_locally').click(function(){
    html2canvas($('#imagesave'), 
    {
      onrendered: function (canvas) {
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        a.download = 'somefilename.jpg';
        a.click();
      }
    });
  });

</script>
</body>
</html>


<?php 

$uid = $_SESSION['id'];
$status = 3;

 $u_selectquery = "select * from users where id='$uid' ";
 $u_query = mysqli_query($con, $u_selectquery);
 $u_res = mysqli_fetch_array($u_query);

$tsale = $u_res['tsale'] + $c_total;

 
 $i = "update users set tsale = '$tsale' where id = '$uid' ";
 $query = mysqli_query($con, $i);

$insertquery = "update cart set status = '$status' where uid = '$uid' and status = '2' ";
$iquery = mysqli_query($con, $insertquery);




          if($iquery){

                  

          }else{
            echo "string";
          }

?>