<?php include 'admin.php' ?>
<?php include 'teachcount.php' ?>
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
	$fnameErr = $lnameErr = $addErr = $cnoErr = $emailErr =  $ageErr= $subjectErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$userid=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$add=$_POST['add'];
$cno=$_POST['cno'];
$email=$_POST['em'];
$da=$_POST['date1'];
$subject=$_POST['sub'];
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

  if (empty($subject)) {
    $subjectErr = "Subject is required";
  } else {
    $subject1 =$subject; 	
  }
   if (empty($age)) {
    $ageErr = "Please enter Age";
  } else {
    $age1 =$age;
  }
  if(!$userid ||!$fname1 ||!$lname1 ||!$add1 ||!$cno1 ||!$email1 ||!$da ||!$age1 ||!$subject1)
{
  echo "<script>alert(not success);</script>";
}
else
{
$sql="INSERT INTO teachreg VALUES('".$userid."','".$fname1."','".$lname1."','".$age1."','".$cno1."','".$add1."','".$email1."','".$da."','".$subject1."')";
$result=mysqli_query($conn,$sql);
if($result)
{
	$role='teacher';
	$ind=1;
	$sql4="INSERT INTO login VALUES('".$userid."','".$userid."','".$role."','".$ind."')";
	$result4=mysqli_query($conn,$sql4);
	if($result4)
	{
		echo '<script language="javascript">';
		echo 'alert("LOGIN CREATED")';
		echo '</script>';
	}
	$count++;
	$sql1="UPDATE tcount set count='$count' where index1=1 ";
	$result1=mysqli_query($conn,$sql1);
	if($result1)
	{
		
	}
}
}
}
}
?>
<head>
	<srcipt src="bootstrap.min.js"></script>
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
	</style>	
</head>	
<div class="container">
	<h1 align="center">TEACHERS REGISTRATION</h1>
	<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
	<hr><br/><br/>
	<table border="0">
		<tr>
			<td><b>TEACHER_ID:</b></td>
			<td class="cl"><input type="text" name="id" value="<?php echo $user ?>"></td>
		</tr>
		<tr>
			<td><b>FIRST-NAME:</b></td>
			<td class="cl"><input type="text" name="fname" placeholder="Enter the first name">
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
			<td><b>DATE:</b></td>
			<td class="cl"><input type="text" value="<?php echo $date ?>" 	 name="date1" readonly="readonly"></td>
		</tr>
		<tr>
			<td><b>SUBJECT</b></td>
			<td class="cl"><input type="text" name="sub" placeholder="Subject of the teacher">
			<span class="error">* <?php echo $subjectErr;?></td>
		</tr>
	</table>
	<br/>
	<br/>
	<button type="submit" class="btn btn-primary" style="margin-left:500px">SAVE <span class="glyphicon glyphicon-save"></span></button>
</div>	
</form>
</html>