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

	$sql="SELECT * FROM qinsert where id=3";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
         $j=1;
		while($row = $result->fetch_assoc()) 
			{

			$qno[$j]=$row['qno'];
      		$qus[$j]=$row['question'];
      		for($k=1;$k<=4;$k++)
      		{
      			$ans[$j][$k]=$row[$k];
      		}	
            $j++;
      		}
	
		
	}
	if(isset($_POST['delete']))
	{
		for($t=1;$t<40;$t++)
		{
			if(isset($_POST[$t]))
			{
				echo $t."select";
				$sql2="DELETE FROM qinsert where qno='$t' and id=3";
				$result2=mysqli_query($conn,$sql2);
				if($result2)
				{
					echo "<script type='text/javascript'>alert('successfully deleted');";
	 				echo "window.location='jtest.php'";
     				echo "</script>";
				}
			}
		}
	}

}

?>




<html>
<head>
	<style>
	xmp
	{
		display:inline;
	}
	.i1{
		font-size: 20px;
		font-family: Arial, Helvetica, sans-serif;
		padding-left: 80px;
	}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
<?php include 'teacher.php' ?>
<?php 
echo "<div class='container' style='overflow:scroll; height:500px; width:1100px;margin-left:250px;'>";
echo "<p><h3 style='text-align:center'>FINALIZE THE QUESTION FOR TEST</h3></p>";
echo "<div style='width:50px; float: left;'>";
echo "<form method='POST' action='jtest.php'>";
for($r=1;$r<$j;$r++)
{
	$s=$qno[$r];
	echo "<input type='checkbox' name='$s'>".$s."<br/><br/><br/> ";
}
echo "<input type='submit' name='delete' value='delete'>";
echo "</div>";
echo "</form>";
echo "<div style='margin-left: 70px; width:1000px;'>";
for($q=1;$q<$j;$q++)
{	
echo $qno[$q].".)  "; 
echo $qus[$q]."<br/>"; 
for($a=1;$a<=4;$a++)
{
	echo "<xmp>".$a.".) ".$ans[$q][$a]."</xmp>"."   ";
}
echo ""."<br/><br/>";
}
echo "</div>";
echo "</div>";
?>
</div>
</body>
</html>