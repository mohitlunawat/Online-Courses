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
	$sql4="SELECT count1 from count2 where id1='3'";
	$result4=mysqli_query($conn,$sql4);
		if($result4)
		{
			while($row8 = $result4->fetch_assoc()) 
			{
			$count=$row8['count1'];	
      		}
      	}
      	else
      	{
      		echo "not found";
      	}
	
	$id=3;
	for($j=1;$j<=$count;$j++)
		{
	$sql="SELECT * FROM try1 where id1='$id' and sub='$j'";
	$result=mysqli_query($conn,$sql);
		if($result)
		{
			while($row = $result->fetch_assoc()) 
			{
			$sub[$j]=$row['subtop'];
      		$cus[$j]=$row['desc1'];	
      		}
      	}
      	else
      	{
      		echo "not found";
      	}
      }
      	
}
?>
<html>
<head>
	<!--<script src="bootstrap.min.js"></script>-->
	<script src="jquery-3.1.1.js"></script>
	<script>
	$(document).ready(function(){
	$("textarea").each(function () {
        this.style.height = (this.scrollHeight+10)+'px';
    });

	})
	</script>
	<style>
	.li
	{
			height:250px;
			

	}
	textarea
	{
		border:none;
		width:500px;
	}
	.sub
	{
		float: right;
	}
	</style>
	<script>
	function myfun()
	{
		window.location.href="ad3.php";
	}
	</script>
</head>
<?php include 'student.php' ?>
<?php

	echo "<form method='POST' action='tt.php'>";
	echo "<div class='container' style='overflow:scroll; height:430px;overflow-x: hidden; width:1000px;margin-left:200px;'>";
	for($u=1;$u<=$count;$u++)
	{
	
	echo "<h1>".$sub[$u]."</h1><br/>";
	echo "<textarea name='$u' disabled style='background:transparent'>";
	echo $cus[$u];
    echo "</textarea>";
	
	}
	echo "<p id='3'></p>";
	echo "</div></form>";
?>

