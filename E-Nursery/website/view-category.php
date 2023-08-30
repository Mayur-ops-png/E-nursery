
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E nursery 🌱 | Category</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

	

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Categories 🌱</h1>
</div>

 <div class="container">
    <div class="row">
       <div class="col-lg-4 col-md-12 m-auto">
            <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                       
                    </thead>
                    <tbody>
                       

      <?php
include './includes/connection.php';
           $scate = "select * from category";
           $qcate = mysqli_query($con, $scate);
    
           while($cate = mysqli_fetch_array($qcate)){


  ?>
                        <tr style="border: 1px solid #f2f2f2; padding: 20px;">
                            <td class="text-center"><?php echo $cate['category']; ?></td>
                            <td class="text-right">
                               <a href="edit-category.php?id=<?php echo $cate['id']; ?>"> <button class="btn btn-light ml-auto" style="margin-left: auto !important;"><i class="fa fa-pencil" style="color: grey"></i></button></a>
                                <a href="./scripts/delete-category-script.php?id=<?php echo $cate['id']; ?>"><button class="btn btn-light ml-auto" onclick="return confirm('Are want to Delete This Category?')" style="margin-left: auto !important;"><i class="fa fa-trash" style="color: grey"></i></button>   </a> 
                            </td>
                        </tr>

     <?php } ?>

                        
                    </tbody>
                </table>
                
   
   
                </div>
       </div>
</div>
</div>
</div>
 <?php include("./includes/footer.php") ?>
</body>
</html>













