
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | Edit Category</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Edit Category 🌱</h1>
</div>
   <div class="row align-items-center">
 <?php 
 include './includes/connection.php';

 $id = $_GET['id'];
        $scate = "select * from category where id = '$id'";
        $qcate = mysqli_query($con, $scate);
    
        $cate = mysqli_fetch_array($qcate);


 ?>

        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <input type="text" name="category" placeholder="Category Name" class="form-control bg-white  border-md" value="<?php echo $cate['category']?>">
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Update Category</span>
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
 

          $p_insertquery = "update category set category = '$cate' where id = '$id'";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

                
                  header("location:view-category.php");
          }else{
            echo "string";
          }
        }      
  ?>

 <?php include("./includes/footer.php") ?>
</body>
</html>