
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Add Product</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Add Product 🌱</h1>
</div>
   <div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST" novalidate enctype="multipart/form-data">
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <input id="name" type="text" name="pname" placeholder="Product Name" class="form-control bg-white  border-md">
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <input id="img" type="file" name="pimg" placeholder="Product Image" class="form-control bg-white  border-md">
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <input id="price" type="text" name="pprice" placeholder="Product Price" class="form-control bg-white  border-md">
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
                        <textarea id="description" type="text" name="pdescription" placeholder="Product Description" rows="7" class="form-control bg-white  border-md"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Add Product</span>
                        </button>
                    </div>
                 </div>
            </form>
        </div>
    </div>
</div>


<?php 

         
         if(isset($_POST['submit'])){
          $pname = $_POST['pname'];
          $pprice = $_POST['pprice'];
          $pdesc = $_POST['pdescription'];
          $pimg = $_FILES['pimg'];
          $pcate = $_POST['pcate'];
 

            $p_filename = $pimg['name'];
            $p_filepath = $pimg['tmp_name'];
            $p_fileerror = $pimg['error'];
            if($p_fileerror ==0){ 

            $p_destfile = './upload/'.$p_filename;
            $r_destfile = './upload/'.$p_filename;
  

           move_uploaded_file($p_filepath,  $p_destfile);

          $p_insertquery = "insert into product(name, price, description, image, category) values('$pname', '$pprice', '$pdesc', '$r_destfile', '$pcate')";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

               ?>
                 <script type="text/javascript">
                     location.href = "view-product.php";
                 </script>

               <?php
          }else{
            echo "string";
          }
        }  
    }     
  ?>

 <?php include("./includes/footer.php") ?>
</body>
</html>