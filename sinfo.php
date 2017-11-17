<!DOCTYPE html>
<html>
<head>
<style text="text/css">
	td
	{
		padding-left: 500px;
		width: 50px;
		color:black;
		font-size: 20px;
	}
	tr
	{
		width: 100px;
		height: 50px;
	}
    center{
	color:white;
}
   table.i5 td
   {
   	padding-right: 50px;
   }
   .success
   {
   	position: absolute;
   	margin-top: 300px;
   	margin-left: 500px;
   	margin-right: 50px;
   }
   .success1
   {
   	position: absolute;
   	margin-top: 300px;
   	margin-left: 100px;
   }
   .ci{
   	padding-left:5px;
  }
  table td
  {
  	padding-right: 100px;
  }
    	</style>
</head>
<?php include 'admin.php' ?>
<?php
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
		$custid=$date="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
{
	$custid=$_POST['id'];
	$date=$_POST['date'];
	if(!empty($custid))
	{
		$sql="SELECT * FROM studreg where studentid='$custid'";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			while($row = $result->fetch_assoc()) 
			{
      		$cust1=$row['studentid'];
			$fname=$row['fname'];
			$lname=$row['lastname'];
			$age=$row['age'];
			$addr=$row['address'];
			$phno=$row['contact'];
			$email=$row['email'];
			$date1=$row['date1'];
			echo "<div class=\"success\">";
		   echo "<form method='POST' action='sinfo.php';>";
		   echo "<table border=0>";
			echo "<tr><td>STUDENT_ID:</td>"."<td>".$cust1."</td>"."</tr>"."<tr><td>FIRSTNAME</td>"."<td>".$fname."</td></tr>"."<tr><td>LASTNAME</td>"."<td>".$lname."</td></tr>"."<tr><td>AGE</td>"."<td>".$age."</td></tr>"."<tr><td>ADDRESS</td>"."<td>".$addr."</td></tr>"."<tr><td>PHONE</td>"."<td>".$phno."</td></tr>"."<tr><td>EMAIL</td>"."<td>".$email."</td></tr>"."<tr><td>DATE</td>"."<td>".$date1."</td></tr>";
			echo "</table></form></div>";
			}
		}
		else
		{
			echo "not found";
		}


	}
	else
	{
		if(!empty($date))
		{
			$sql2="SELECT * FROM studreg where date1='$date'";
			$result1=mysqli_query($conn,$sql2);
			if($result1)
			{
				
				echo "<div class=\"success1\">";
				echo "<table border=0 class=\"i5\"><tr><td><b>STUDENT_ID</b></td><td class='ci'><b>FIRSTNAME</b></td><td class='ci'><b>LASTNAME</b></td><td class='ci'><b>AGE</b></td><td class='ci'><b>ADDRESS</b></td><td class='ci'><b>PHNO</b></td><td class='ci'><b>EMAIL</b></td><td class='ci'><b>DATE</b></td></tr>";
				while($row = $result1->fetch_assoc()) 
	{

			$cust=$row['studentid'];
			$fname=$row['fname'];
			$lname=$row['lastname'];
			$age=$row['age'];
			$addr=$row['address'];
			$phno=$row['contact'];
			$email=$row['email'];
			$date1=$row['date1'];
			
		    echo "<tr>"."<td>".$cust."</td>"."<td class='ci'>".$fname."</td>"."<td class='ci'>".$lname."</td>"."<td class='ci'>".$age."</td>"."<td class='ci'>".$addr."</td>"."<td class='ci'>".$phno."</td>"."<td class='ci'>".$email."</td>"."<td class='ci'>".$date1."</td>"."</tr>";
		    	
	}
		   echo "</table></div>";
			}
			else
			{
				echo "not success";
			}
		}
	}
}
}
}
?>
<head>
	<script src="bootstrap.min.js"></script>
	<style>
	.mm
	{
		font-size: 20px;
	}
	</style>
</head>
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">
	<h1 align="center">STUDENTS INFORMATION</h1>
	<hr>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<p class="mm">Enter Students id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter the date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">SEARCH&nbsp;&nbsp;<span class="glyphicon glyphicon-search">
</span></button>
</div>
</form>
</html>
