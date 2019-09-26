<?php 
session_start();

if (isset($_GET['vkey'])) {
    include("connection.php");
	$vkey=$_GET['vkey'];
	$query="SELECT verified,vkey FROM `users` WHERE verified=0 AND  vkey='$vkey' LIMIT 1";
    $result=mysqli_query($link,$query);
   if(mysqli_num_rows($result)>0){
    $query = "UPDATE `users` SET verified =1  WHERE vkey='$vkey' LIMIT 1";
    $result=mysqli_query($link,$query);
   if ($result) {
    
   	echo "Your account has been verified. You may now login.";
   }
   else{
   	echo "There is an error in verification";
   }

   }
   else
   	echo "This account is invalid or already registered";

}
else{

	die("Something went wrong!");
}


 ?>