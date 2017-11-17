<?php
error_reporting(0);
session_start();
if($_SESSION['name']=='admin')
      {
        header("Location: admin.php");
     }
     else if($_SESSION['role']=='student')
     {
      header("Location: student.php");
     }
     else if($_SESSION['role']=="teacher")
     {
      header("Location: teacher.php");
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="bootstrap.min.js"></script>
</head>
<style>
.navbar{
  background-color:black;
}
u
{
      font-family: fontawesome;
    text-decoration: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    font-size: 37px;
    letter-spacing: 3px;
    color: #555555;
    display: block;
    position: relative;  
     }
     span.com
     {
      color:#4CAF50;
     }
     span.tile
     {
      float: right;
      letter-spacing: 4px;
      font-family: "Segoe UI",Arial,sans-serif;
      font-size: 20px;  
     }
     n
     {
      color:white;
     }
     td
    {
      font-size: 18px;
      height:52px;

    }
    table
    {
      margin-left: 300px;
    }
    input
    {
       border-radius:10px
    }
    m
    {
      color:white;
      font-size: 18px;
    }
</style>
<body>

<div class="container" style="postion:fixed;background-color:#e6e6ff;width:1350px;">
  <p><u>Learn2code<span class="com">.com</span></u>
<span class="tile">Start Thinking!Start Coding</span>

</p>
  </div>
  
  

    <nav class="navbar navbar-default" style="postion:fixed ;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="home.php" id="home"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="menu"><a href=""><m>COURSES</m></a></li>
      <li class="menu"><a href="#"><m>PROCEDURE</m></a></li>
      <li class="menu"><a href="#"><m>CERTIFICATES</m></a></li>
    </ul>
  </div>
</nav>

<div class="container">
</br>
</br>
</br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table border="0">
    <tr>
    <td><b>Username</b></td>
    <td><input type="text" name="user"></td></tr>

    <tr>
      <td><b>Password</b></td>
    <td><input type="password" name="pass"></td></tr>
</table>
</br>
  <button type="submit"style="margin-left:600px" class="btn btn-primary">Login</button>
</form>
</div>
</body>
</html>
<?php
//    session_start();
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $us=$_POST['user'];
      $ps=$_POST['pass'];
      $sql="SELECT * from login where username='$us' and password='$ps'";
      $result=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      if($count==1)
      {
        while($row = $result->fetch_assoc())
          {
            $role=$row['role'];
            $id=$row['username'];
            $ind=$row['ind'];

          }
          echo $role;
        if($role=='admin')
        {
          $_SESSION['name']="admin";
          $_SESSION['role']="admin";  
          header("Location: admin.php");

        }
        else if($role=='stud')
        {
          $sql1="SELECT * FROM studreg WHERE studentid='$us'";
          $result1=mysqli_query($conn,$sql1);
          if($result1)
          {
            while($row1 = $result1->fetch_assoc())
            {
              $name=$row1['fname'];
              $id1=$row1['studentid'];

            } 
            $_SESSION['name']=$name;
            $_SESSION['id']=$id1;
            $_SESSION['role']="student";
           if($ind==1)
            {

              header("Location: first.php");
            }
            else
            {
            header("Location: student.php");
          }
        }
        }
        else if($role=='teacher')
            { 
          $sql1="SELECT * FROM teachreg WHERE teacher_id='$us'";
          $result1=mysqli_query($conn,$sql1);
          if($result1)
          {
            while($row1 = $result1->fetch_assoc())
            {
              $name=$row1['fname'];
              $id1=$row1['teacher_id'];

            } 
            $_SESSION['name']=$name;
            $_SESSION['id']=$id1;
            $_SESSION['role']="teacher";
            if($ind==1)
            {

              header("Location: first.php");
            }
            else
            {
            header("Location: teacher.php");
          }
          }
        }
      }
      else
      {
        echo "<script>";
        echo "alert('INVALID USERNAME OR PASSWORD')";
        echo "</script>";
      }
  }
}

  ?>