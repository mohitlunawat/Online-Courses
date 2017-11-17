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
	$sql="SELECT * FROM qinsert";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
         $j=1;
		while($row = $result->fetch_assoc()) 
			{

			$id[$j]=$row['id'];
      		$qus[$j]=$row['question'];
      		for($k=1;$k<=4;$k++)
      		{
      			$ans[$j][$k]=$row[$k];
      		}	
            $j++;
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
	</style>
</head>
<body>
<?php 
for($q=1;$q<$j;$q++)
{	
echo $qno[$q].".)  "; 
echo $qus[$q]."<br/>"; 
for($a=1;$a<=4;$a++)
{
	echo "<xmp>".$a.".) ".$ans[$q][$a]."</xmp>"."   ";
}
echo "                                   "."<br/><br/>";
}
?>
</body>
</html>