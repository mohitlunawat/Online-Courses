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
    border:2px solid #456879;
  border-radius:10px;
  margin-left: 3cm;
  margin-top: -1cm;
  }
  #i2
  {
    border:2px solid #456879;
  border-radius:10px;
  margin-left: 3cm; 
  }
  </style>
</head>
<body>
  <?php include 'teacher.php'; ?>
   <?php
   error_reporting(0);
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
  $sql = "SELECT * FROM ask";
  $result = mysqli_query($conn, $sql);

  if ($result) 
  {
    while($row = $result->fetch_assoc()) 
      {
      $sid=$row['id1'];
      $qu=$row['question']; 
          }
  } 
}
    
if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $id=$_POST['id'];
    $qus=$_POST['question'];
    $rep=$_POST['reply'];
    $sql="INSERT INTO reply VALUES('".$id."','".$qus."','".$rep."')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      $sql="DELETE FROM ask WHERE id1='$sid'";
      $result=mysqli_query($conn,$sql);
    }
}

?>  
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="container-fluid"  style='overflow:scroll; height:450px; width:1000px;padding-left:150px;'>
    </br>
</br>
    <center><h2><b>Discussions</b></h2></center>
    <h3>From:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $sid ?>" name="id">
    <br/><h3>Question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><textarea name="question" id="i1" cols=20 rows=5 style="display:inline;" disabled><?php echo $qu ?></textarea>
</br></br>
    <textarea rows="6" cols="50" name="reply"id="i2" placeholder="Reply to the Queries here..."></textarea>
    <button type="submit"value="Submit" class="subbtn">Submit</button>
  </div>
</center>
</form>
</body>
</html>
