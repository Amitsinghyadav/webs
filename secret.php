<?php

    session_start();

    $error = "";    

    if (array_key_exists("logout", $_GET)) {
        
        unset($_SESSION['id']);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) AND (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
        header("Location: loggedinpage.php");
        
    }

    if (array_key_exists("submit", $_POST)) {
        
        $link = mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","secretdiary-313137dda4");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        
        
        
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
           $error .="Invalid email format";
}

        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
            if ($_POST['signUp'] == '1') {
            
                $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {

                    $error = "That email address is taken.";

                } else {

                    $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                     $result=mysqli_query($link, $query);
                    if (!$result) {

                        $error = "<p>Could not sign you up - please try again later.</p>";

                    } else {

                        $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                        mysqli_query($link, $query);

                        $_SESSION['id'] = mysqli_insert_id($link);

                        if ($_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);

                        } 

                        header("Location: loggedinpage.php");

                    }

                } 
                
            } else {
                    
                    $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                
                    $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                        $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        
                        if ($hashedPassword == $row['password']) {
                            
                            $_SESSION['id'] = $row['id'];
                            
                            if ($_POST['stayLoggedIn'] == '1') {

                                setcookie("id", $row['id'], time() + 60*60*24*365);

                            } 

                            header("Location: loggedinpage.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
                    
                }
            
        }
        
        
    }


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Secret Diary!</title>
    <style type="text/css">
      #container{
        text-align: center;
        width: 499px;
        margin-top: 300px;
        color: #fff;
      }
       html { 
  background: url("secretbackg.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
     body{
      background: none;
     }
     #loginform{
      display: none;
     }
     .toggleForms{
      font-weight: bold;
     }
         #diary {
              
              width: 100%;
              height: 100%;

    </style>
  </head>
  <body>
    <form id="signupform" method="post">
    <div class="container-fluid" id="container">
       <h1>Secret Diary</h1>
       <p><strong>Store your thoughts permanently and securely </strong></p>
       <div id="error">
         
         <?php 
         if($error!=""){?>
         <div class="alert alert-danger" role="alert"><?php echo $error ?></div>
 

   <?php      }
         
         
         
         ?>
      
      
      
      
      </div>
       <p>Interested? SignUp now.</p>
       <fieldset>
        <div class="form-group">
         <input type="text" name="email" class="form-control" placeholder="Enter your email">
         </div>
       </fieldset>
       <fieldset>
         <div class="form-group">
         <input type="text" name="password" class="form-control" placeholder="Enter your password">
         </div>
       </fieldset>
          <div class="checkbox">
        <label>
        <input type="checkbox" name="stayLoggedIn" value="1">
         Keep signed in
          

       </label>
       <input type="hidden" name="signUp" value="1">
       </div>
       <fieldset>
         <div class="form-group">
         <input type="submit" name="submit" class="btn btn-success" value="SignUp!">
         </div>
       </fieldset>
      <p><a  class="toggleForms">Log in</a></p>

    </div>

    </form >
    <form id="loginform" method="post">


     <div class="container-fluid" id="container">
           

       <h1>Secret Diary</h1>
           <p><strong>Store your thoughts permanently and securely </strong></p>
        <p>Login using your username and password.</p>
       
       <fieldset>
        <div class="form-group">
         <input type="text" name="email" class="form-control" placeholder="Enter your email">
         </div>
       </fieldset>
       <fieldset>
         <div class="form-group">
         <input type="text" name="password" class="form-control" placeholder="Enter your password">
         </div>
       </fieldset>
       <div class="checkbox">
        <label>
        <input type="checkbox" name="stayLoggedIn" value="1">
         Keep signed in


       </label>
       
       </div>
             <input type="hidden" name="signUp" value="0">
       <fieldset>
         <div class="form-group">
         <input type="submit" name="submit" class="btn btn-success" value="Login!">
         </div>
       </fieldset>
      
 <p><a  class="toggleForms">Sign Up</a></p>

       </div>
   
</form>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript">

      $(".toggleForms").click(function(){
    
        $("#signupform").toggle();
        $("#loginform").toggle();


      });
       $('#diary').bind('input propertychange', function() {

                $.ajax({
                  method: "POST",
                  url: "updatedatabase.php",
                  data: { content: $("#diary").val() }
                });

        });
      


    </script>
  </body>
</html>