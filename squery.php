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
    height: 150px;
    border:2px solid #456879;
  border-radius:10px;
  padding: 10px;
  }
  #q{
           margin-left: 170px;
           margin-top: -1cm;  }
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
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id=$_POST['id'];
        $qu=$_POST['question'];
        $sql="INSERT INTO ask VALUES('".$id."','".$qu."')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
          echo '<script language="javascript">';
            echo 'alert("YOU WILL RECEIVE A REPLY SOON");';
            echo '</script>';
        }
    }
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="container-fluid"  style='overflow:scroll; height:450px; width:1000px;padding-left:150px;'>
  <h1 style="margin-left:300px"><b>CLARIFY DOUBT</b></h2>
  <br>
</br>
  <h3>Student Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $id ?>" name="id"><br/><br>
  <h3>Ask Question:</h3><textarea name="question" id="q"cols=30 rows=5 style="display:inline;"></textarea>  
    
    <button type="submit"value="Submit" >Submit</button>
  </div>
</center>
</form>
</body>
</html>
