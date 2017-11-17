<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.1.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include 'student.php' ?>

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
          $id=$_SESSION['id'];
          $sql1="SELECT * FROM course WHERE studentid='$id'";
          $result1=mysqli_query($conn,$sql1);
          if($result1)
          {
            while($row1 = $result1->fetch_assoc())
              {
                  $stat=$row1['status'];
                  $course=$row1['cousel'];
              }

          }
          $sql2="SELECT * FROM studreg WHERE studentid='$id'";
          $result2=mysqli_query($conn,$sql2);
          if($result2)
          {
            while($row2 = $result2->fetch_assoc())
              {
                  $fname=$row2['fname'];
                  $lname=$row2['lastname'];
              }

          } 
          else
          {
          	echo "not succes";
          }
      }

           if($course=='complete')
          {
            if($stat==0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE HTML AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==1)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE CSS AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==2)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE JAVASCRIPT  TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==3)
            {
            	$sql3="SELECT * FROM course WHERE studentid='$id'";
          		$result3=mysqli_query($conn,$sql3);
          		if($result3)
          		{
            	while($row3 = $result3->fetch_assoc())
              		{
                  $test1=$row3['test1'];
                  $test2=$row3['test2'];
                  $test3=$row3['test2'];
                  $total=$test1+$test2+$test3;
                  $avg=($total/3)*10;
              		}
              	}
            	echo "<div class='container-fluid'  style='overflow:scroll; height:600px; width:1200px;padding-left:100px;'>";
      			echo "<div style='width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878'>";
     		    echo "<div style='width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878'>";
      			echo "<span style='font-size:50px; font-weight:bold'>Certificate of Completion</span>";
      			echo " <br><br>";
      			echo " <span style='font-size:25px'><i>This is to certify that</i></span>";
      			echo " <br>";
      			echo " <span style='font-size:30px'><b>".strtoupper($fname)."&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($lname)."</b></span><br/>";
      			echo " <span style='font-size:25px'><i>has completed the course</i></span><br/>";
      			echo " <span style='font-size:30px'><b>HTML & CSS & JAVACRIPT</b>  <br/><br/></span>";
      			echo " <span style='font-size:20px'>with score of <b>".round($avg)."%</b></span> <br/><br/>";
      			echo " <span style='font-size:25px'><i><b>DATED:</b></i></span><br>";
      			echo "<span style='font-size:30px'>".date("Y/m/d");
      			echo "</span>";
      			echo "</div>";
      			echo "</div>";
            }
        }
        else if($course=='html')
        {
        	if($stat==0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE HTML AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==1)
            {
            	$sql4="SELECT * FROM course WHERE studentid='$id'";
          		$result4=mysqli_query($conn,$sql4);
          		if($result4)
          		{
            	while($row4 = $result4->fetch_assoc())
              		{
                  $test1=$row4['test1'];
                  $total=$test1;
                  $avg=($total)*10;
              		}
              	}
            	echo "<div class='container-fluid'  style='overflow:scroll; height:400px; width:1000px;padding-left:100px;'>";
      			echo "<div style='width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878'>";
     		    echo "<div style='width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878'>";
      			echo "<span style='font-size:50px; font-weight:bold'>Certificate of Completion</span>";
      			echo " <br><br>";
      			echo " <span style='font-size:25px'><i>This is to certify that</i></span>";
      			echo " <br>";
      			echo " <span style='font-size:30px'><b>".strtoupper($fname)."&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($lname)."</b></span><br/>";
      			echo " <span style='font-size:25px'><i>has completed the course</i></span><br/>";
      			echo " <span style='font-size:30px'><b>HTML<br/><br/></span>";
      			echo " <span style='font-size:20px'>with score of <b>".round($avg)."%</b></span> <br/><br/>";
      			echo " <span style='font-size:25px'><i><b>DATED:</b></i></span><br>";
      			echo "<span style='font-size:30px'>".date("Y/m/d");
      			echo "</span>";
      			echo "</div>";
      			echo "</div>";	
            }
        }
        else if($course=='css')
        {
        	if($stat==0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE HTML AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==1)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE CSS");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==2)
            {
            	$sql4="SELECT * FROM course WHERE studentid='$id'";
          		$result4=mysqli_query($conn,$sql4);
          		if($result4)
          		{
            	while($row4 = $result4->fetch_assoc())
              		{
                  $test1=$row4['test1'];
                  $test2=$row4['test2'];
                  $total=$test1+$test2;
                  $avg=($total/2)*10;
              		}
              	}
            	echo "<div class='container-fluid'  style='overflow:scroll; height:400px; width:1000px;padding-left:100px;'>";
      			echo "<div style='width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878'>";
     		    echo "<div style='width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878'>";
      			echo "<span style='font-size:50px; font-weight:bold'>Certificate of Completion</span>";
      			echo " <br><br>";
      			echo " <span style='font-size:25px'><i>This is to certify that</i></span>";
      			echo " <br>";
      			echo " <span style='font-size:30px'><b>".strtoupper($fname)."&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($lname)."</b></span><br/>";
      			echo " <span style='font-size:25px'><i>has completed the course</i></span><br/>";
      			echo " <span style='font-size:30px'><b>HTML & CSS<br/><br/></span>";
      			echo " <span style='font-size:20px'>with score of <b>".round($avg)."%</b></span> <br/><br/>";
      			echo " <span style='font-size:25px'><i><b>DATED:</b></i></span><br>";
      			echo "<span style='font-size:30px'>".date("Y/m/d");
      			echo "</span>";
      			echo "</div>";
      			echo "</div>";	
            }	
        }
        else if($course=='ocss')
        {
  			if($stat==0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE HTML AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==1)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE CSS");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==2)
            {
            	$sql4="SELECT * FROM course WHERE studentid='$id'";
          		$result4=mysqli_query($conn,$sql4);
          		if($result4)
          		{
            	while($row4 = $result4->fetch_assoc())
              		{
                  
                  $test2=$row4['test2'];
                  $total=$test2;
                  $avg=($total)*10;
              		}
              	}
            	echo "<div class='container-fluid'  style='overflow:scroll; height:400px; width:1000px;padding-left:100px;'>";
      			echo "<div style='width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878'>";
     		    echo "<div style='width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878'>";
      			echo "<span style='font-size:50px; font-weight:bold'>Certificate of Completion</span>";
      			echo " <br><br>";
      			echo " <span style='font-size:25px'><i>This is to certify that</i></span>";
      			echo " <br>";
      			echo " <span style='font-size:30px'><b>".strtoupper($fname)."&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($lname)."</b></span><br/>";
      			echo " <span style='font-size:25px'><i>has completed the course</i></span><br/>";
      			echo " <span style='font-size:30px'><b>CSS<br/><br/></span>";
      			echo " <span style='font-size:20px'>with score of <b>".round($avg)."%</b></span> <br/><br/>";
      			echo " <span style='font-size:25px'><i><b>DATED:</b></i></span><br>";
      			echo "<span style='font-size:30px'>".date("Y/m/d");
      			echo "</span>";
      			echo "</div>";
      			echo "</div>";
            }
        }
        else if($course=='js')
        {
        	if($stat==0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE HTML AND REAMINING TEST ");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==1)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE CSS AND JAVASCRIPT");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==2)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU NEED TO COMPLETE JAVASCRIPT TEST");';
              echo "window.location='student.php'";
              echo '</script>';
            }
            else if($stat==3)
            {
            	$sql4="SELECT * FROM course WHERE studentid='$id'";
          		$result4=mysqli_query($conn,$sql4);
          		if($result4)
          		{
            	while($row4 = $result4->fetch_assoc())
              		{
                  
                  $test2=$row4['test3'];
                  $total=$test2;
                  $avg=($total)*10;
              		}
              	}
            	echo "<div class='container-fluid'  style='overflow:scroll; height:400px; width:1000px;padding-left:100px;'>";
      			echo "<div style='width:800px; height:500px; padding:20px; text-align:center; border: 10px solid #787878'>";
     		    echo "<div style='width:750px; height:450px; padding:20px; text-align:center; border: 5px solid #787878'>";
      			echo "<span style='font-size:50px; font-weight:bold'>Certificate of Completion</span>";
      			echo " <br><br>";
      			echo " <span style='font-size:25px'><i>This is to certify that</i></span>";
      			echo " <br>";
      			echo " <span style='font-size:30px'><b>".strtoupper($fname)."&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($lname)."</b></span><br/>";
      			echo " <span style='font-size:25px'><i>has completed the course</i></span><br/>";
      			echo " <span style='font-size:30px'><b>JAVASCRIPT<br/><br/></span>";
      			echo " <span style='font-size:20px'>with score of <b>".round($avg)."%</b></span> <br/><br/>";
      			echo " <span style='font-size:25px'><i><b>DATED:</b></i></span><br>";
      			echo "<span style='font-size:30px'>".date("Y/m/d");
      			echo "</span>";
      			echo "</div>";
      			echo "</div>";	
            }
        }
    ?>
