<?php


//require("config.php");
 $username=$_POST["email"];
 $password=$_POST["password"];
 $username=stripcslashes($username);
 $password=stripcslashes($password);
//$username=mysql_real_escape_string($username);
//$password=mysql_real_escape_string($password);
$connection=mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","usersdetail-3131378d9c") or die($connection);
if (mysqli_connect_error($connection)) {
	die( "there is an error in connecting to database");
	
}
   

 mysqli_select_db($connection,"usersdetail-3131378d9c");
  $result=mysqli_query($connection,"select email,password from users where email='$username' and password='$password'");
  $row=mysqli_fetch_array($result);
  if($row['email']==$username && $row['password']==$password)
  {

$url="welcome.html";
  function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('welcome.html', false);
  }
else{
echo "Incorrect username or password";
}





?>