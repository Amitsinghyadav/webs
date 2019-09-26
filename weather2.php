
<?php

$weather="";
$error="";
if($_GET['city']){
  $_city= str_replace(" ","",$_GET['city']);
  $file_headers = @get_headers("https://www.weather-forecast.com/locations/".$_city."/forecasts/latest");
if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $error="That city couldn't be found.";
}
  else{
$forecastPage=file_get_contents("https://www.weather-forecast.com/locations/".$_city."/forecasts/latest");
$pageArray=explode('</h2> (1&ndash;3 days):</div><p class="location-summary__text"><span class="phrase">',$forecastPage);
    if (sizeof($pageArray)>1){

 $secondPageArray=explode('</span></p></div>',$pageArray[1]);

 if (sizeof($secondPageArray)>1) {
  
 
 $weather= $secondPageArray[0]; 
 }
 else{
   $error="That city couldn't be found.";
 }
 }
 else{
 $error="That city couldn't be found.";

 }
 #$secondPageArray=explode('</span></p></div>',$pageArray[1]);
 #$weather= $secondPageArray[0]; 
    
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

    <title>Weather</title>
    <style type="text/css">
      html{
       background: url(weather.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
      }
      body{
        background:none;
      }
      .container{
        text-align: center;
        padding-top: 150px;
      

      }
      input{
        margin: 10px 0px;
      }
      label{
        padding-top:20px;
      }
      #weather{
      margin-top:20px;
      }
      #footer{
        margin-top:50px;
       background-color:#D3D3D3;
        margin-left:0px;
        margin-right:0px;
        
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
         <div class="col-sm-4 col-md-4">
          </div>
           <div class="col-sm-4 col-md-4">
    <h1 >What's the weather?</h1>
       <form method="GET">
    <fieldset class="form-group">
     
      <label for="city"><h4 Style="color:white">Enter the name of a city.</h4></label>
      <input type="text"id="city"name="city" class="form-control" placeholder="Eg. Roorkee, Uttrakhand" value="<?php echo $_GET['city']; ?>">
       
     
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
   </fieldset>
        </form>
      <div id="weather">
      <?php
         if ($weather) {
           
        
          echo '<div class="alert alert-success" role="alert">'."$weather";
          
         }
        else{ 
          if($error){
           echo '<div class="alert alert-danger" role="alert">'."$error";
          }
        }
      ?>

    </div>
      
    </div>

</div>
 <div class="col-sm-4 col-md-4">
          </div>
  </div>
    
    <footer class="footer" id="footer">

 
  <div class="container-fluid text-center text-md-left">

    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Gravity Tutorials</h5>
        <p>Educating World....</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.linkedin.com/in/amit-singh-yadav-869174170">LinkedIn Profile.</a>
          </li>
          <li>
            <a href="#!">Facabook Page</a>
          </li>
          <li>
            <a href="#!">Twitter</a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
        </ul>

      </div>

      <div class="col-md-3 mb-md-0 mb-3">
       
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:All right reserved.
    <a href="https://gravitytutorials.com">gravitytutorials.com</a>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>