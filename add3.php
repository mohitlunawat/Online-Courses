<?php include 'lhtml.php' ?>
<?php
$id1=4;
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
	$sql="SELECT count FROM subcount where in1='4'";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		 echo "success";
			while($row = $result->fetch_assoc())
			{
				$count=$row['count'];
			}
			echo $count;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$ide=$_POST['id'];
	$sid=$_POST['sid'];
	$top=$_POST['top'];
	$desc=$_POST['desc'];
	$sql2="INSERT INTO try VALUES('".$ide."','".$sid."','".$top."','".$desc."')";
	$result2=mysqli_query($conn,$sql2);
	if($result2)
	{
		echo "success";
		$cns=$count+1;

		$sql3="UPDATE subcount set count='$cns' where in1='4'";
		$result3=mysqli_query($conn,$sql3);
		echo "<script type='text/javascript'>alert('successfully added');";
	 	echo "window.location='helemnt.php'";
     	echo "</script>";
     	$sql4="SELECT count1 from count1 where id1='4'";
		$result4=mysqli_query($conn,$sql4);
		if($result4)
		{
			while($row4 = $result4->fetch_assoc()) 
			{
			$cj=$row4['count1'];	
      		}
      	}
      	$cj=$cj+1;
      	$sql5="UPDATE count1 set count1='$cj' where id1='4'";
		$result5=mysqli_query($conn,$sql5);

	}
	}
}
	


?>
<html>
<head>
</head>
<body>
<form method="POST" action="add3.php">
<div class="container" style="overflow:scroll; height:700px; width:1400px;padding-left:500px;padding-top:100px">
SUBJECT ID:<input type="text" name="id" value="<?php echo $id1 ?>"><br/></br/>
SUBTOPIC ID:<input type="text" name="sid" value="<?php echo $count ?>"><br/></br>
PLEASE ENTER THE SUB TOPIC:<input type="text" name="top"><br/></br/><br/></br/>
PLEASE ENTER THE DESCRIPTION:<textarea name="desc"></textarea>
<input type="submit"/>
</div>
</form>
</body>