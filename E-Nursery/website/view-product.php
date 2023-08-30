
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E nursery 🌱  | Products</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

	

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Products 🌱</h1>
</div>

 <div class="container">
          <div class="row">
       <div class="col-lg-12 col-md-12 ml-auto mr-auto">
        <div class="table-responsive">
                <table class="table table-borderless" style="border: 1px solid #f2f2f2">
                    <thead>
                        <tr style="border: 1px solid #f2f2f2">
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                       include './includes/connection.php';
                       $p_selectquery = "select * from product";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                      ?>
                        <tr style="border: 1px solid #f2f2f2">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td><img style="width: 60px; height: 60px" src="<?php echo $p_res['image']; ?>"></td>
                            <td><?php echo substr($p_res['name'],0,30);?>...</td>
                            <td>$ <?php echo $p_res['price']; ?></td>
                            <td><?php echo substr($p_res['description'],0,35);?>...</td>
                            <td><?php echo $p_res['category']; ?></td>
                            <td class="td-actions text-right">
                                <a href="update-product.php?id=<?php echo $p_res['id']; ?>"><button type="button" rel="tooltip" class="btn btn-light btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons"><i style="color: grey" class="fa fa-pencil"></i></i>
                                </button></a>
                                <a href="./scripts/delete-product-script.php?id=<?php echo $p_res['id']; ?>"><button type="button" rel="tooltip" class="btn btn-light btn-just-icon btn-sm" data-original-title="" title="" onclick="return confirm('Are want to Delete This Product?')">
                                    <i class="material-icons"><i class="fa fa-trash" style="color: grey"></i></i>
                                </button></a>
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