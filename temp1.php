<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
      left:300px;
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
    .sidenavbar
    {
      padding:5px;

    }
    .sidenavbar a
    {
      font-size: 17px;
      text-decoration: none;
      color:black;
      padding-top: 25px;
    }
    .sidenavbar a:hover
    {
      background-color: #9b9ea3;
      padding-top: 8px;
    padding-bottom: 8px;
    width:50px;
    }
    .dropdown-menu
    {
      background-color: #e6e6ff ;
      font-size: 20px;
    }
    .dropdown
    {
      font-size: 20px;
    }

</style>
<body>


  <div class="container" style="postion:fixed;background-color:#e6e6ff;width:1250px;">
  <p><u>Learn2code<span class="com">.com</span></u>
<span class="tile">Start Thinking!Start Coding</span>

</p>
  </div>
  
  <?php 
session_start();
  $name=$_SESSION['name']; ?>

    <nav class="navbar navbar-default" style="postion:fixed;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><m>QUESTIONS</m></a>
        <ul class="dropdown-menu">
          <li><a href="qhtmlselect.php">HTML</a></li>
          <li><a href="qcssselect.php">CSS</a></li>
          <li><a href="qjavaselect.php">JAVASCRIPT</a></li>
         </ul>
       </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><m>TEST QUESTIONS</m></a>
        <ul class="dropdown-menu">
          <li><a href="test1.php">HTML</a></li>
          <li><a href="ctest.php">CSS</a></li>
          <li><a href="jtest.php">JAVASCRIPT</a></li>
         </ul>
       </li>
      <li class="menu"><a href="tquery.php"><m>QUERIES</m></a></li>
      <li class="rig"><a href="#"><n>Welcome:<?php echo  "Mr.".$name; ?><n></a></li>
      <li class="rig"><a href="logout.php"><n>Logout<n></a></li>
    </ul>
    
  </div>
</nav>
