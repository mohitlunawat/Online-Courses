
<html>
<head>
	<script>
		var count=0;
		var j=document.getElementById("first").value;
		var k=document.getElementById("second").value;
		if(j==1)
		{
			count++;
		}
		if(k==2)
		{
			count++;
		}
		document.getElementById("result").innerHTML = 5 + 6;


	</script>
</head>
<?php include 'teacher.php' ?>
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
			 $qno[$j]=$row['qno'];
      		$qus[$j]=$row['question'];
      		for($k=1;$k<=4;$k++)
      		{
      			$ans[$j][$k]=$row[$k];
      		}
      		$res[$j]=$row['res'];	
    		$j++;
      		}
      		
	}
	else
	{
		echo "not success";
	}


}
?>
<body>
<?php
	echo "<div class='container' style='overflow:scroll; height:500px; width:1100px;margin-left:250px;'>";
	echo "<form method='POST' action='test.php'>";
	for($i=1;$i<$j;$i++)
	{
		$f[$i]=$qno[$i];

		$r=$qno[$i];
		echo $i.".)".$qus[$i];
		echo "<br/>";
		for($k=1;$k<=4;$k++)
		{
			echo "<input type='radio' name='$r' value='$k'>".$ans[$i][$k];
		}
		echo "<br/><br/>";
	}
	echo "<input type='submit' value='SUBMIT'>";
	echo "</form>";
	echo "</div>";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$flag=0;
		$count=0;
		for($i=1;$i<$j;$i++)
		{
			$t=$f[$i];
			if(empty($_POST[$t]))
			{
				$flag=1;
			}	
		}
		if($flag==1)
		{
			echo "please answer all the question";
		}
		else
		{

			for($i=1;$i<$j;$i++)
			{
			$t=$f[$i];
			$ans=$_POST[$t];
			if($ans==$res[$i])
			{
				$count=$count+1;
			}

			}
			$s=$j-1;
			echo "YOU HAVE CORRECTLY ANSWERED".$count."/".$s."question";	
		}
	}

?>
</body>
</html>
