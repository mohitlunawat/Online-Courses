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
      left:400px;
    }
    .navbar
    {
    	
        background:#e6e6e6;
        box-shadow: 10;
     }
     m{
      color:black;
      
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
     .leftmenuinner {
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    height: 100%;
    padding-top: 0px;
    background-color: #f1f1f1;
}
    .leftmenuinner {
    position: fixed;
    padding-top: 0px;
    height: 100%;
    width: 170px;
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
      background-color: green ;
      font-size: 20px;
    }
    .dropdown
    {
      font-size: 20px;
    }

</style>
<body>
  

<nav class="navbar navbar-default" style="postion:fixed;">
  <div class="container-fluid">
    <ul class="class="nav nav-pills"">
      <li><a href="time.php"><m>TAKE_TEST</m></a></li>
      <li><a href="squery.php"><m>ASK DOUBT</m></a></li>
      <li><a href="certify.php"><m>APPLY FOR CERTIFICATE</m></a></li>
      <li><a href="#"><n>Welcome: <?php echo $name ?><n></a></li>
      <li><a href="logout.php"><n>Logout<n></a></li>
    </ul>
  </div>
</body>
</html>