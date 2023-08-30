
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Update Product</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Edit Product 🌱</h1>
</div>
   <div class="row align-items-center">
  <?php 

    include './includes/connection.php';
    $id = $_GET['id'];
    $p_selectquery = "select * from product where id = '$id'";
    $p_query = mysqli_query($con, $p_selectquery);
    $p_res = mysqli_fetch_array($p_query);
?>

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST" >
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <input id="name" type="text" name="pname" value="<?php echo $p_res['name']?>" placeholder="Product Name" class="form-control bg-white  border-md">
                    </div>
                    
                    <div class="input-group col-lg-12 mb-4">
                        <input id="price" type="text" value="<?php echo $p_res['price']?>" name="pprice" placeholder="Product Price" class="form-control bg-white  border-md">
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <select class="form-control bg-white  border-md" name="pcate">
                            <?php 
                            include './includes/connection.php';
                            $scate = "select * from category";
                            $qcate = mysqli_query($con, $scate);
    
                            while($cate = mysqli_fetch_array($qcate)){

                            ?>
                              <option value="<?php echo $cate['category']?>"><?php echo $cate['category']?></option>
                               <?php } ?>
                        </select>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <textarea id="description" type="text" name="pdescription" placeholder="Product Description" rows="7" class="form-control bg-white  border-md"><?php echo $p_res['description']?></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Edit Product</span>
                        </button>
                    </div>
                 </div>
            </form>
        </div>
    </div>
</div>


<?php 
include './includes/connection.php';
         
         if(isset($_POST['submit'])){
          $pname = $_POST['pname'];
          $pprice = $_POST['pprice'];
          $pdesc = $_POST['pdescription'];
          $pcate = $_POST['pcate'];

$infoupdate = "update product set name='$pname', price='$pprice', description='$pdesc', category='$pcate' where id=$id";

$updateres = mysqli_query($con, $infoupdate);
if($updateres){
?>
<script type="text/javascript">
    window.location.href="view-product.php";
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