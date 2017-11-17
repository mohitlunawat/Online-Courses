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
	$q=1;
	$sql="SELECT * FROM question where id1='1'";
	$result=mysqli_query($conn,$sql);
	if($result)
	{

		while($row = $result->fetch_assoc()) 
			{

			$qno[$q]=$row['qno'];
      		$qus[$q]=$row['question'];
      		for($k=1;$k<=4;$k++)
      		{
      			$ans[$q][$k]=$row[$k];
      		}	
      		$res[$q]=$row['res'];
      		$q++;
      		}
	}
	}
	if(isset($_POST['ss']))
	{
		for($t=1;$t<9;$t++)
		{
			if(isset($_POST[$t]))
			{

				$sql2="SELECT * FROM question where id1='1' and qno='$t'";
				$result2=mysqli_query($conn,$sql2);
				if($result2)
				{
					
					while($row1 = $result2->fetch_assoc()) 
						{
							$id3=1;

							$qno1=$row1['qno'];
		
      						$qus1=$row1['question'];
      						
      						for($k=1;$k<=4;$k++)
      						{
      							$ans1[$k]=$row1[$k];
      						
      						}	
      						$res=$row1['res'];
							    
      					}
				}
				$sql3="INSERT INTO qinsert VALUES('".$id3."','".$qno1."','".$qus1."','".$ans1[1]."','".$ans1[2]."','".$ans1[3]."','".$ans1[4]."','".$res."')";
				$result3=mysqli_query($conn,$sql3);
				if($result3)
				{
					//echo "<script>";
	 				//echo "window.location='test1.php'";
     	//echo "</script>";
				}		
				else
				{
					echo " insertnot sucess";
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
</head>
<body>
	<div class=i1>
	</br>
</br>
<?php
echo "<div style='width: 100%; overflow: hidden;'>";
echo "<div style='width:50px; float: left;'>";
echo "<form method=POST action='testtry.php'>";
	for($i=1;$i<$q;$i++)
	{
	echo  $i."<input type='checkbox' name='$i'>"."<br><br><br>";
	}
	echo "<input type='submit' name='ss'>";
	echo "</form>"; 
echo "</div>";
echo "<div style='margin-left: 70px; width:1000px;'>";
for($w=1;$w<$q;$w++)
{
echo $qno[$w].".)  "; 
echo $qus[$w]."<br/>"; 
for($a=1;$a<=4;$a++)
{
	echo "<xmp>".$a.".) ".$ans[$w][$a]."</xmp>"."   ";
}
echo "                                   "."<br/><br/>";
}
echo "</div></div>";
?>
<?php
	
	?>
</div>
</body>
</html>