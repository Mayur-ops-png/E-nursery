
<?php include("./includes/check.php"); ?>
<?php 
if ($_SESSION['status']==='1') {
    header("location:admin.php");

}

?>
<?php include './includes/connection.php' ?>
<?php


$email = $_SESSION['email'];

if($_SESSION['status'] ==="1"){
    header('location:admin.php');
}

  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);




  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E nursery 🌱  | Queries</title>
     <?php include("./includes/links.php") ?>

</head>
<body>

 <?php include("./includes/navbar.php") ?>

<br><br>
<div class="container">

<br>
    

    <div class="row" id="main">
        <div class="col-md-7 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2><?php echo $arradata['fname']." ".$arradata['lname'];?></h2>
                        <p><i><?php echo $arradata['email']; ?></i></p>
                        <p><?php echo $arradata['address'];?></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
        <form action="" method="POST">
            <h4>Post Your Query. ✅</h4>
            <hr class="colorgraph">
            
            <div class="form-group">
                <textarea type="text" name="question" class="form-control input-lg" placeholder="Type your Query Here..." tabindex="4"></textarea>
            </div>
       
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"></div>
                <div class="col-xs-12 col-md-6"><button name="submit" href="#" class="btn btn-success btn-block">Post</button></div>
            </div>
        </form>
    </div>
</div>
<!-- /.modal -->




</div>
        </div>
     </div> 


<br><br>
     <div class="container">

<h3>My Recent Queries</h3>
         <?php 

         $uid = $arradata['id'];
 
    $c_selectquery = "select * from questions where userid='$uid'";
    $c_query = mysqli_query($con, $c_selectquery);
    while($c_res = mysqli_fetch_array($c_query)){
            ?>

        <div class="card" style="padding: 20px">
              <h4><?php echo $c_res['question']; ?></h4>
              <p><?php 
                    if($c_res['answer'] == ""){
                        echo "Reply Pending";
                    }else{
                        echo $c_res['answer'];
                    }
               ?></p>
        </div>

 <?php } ?>



         
        



     </div>      
</div>
<?php 
 if(isset($_POST['submit'])){
          $ques = $_POST['question'];
          $id = $arradata['id'];
          $uname = $arradata['fname']." ".$arradata['lname'];

$infoupdate = "insert into questions(userid, username, question) values('$id', '$uname', '$ques')";


$updateres = mysqli_query($con, $infoupdate);
if($updateres){
?>
<script type="text/javascript">
    window.location.href="queries.php";
</script>

<?php
}else{
  echo "Not updated";
}

 

}

 ?>

 <?php include("./includes/footer.php") ?>



</body>
</html>