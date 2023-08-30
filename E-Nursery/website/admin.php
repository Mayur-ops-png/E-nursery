
<?php include("./includes/check.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E Nursery 🌱 | Admin Dashboard</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

	

 <?php include("./includes/navbar.php") ?>
<div class="container">

<div style="text-align: center; padding: 30px 0px">
  <h1>Dashboard 🌱</h1>
</div>

  <div class="row"  style="display:flex; justify-content: space-around;">
    <div class="card" style="width:300px; text-align: center;">
  <div class="card-body">
    <?php 
    include './includes/connection.php';
    $total = 0;
    $users = 0;
    $p_selectquery = "select * from users";
    $p_query = mysqli_query($con, $p_selectquery);
    while($p_res = mysqli_fetch_array($p_query)){
      $total = $total + $p_res['tsale'];
      $users = $users+1;
    }

    ?>
    <h1 class="card-title" style="font-size: 50px;">$ <?php echo $total; ?></h1><hr>
    <p class="card-text">Total Sales</p>
  </div>
</div>

    <div class="card" style="width:300px; text-align: center;">
  <div class="card-body">
    <?php 

    $product = 0;
    $p = "select * from product";
    $p = mysqli_query($con, $p);
    while($res = mysqli_fetch_array($p)){
    $product = $product + 1;
    }

    ?>
    <h1 class="card-title" style="font-size: 50px;"><?php echo $product; ?></h1><hr>
    <p class="card-text">Total Products</p>
  </div>
</div>

    <div class="card" style="width:300px; text-align: center;">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 50px;"><?php echo $users-1; ?></h1><hr>
    <p class="card-text">Total Users</p>
  </div>
</div>
</div>
</div>
 <?php include("./includes/footer.php") ?>
</body>
</html>