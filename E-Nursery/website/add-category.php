
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Add Category</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Add Category 🌱</h1>
</div>
   <div class="row align-items-center">
 

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <input type="text" name="category" placeholder="Category Name" class="form-control bg-white  border-md">
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Add Category</span>
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
          $cate = $_POST['category'];
 

          $p_insertquery = "insert into category(category) values('$cate')";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

                header("location:admin.php");
          }else{
            echo "string";
          }
        }      
  ?>

 <?php include("./includes/footer.php") ?>
</body>
</html>