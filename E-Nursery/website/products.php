
<?php session_start(); ?>
<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E Nursery 🌱 | Products</title>
    <style type="text/css">
  .wish{
     position: relative; top: 8px; right: 15px; border-radius: 30px; border:  none; color: #bfbfbf; 
  }
  .wishyes{
    color: red;
  }
</style>
   <?php include("./includes/links.php") ?>
</head>
<body>
 <?php include("./includes/navbar.php") ?>
<?php 
if(isset($_SESSION['email'])){
  ?>
    
     <div>
<div class="" style="padding-top: 60px; width: 90% !important; margin: auto;">

<div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0" style="box-shadow: none;">
      
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <form method="POST">
                                    <select class="form-control" name='sort' onchange='this.form.submit();' id="exampleFormControlSelect1">
                                        <option>price</option>
                                        <option value="highest">Higest Price</option>
                                        <option value="lowest">Lowest Price</option>
                                    </select>
                                    </form>
                                </div>
                                <form method="POST" class="col-lg-9">
                                    <div class="row">
                                <div class="col-lg-10 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search" style="width: 100% !important">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                    <button type="submit" name="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <ul class="nav justify-content-end">
    <?php 
 include './includes/connection.php';
    $c_selectquery = "select * from category;";
    $c_query = mysqli_query($con, $c_selectquery);
    while($c_res = mysqli_fetch_array($c_query)){
            ?>

  <li class="nav-item">
    <a class="nav-link" href="product-cate.php?cate=<?php echo $c_res['category']; ?>"><?php echo $c_res['category']; ?></a>
  </li>
 <?php } ?>
  
</ul>
</div>
<?php 

      $uid = $_SESSION['id'];
      // $p_selectquery = "select * from product";

if(isset($_POST['submit'])){
  $search = $_POST['search'];
    $p_selectquery = "select * from product where name like '$search%' ";
}else{
    if(isset($_POST['sort'])){
       if($_POST['sort']==="highest"){
            $p_selectquery = "select * from product order by price desc";
       }else{
           $p_selectquery = "select * from product order by price asc";

       }



}else{
    $p_selectquery = "select * from product";
}
}
?>

<div class="container" >
       <div class="row"  style="display:flex; justify-content: space-around;">
<?php 
     
      $p_query = mysqli_query($con, $p_selectquery);
          while($p_res = mysqli_fetch_array($p_query)){
            $pid = $p_res['id'];
            $wsq = "select * from cart where pid = '$pid' and ( uid = '$uid' and status = '1')  ";
            $wq = mysqli_query($con, $wsq);
            $wr = mysqli_fetch_array($wq);

            $csq = "select * from cart where pid = '$pid' and ( uid = '$uid' and status = '2')  ";
            $cq = mysqli_query($con, $csq);
            $cr = mysqli_fetch_array($cq);
            
?>
        <div class="card text-center" style="width:200px">
       <a href="./scripts/add-wishlist.php?id=<?php echo $p_res['id']; ?>" class=" ml-auto wish <?php if($wr){ echo "wishyes"; } ?>"><i class="fa fa-heart"></i></a>
  <img class="card-img-top m-auto" src="<?php echo $p_res['image']; ?>" alt="Card image" style=" width: 80%; padding: 0px; height: 200px;">
  <div class="card-body">
         <h6 class="card-title"><?php echo substr($p_res['name'], 0, 15)?>...</h6>
         <h5 class="card-title">$ <?php echo $p_res['price']; ?></h5>
    <a href="product-info.php?id=<?php echo $p_res['id']; ?>" class="btn btn-outline-success">view</a>
    <a href="./scripts/direct-addtocart-script.php?id=<?php echo $p_res['id']; ?>" class="btn btn-success <?php if($cr){ echo "disabled"; } ?>"><i class="fa fa-shopping-cart"></i></a>
  </div>
</div>
<?php } ?>

    </div>
</div>
</div>

  <?php
}else{
    ?>
<!-- When User logout -->
 <div>
<div class="" style="padding-top: 60px; width: 90% !important; margin: auto;">

<div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0" style="box-shadow: none;">
      
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <form method="POST">
                                    <select class="form-control" name='sort' onchange='this.form.submit();' id="exampleFormControlSelect1">
                                        <option>price</option>
                                        <option value="highest">Higest Price</option>
                                        <option value="lowest">Lowest Price</option>
                                    </select>
                                    </form>
                                </div>
                                <form method="POST" class="col-lg-9">
                                    <div class="row">
                                <div class="col-lg-10 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search" style="width: 100% !important">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                    <button type="submit" name="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <ul class="nav justify-content-end">
    <?php 
 include './includes/connection.php';
    $c_selectquery = "select * from category;";
    $c_query = mysqli_query($con, $c_selectquery);
    while($c_res = mysqli_fetch_array($c_query)){
            ?>

  <li class="nav-item">
    <a class="nav-link" href="product-cate.php?cate=<?php echo $c_res['category']; ?>"><?php echo $c_res['category']; ?></a>
  </li>
 <?php } ?>
  
</ul>
</div>
<?php 

      // $p_selectquery = "select * from product";

if(isset($_POST['submit'])){
  $search = $_POST['search'];
    $p_selectquery = "select * from product where name like '$search%' ";
}else{
    if(isset($_POST['sort'])){
       if($_POST['sort']==="highest"){
            $p_selectquery = "select * from product order by price desc";
       }else{
           $p_selectquery = "select * from product order by price asc";

       }



}else{
    $p_selectquery = "select * from product";
}
}
?>

<div class="container" >
       <div class="row"  style="display:flex; justify-content: space-around;">
<?php 
     
      $p_query = mysqli_query($con, $p_selectquery);
          while($p_res = mysqli_fetch_array($p_query)){
            
?>
 <div class="card text-center" style="width:200px">
       <a href="" class=" ml-auto wish <?php if($wr){ echo "wishyes"; } ?>"><i class="fa fa-heart"></i></a>
  <img class="card-img-top m-auto" src="<?php echo $p_res['image']; ?>" alt="Card image" style=" width: 80%; padding: 0px; height: 200px;">
  <div class="card-body">
         <h6 class="card-title"><?php echo substr($p_res['name'], 0, 15)?>...</h6>
         <h5 class="card-title">$ <?php echo $p_res['price']; ?></h5>
    <a href="product-info.php?id=<?php echo $p_res['id']; ?>" class="btn btn-outline-dark">view</a>
   
  </div>
</div>
<?php } ?>

    </div>
</div>
</div>



    <?php
}



?>
 <?php include("./includes/footer.php") ?>
</body>
</html>