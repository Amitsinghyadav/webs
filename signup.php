<?php

$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$email=stripcslashes($email);
$password=stripcslashes($password);
$mobile=stripcslashes($mobile);

$connection=mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","usersdetail-3131378d9c") or die($connection);
if (mysqli_connect_error($connection)) {
	die( "there is an error in connecting to database");
}
mysqli_select_db($connection,"usersdetail-3131378d9c");
  $result=mysqli_query($connection,"select email from users where email='$email'");
  if($row=mysqli_fetch_array($result)){
  if($row['email']==$email)
  {
    echo "Already Registered";
  }
}

else{
  $connection=mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","usersdetail-3131378d9c") or die($connection);
if (mysqli_connect_error($connection)) {
	die( "there is an error in connecting to database");
}
 mysqli_select_db($connection,"usersdetail-3131378d9c");
$signupqry="insert into users (email,password,mobile)values('$email','$password','$mobile')";
//$result=mysqli_query($connection,$signupqry);

if ($result=mysqli_query($connection,$signupqry)) {
	echo "Successfully registered";
 
  }
  else{
  
  echo "Failed to execute Query!";
  }

}
?>