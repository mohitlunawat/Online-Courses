<?php
session_start();
if(isset($_SESSION['name']))
{
    header("Location:student.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="bootstrap.min.js"></script>
</head>
<style>
	.menu
    {
    	margin-left:20px;
      font-size: 20px;
    }
    .menu1
    {
    margin-top:10px;
  }
   .rig
    {
      left:400px;
    }
    .navbar
    {
    	
        background:black;
     }
     m{
      color:white;
      
      transition: 0s;
     }
     m:hover
    {
      text-decoration: none;
    background-color: white;
    padding-top: 18px;
    padding-bottom: 18px;
    color: black;

     }
     .x
     {
     	color:red;
     }
     u
     {
      font-family: fontawesome;
    text-decoration: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    font-size: 37px;
    letter-spacing: 3px;
    color: #555555;
    display: block;
    position: relative;  
     }
     span.com
     {
      color:#4CAF50;
     }
     span.tile
     {
      float: right;
      letter-spacing: 4px;
      font-family: "Segoe UI",Arial,sans-serif;
      font-size: 20px;  
     }
     n
     {
      color:white;
     }
     #leftmenuinner {
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    height: 100%;
    padding-top: 0px;
    background-color: #f1f1f1;
}
    #leftmenuinner {
    position: fixed;
    padding-top: 0px;
    height: 100%;
    width: 220px;
    background-color: transparent;

}
    .dropdown-menu
    {
      background-color: green ;
      font-size: 20px;
    }
    .dropdown
    {
      font-size: 20px;
    }
    #home
    {
      color: white;
    }
     #sign
    {
      color: white;
    }
     #login
    {
      color: white;
    }
.bg-1 { 
      width:1200px;
      height:450px;
      background:transparent;
      border-radius: 25px;
      color: black;
 background-color:#e6e6ff;
   }
  .bg-2 { 
      background-color: #F0FFFF;
      color: black;
      font-size: 20px;
      padding-top: 0.5cm;
      font-family: roboto;
     margin-top:200px;
  }
    #i1
    {
      margin-left: 1px;
      font-family: roboto;
    }
    #i2{
      margin-left:580px;
      position: absolute;
    }
    .i3
    {
      font-family: roboto;
      padding-left: 2cm;
      font-size: 20px;
    }
    .i4
    {
      font-family: roboto;
      padding-left: 2cm;
      font-size: 20px;
    }
    .example{
      font-family: roboto;
      color: black;
      background-color: white;
    }
</style>
<body>


  <div class="container" style="postion:fixed;background-color:#e6e6ff;width:1250px;">
  <p><u>Learn2code<span class="com">.com</span></u>
<span class="tile">Start Thinking!Start Coding</span>

</p>
  </div>
  
  

    <nav class="navbar navbar-default" style="postion:fixed ;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="home.php" id="home"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="menu"><a href="h.php"><m>COURSES</m></a></li>
      <li class="menu"><a href="p.php"><m>PROCEDURE</m></a></li>
      <li class="menu"><a href="c.php"><m>CERTIFICATES</m></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="studreg.php" id="sign"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><m>LOGIN</m></a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid bg-1">
   <img src="6.jpg" style="width:550px;height:450px;border-radius: 25px;">
    <img src="cert.png" style="width:612px;height:450px; display:inline;border-radius: 25px;">
   </div>
</div>   
   <div class="example">
   <p><!DOCTYPE html></p>
</div>
</div>
</br>
<div class="row">
    <div class="col-sm-6"id="i1">
      <h2 style="color:green;">EARN YOUR WEB DEVELOPER VERIFIED CERTIFICATE</h2>
      <p><h3>Sometimes you want to take a course just for the sheer joy of learning something new. 
        But sometimes you need to complete a course for a better knowldge, 
        web skills.
      </h3></p>
      <p><h3>A verified certificate from Learn2Code.com can provide proof for an employer, student,
       that you have successfully completed an online course.
       
     </h3></p>
    </div>
    <div class="col-sm-6"id="i2"> 
    <div class="i3">
      <p><h2 style="color:green;"><span class="glyphicon glyphicon-wrench"></span>Build skills and your career</h2></p>
<p>Impress your employer with a verified</p> 
<p>certificate that documents your learning</p>
      </div> 
      <div class="i4">
      <p><h2 style="color:green;"><span class="glyphicon glyphicon-user"></span>Challenge yourself</h2></p>
<p>Sometimes we all need that extra push</p> 
<p>Working towards a certificate keeps you motivated</p>
      </div> 
      <div class="i4">
      <p><h2 style="color:green;"><span class="glyphicon glyphicon-book"></span>Study when it is convenient</h2></p>
<p>Study from your own computer</p> 
<p>Complete your studies in a few weeks</p>
      </div> 
    </div>
  </div>
<div class="container-fluid bg-2 text-center">
  
  <p><h2 style="color:green;">Learn2Code.Com Courses Are Always Free To Study</h2></p>
  <p>Study at no cost</p>
  <p>Ask queries or doubts</p>
  <p>Take your exam online, at any time, and from any location</p>
</div>
<div class="container-fluid text-center">
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
<footer class="container-fluid text-center">
  <p>2017 Learn2Code.Com </p>
</footer>
</body>
</html>
