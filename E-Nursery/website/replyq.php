
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱 | User Queries</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">


 <?php 
 include './includes/connection.php';

        $id = $_GET['id'];
        $scate = "select * from questions where id = '$id'";
        $qcate = mysqli_query($con, $scate);
    
        $cate = mysqli_fetch_array($qcate);


 ?>

<div style="text-align: center; padding: 30px 0px">
  <h1>Reply</h1>
  <h5>to, <?php echo $cate['question']; ?> asked by <?php echo $cate['username']; ?></h5>
</div>
   <div class="row align-items-center">




        <!-- Registeration Form -->
        <div class="form">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <textarea name="answer" placeholder="Category Name" class="form-control bg-white  border-md"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-success btn-block py-2" name="submit" type="submit">
                            <span class="font-weight-bold">Send Reply</span>
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
          $ans = $_POST['answer'];
 

          $p_insertquery = "update questions set answer = '$ans' where id = '$id'";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

                ?>

                <script type="text/javascript">
                    location.replace("rplyque.php");
                </script>



                <?php
                 
          }else{
            echo "string";
          }
        }      
  ?>

 <?php include("./includes/footer.php") ?>
</body>
</html>