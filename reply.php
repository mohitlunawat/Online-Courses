<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   #i1{
    width: 400px;
    height: 100px;
    border:2px solid #456879;
  border-radius:10px;
  padding: 10px;
  background: transparent;
  }
  </style>
</head>
<body>
  <?php include('student.php'); ?>
  <?php
 $id=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
        $qu=$ans="";
         $sql1 = "SELECT * FROM reply WhERE id1='$id'";
        $result1 = mysqli_query($conn, $sql1);
        if($id = $sql1)
        {
        if ($result1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
         $ans=$row['answer'];
         $qu=$row['question'];

    }
} else {
    echo "0 results";
}
}
       
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="container-fluid"  style='overflow:scroll; height:450px; width:1000px;padding-left:150px;'>
  <h1 style="margin-left:300px"><b>Answers</b></h2>
  <br>
 <h3>Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" disabled id="i1" rows="15" cols="50" name="q" value="<?php echo $qu ?>">
  <h3>Answer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" disabled id="i1" rows="15" cols="50" name="q" value="<?php echo $ans ?>">
  </div>
</center>
</form>
</body>
</html>
