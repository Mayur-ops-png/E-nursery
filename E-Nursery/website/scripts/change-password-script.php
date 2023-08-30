<?php 
include 'includes/connection.php';
 $email = $_SESSION['email'];


  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);   



         if(isset($_POST['submit'])){
         	$o_pass = $_POST['opass'];
         	$n_desc = $_POST['npass'];
         	$nc_desc = $_POST['ncpass'];


         
     $old_pass = $arradata['password'];
     $pass_decode = password_verify($o_pass, $old_pass);

     if($pass_decode){
     	if($n_desc==$nc_desc){
     		$password = password_hash($nc_desc, PASSWORD_BCRYPT);

     		 $update = "update users set password = '$password' where email = '$email'";
         	$d_iquery = mysqli_query($con, $update);
         	if($d_iquery){
         		
              header("location:myinfo.php");
         	}

     	}else{
     		echo "New Password and confirm password not same";
     	}
     }else{
     	echo "Password is Incorrect";
     }



    	
        
    }     
	


	?>		