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
	<title>E nursery 🌱  | Product Information</title>
  <?php include("./includes/links.php") ?>

</head>
<body>

	<?php include("./includes/navbar.php") ?>
  <?php 

    include './includes/connection.php';
    $uid = $_SESSION['id'];
    $id = $_GET['id'];
    $p_selectquery = "select * from product where id = '$id'";
    $p_query = mysqli_query($con, $p_selectquery);
    $p_res = mysqli_fetch_array($p_query);

    $csq = "select * from cart where pid = '$id' and ( uid = '$uid' and status = '2')  ";
            $cq = mysqli_query($con, $csq);
            $cr = mysqli_fetch_array($cq);

   $wsq = "select * from cart where pid = '$id' and ( uid = '$uid' and status = '1')  ";
            $wq = mysqli_query($con, $wsq);
            $wr = mysqli_fetch_array($wq);
?>

<div class="container">
    <br>
<div class="card border-0">
  <div class="row">
    <aside class="col-sm-4">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="<?php echo $p_res['image']; ?>"></a></div>
</div>

</article>
    </aside>
    <aside class="col-sm-5"  style="padding-top: 20px;">
<article class="card-body m-0 pt-0 pl-5">
  <h3 class="title text-uppercase"><?php echo $p_res['name']; ?></h3>
           <span style="color: grey"><i> <?php echo $p_res['category']; ?></i></span>
<div class="mb-3 mt-3"> 
    <span class="price-title">Price: </span>
   <span><b>$ <?php echo $p_res['price']; ?></b></span>

</div>
<dl class="item-property">
  <dt>Description</dt>
  <dd><p><?php echo $p_res['description']; ?> </p></dd>
</dl>

</article>
    </aside>
    <aside class="col-sm-3" style="padding-top: 20px;">
          <div class="row">
  </div>
    <div class="row " style="margin-top: 20px;">
  <a href="./scripts/direct-addtocart-script.php?id=<?php echo $p_res['id']; ?>" class="btn btn-success <?php if($cr){ echo "disabled"; } ?>"><i class="fa fa-shopping-cart"></i> <?php if($cr){ echo "Added to Cart"; }else{ echo "Add to Cart"; } ?> </a>
  </div>
      <div class="row mb-4 mt-4">
  <a href="./scripts/add-wishlist.php?id=<?php echo $p_res['id']; ?>"><button class="btn btn color-box-waanbii  <?php if($wr){ echo "btn-danger disabled"; }else{ echo "btn-outline-danger"; } ?>" type="button"> <i class="fa fa-heart"></i> <?php if($wr){ echo "Added to Wishlist"; }else{ echo "Add to Wishlist"; } ?> </button></a>
  </div>

<hr class="m-0 p-0">

    </aside>

  </div>
      <hr style="margin: 50px 0">
      <form method="POST">
<div class="input-group mb-3" id="a">
    <input type="text" class="form-control"  placeholder="Submit Review..." name="review">
  <div class="input-group-append">
    <button class="btn btn-dark" type="submit" name="submit"><i class="fa fa-paper-plane"></i> Submit</button>
  </div>


</div>
  </form>
<?php 
$email = $_SESSION['email'];
$uname = "select * from users where email = '$email'";
$u = mysqli_query($con, $uname);
$name = mysqli_fetch_array($u);
$username = $name['fname']." ".$name['lname'];
$uid = $name['id'];
$pid = $p_res['id'];


if(isset($_POST['submit'])){
          $review = $_POST['review'];

          

          $insertquery = "insert into review(uid, pid, username, review) values('$uid', '$pid', '$username', '$review')";
          $iquery = mysqli_query($con, $insertquery);

          if($iquery){
?>
<script type="text/javascript">

  const reloadUsingLocationHash = () => {
      window.location.hash = "reload";
    }
    window.onload = reloadUsingLocationHash();
</script>

<?php
            
          }else{
            echo "string";
          }
}
?>
      <hr style="margin: 50px 0">
      <?php 
      $r_selectquery = "select * from review where pid='$pid'";
      $r_query = mysqli_query($con, $r_selectquery);
      while($p_res = mysqli_fetch_array($r_query)){
  ?>
<div style="border: 2px solid #f2f2f2; padding: 10px">

<h5><?php echo $p_res['username']; ?></h5><p style="color: grey"><i>"<?php echo $p_res['review']; ?>"</i></p></div>


<?php } ?>
</div>
</div>
 <?php include("./includes/footer.php") ?>
</body>
</html>