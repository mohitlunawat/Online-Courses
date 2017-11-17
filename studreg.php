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
<?php include 'count.php' ?>
<?php
$date=date("Y/m/d");
$server="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
	die('could not connect'.mysql_error());

}
else
{
	$fname1="";
	$fnameErr = $lnameErr = $addErr = $cnoErr = $emailErr =  $ageErr= $courseErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$userid=$_POST['reg'];
$fname=$_POST['name'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$cno=$_POST['cno'];
$add=$_POST['add'];
$email=$_POST['em'];
$da=$_POST['dd'];

	if (empty($fname)) 
 {
    $fnameErr = "Enter First name";
  } else
    {
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Enter a Valid Name";
    }
    else
    {
      $fname1=$fname;
    }
  }
  
  if (empty($lname)) {
    $lnameErr = "Enter Last Name";
  } else {
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Enter a Valid Name";
    }
    else
    {
      $lname1=$lname;
    }
  }
  if (empty($add)) {
    $addErr = "Enter Address";
  } else {
    $add1 =$add;
  }

  if (empty($cno)) {
    $cnoErr = "Enter Phone number";
  } else {
    // check if phno syntax is valid
    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $cno)) {
      $cnoErr = "Invalid phno";
    }  
    else{
    	$cno1=$cno;
    }  
  }
  if (empty($email)) {
    $emailErr = "Enter Email";
  } else {
     // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
    else
    {
    	$email1=$email;
    }
  }

  if (empty($_POST['course'])) {
    $courseErr = "Course is required";
  } else {
    $course1 =$_POST['course']; 	
  }
   if (empty($age)) {
    $ageErr = "Please enter Age";
  } else {
    $age1 =$age;
  }
  if(!$userid || !$fname1 ||!$lname1 ||!$add1 ||!$cno1 ||!$email1 ||!$da ||!$age1 ||!$course1)
{
  echo "<script>alert(not success);</script>";
}
else
{
$sql="INSERT INTO studreg VALUES('".$userid."','".$fname1."','".$lname1."','".$age1."','".$cno1."','".$add1."','".$email1."','".$da."','".$course1."')";
$result=mysqli_query($conn,$sql);
if($result)
{
	if($course1=="html")
	{
		echo '<script language="javascript">';
		echo 'alert("YOU WILL GET CERTIFIED FOR ONLY HTML COURSE");';
		echo "window.location='home.php'";
		echo '</script>';
	}
	else if($course1=="css")
	{
		echo '<script language="javascript">';
		echo 'alert("YOU WILL GET CERTIFIED FOR ONLY HTML&CSS COURSE");';
		echo "window.location='home.php'";
		echo '</script>';
	}
	else if($course1=="ocss")
	{
		echo '<script language="javascript">';
		echo 'alert("YOU WILL FIRST NEED TO GIVE HTML TEST");';
		echo "window.location='home.php'";
		echo '</script>';
	}
	else if($course1=="js")
	{
		echo '<script language="javascript">';
		echo 'alert("YOU WILL FIRST NEED TO GIVE TEST FOR HTML&CSS");';
		echo "window.location='home.php'";	
		echo '</script>';
	}
	$sql3="INSERT INTO course VALUES('".$userid."','".$course1."','','','','','')";
	$result3=mysqli_query($conn,$sql3);
	if($result3)
	{
		echo '<script language="javascript">';
		echo 'alert("SUCCESSFULLY REGISTERED");';
		echo '</script>';	
	}
	$role='stud';
	$ind=1;
	$sql4="INSERT INTO login VALUES('".$userid."','".$userid."','".$role."','".$ind."')";
	$result4=mysqli_query($conn,$sql4);
	if($result4)
	{
		echo '<script language="javascript">';
		echo 'alert("LOGIN CREATED");';
		echo "window.location='home.php'";
		echo '</script>';
	}
	$count++;
	$sql1="UPDATE count set count='$count' where index1=1 ";
	$result1=mysqli_query($conn,$sql1);
	if($result1)
	{
		
	}
}
}
}
}
?>
	<style>
		td
		{
			font-size: 18px;
			height:52px;

		}
		table
		{
			margin-left: 300px;
		}
		.cl
		{
			padding-left: 120px;

		}
		input
		{
			 border-radius:10px
		}
		textarea
		{
			border-radius: 10px;
		}
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
      <li class="menu"><a href=""><m>COURSES</m></a></li>
      <li class="menu"><a href="#"><m>PROCEDURE</m></a></li>
      <li class="menu"><a href="#"><m>CERTIFICATES</m></a></li>
    </ul>
  </div>
</nav>
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	

<div class="container">
	
	<table border="0">
		<tr>
			<td><b>REGNO:</b></td>
			<td class="cl"><input type="text" name="reg" value="<?php echo $user; ?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td><b>FIRST-NAME:</b></td>
			<td class="cl"><input type="text" name="name" placeholder="Enter the first name">
			<span class="error">* <?php echo $fnameErr;?></td>
		</tr>
		<tr>
			<td><b>LAST-NAME</b></td>
			<td class="cl"><input type="text" name="lname" placeholder="Enter the last-name">
			<span class="error">* <?php echo $lnameErr;?></td>
		</tr>
		<tr>
			<td><b>AGE</b></td>
			<td class="cl"><input type="text" name="age" placeholder="Enter the Age">
			<span class="error">* <?php echo $ageErr;?></td>
		</tr>
		<tr>
			<td><b>CONTACT-NO</b></td>
			<td class="cl"><input type="text" name="cno" placeholder="Enter 10 digit number">
			<span class="error">* <?php echo $cnoErr;?></td>
		</tr>
		<tr>
			<td><b>ADDRESS</b></td>
			<td class="cl"><textarea name="add" placeholder="Enter the address"></textarea>
			<span class="error">* <?php echo $addErr;?></td>

		</tr>
		<tr>
			<td><b>EMAIL</b></td>
			<td class="cl"><input type="email" name="em" placeholder="Enter the email">
			<span class="error">* <?php echo $emailErr;?></td>
		</tr>
		<tr>
			<td><b>DATE</b></td>
			<td class="cl"><input type="text" name="dd" value="<?php echo $date ?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td><b>SELECT COURSE</b></td>
			<td class="c1"><input type="radio" name="course" value="complete">COMPLETE
			<input type="radio" name="course" value="html">HTML
			<input type="radio" name="course" value="css">HTML CSS
			<input type="radio" name="course" value="ocss">CSS
			<input type="radio" name="course" value="js">JAVASCRIPT
			<span class="error">* <?php echo $courseErr;?></td>
		</tr>

	</table>
	<br/>
	<br/>
	<button type="submit" class="btn btn-primary" style="margin-left:500px">SAVE <span class="glyphicon glyphicon-save"></span></button>
</div>	
</form>
</body>
</html>