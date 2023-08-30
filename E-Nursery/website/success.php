
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
    <title>E nursery 🌱  | Success</title>
  <?php include("./includes/links.php") ?>
<style type="text/css">
    .box img{
        width: 200px;
        margin-top: 50px;
    }
</style>
</head>
<body>

    

 <?php include("./includes/navbar.php") ?>
<div class="container">


 <div class="container">
 <div class="box text-center">
     <img src="./images/success.png">

<div style="text-align: center; padding: 30px 0px">
  <h1 style="color: #00cc66;">Payment Sccessful...!</h1>
</div>
     <p>Your Payment is Successfull, Please Download receipt</p>
 </div>

    </div>
</div>
 <?php include("./includes/footer.php") ?>


<script type="text/javascript">
    setInterval(function(){ window.location = "confirm.php"; },3000);
</script>
</body>
</html>