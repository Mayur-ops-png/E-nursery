<?php 


         include("./includes/connection.php");

         if(isset($_POST['submit'])){

         	$fname = $_POST['fname'];
            $lname = $_POST['lname'];
         	$email = $_POST['email'];
         	$pass = $_POST['password'];
            $status = "0";

         	$password = password_hash($pass, PASSWORD_BCRYPT);

         	$emailquery = "select * from users where email = '$email'";
         	$query = mysqli_query($con, $emailquery);
         	$emailcount = mysqli_num_rows($query);

         	if($emailcount>0){
         		echo "User Already Exists";
         	}else{
         		$insertquery = "insert into users(fname, lname, password, email, status) values('$fname', '$lname', '$password', '$email', '$status')";
         		$iquery = mysqli_query($con, $insertquery);
       
         		if($iquery){
        
                  header('location:login.php');
         		}
         	}
         }
	?>