<?php
$server="localhost";
$username="root";
$password="";
$dbname="project";
$conn=mysqli_connect($server,$username,$password,$dbname);
$sql="SELECT count FROM tcount ";
$result=mysqli_query($conn,$sql);
if($result)
{
	while($row = $result->fetch_assoc()) 
	{
		$count=$row['count'];
	}

}
$user="T00".$count;

?>