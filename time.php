<?php include 'stemp.php' ?>
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
          if($course=='complete')
          {
            if($stat!=0)
            {
            header('Location:test2.php');
            }
          }
          else if($course=='html')
          {
            if($stat!=0)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU HAVE ALREADY COMPLETED TEST FOR HTML")';
              echo "window.location='student.php'";
              echo '</script>';
              header("Location:student.php");
            }
          }
          else if($course=='css')
          {
            if($stat==1)
            {
              header("Location:test2.php");
            }
            else if($stat==2)
            {
             header("Location:student.php"); 
            }
          }
          else if($course=='ocss')
          {
            if($stat==1)
            {
              header("Location:test2.php");
            }
            else if($stat==2)
            {
              echo '<script language="javascript">';
              echo 'alert("YOU HAVE ALREADY COMPLETED TEST FOR HTML & CSS");';
              echo "window.location='student.php'";
              echo '</script>';
            }
          }
          else if($course=='js')
          {
            if($stat==1)
            {
              header("Location:test2.php");
            }
            else if($stat==2)
            {
               header("Location:test2.php");
            }
            else if ($stat==3)
            {
                echo '<script language="javascript">';
              echo 'alert("YOU HAVE ALREADY COMPLETED TEST FOR HTML & CSS & javascript");';
              echo "window.location='student.php'";
              echo '</script>';
            }
          }

          
        
error_reporting(0);
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (5*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz System</title>

<script type="text/javascript">
  var days = <?php echo $remainingDay; ?>  
  var hours = <?php echo $remainingHour; ?>  
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59
  }
  if (minutes < 0){
      hours--;
      minutes = 59
  }
  if (hours < 0){
      days--;
      hours = 23
  }
  document.getElementById("remain").innerHTML = "TIME LEFT:"+minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') {
   		document.getElementById("complete").value=0;
      document.myform.submit();
 	} 

}

</script>
</head>
<body onload="setCountDown();">

 <div id="remain" style="float:right;font-size:25px;color:green"><?php echo "TIME LEFT"."$remainingMinutes minutes, $remainingSeconds seconds";?></div>
 <?php
        session_start();
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
              }

          }
          if($stat==0)
          {
            $sql="SELECT * FROM qinsert WHERE id=1";
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
          

            echo "<div class='container' style='overflow:scroll; height:485px; width:1200px;font-size:18px'>";
            echo "<h1 style='margin-left:450px;'><i>HTML TEST</i></h1>";
            echo "<form name='myform' method='POST' action='time.php'>";
            echo "<input type='hidden' id='complete' name='complete' value='1'>";
            for($i=1;$i<$j;$i++)
            {
                $f[$i]=$qno[$i];
                $r=$qno[$i];
                echo "<b>".$i.".)".strtoupper($qus[$i])."</b>";
                echo "<br/>";
                if(isset($_SESSION['$r']))
                {

                }
                for($k=1;$k<=4;$k++)
                {

                     echo "<input type='radio' name='$r' value='$k'>".$ans[$i][$k]."<br/>";
                }
              echo "<br/><br/>";
            }
            echo "<input type='button' value='submit' onclick='validate()'>";
            echo "</form>";
            echo "</div>";
          }
    
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
              $com=$_POST['complete'];
              $flag=0;
              $count=0;
              if($com==0)
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
                  

                  if($count>=8)
                  {
                    $s=$j-1;
                  $sql5="UPDATE course SET test1='$count',status=1 WHERE studentid='$id'";
                  $result5=mysqli_query($conn,$sql5); 
                  $message= "CONGRATULATIONS!!YOU HAVE CORRECTLY ANSWERED".$count."/".$s."question";
                  echo "<script type='text/javascript'>alert('$message');";
                  echo "window.location='student.php'";
                  echo "</script>";
                  
                  }
                  else
                  {
                    $s=$j-1;
                  $message= "YOU HAVE CORRECTLY ANSWERED".$count."/".$s."question PLEASE READ AGAIN AND GIVE THE TEST";
                  echo "<script type='text/javascript'>alert('$message');";
                  echo "window.location='student.php'";
                  echo "</script>";
                  }  
              }         
            }

        }

        ?>
        <script>
        function validate()
        {
          if ($(":radio:checked").length < 10) {
                alert('Please answer all the question!');
                
        }
        else
        {
          document.myform.submit();
        }
      }
        </script>
        
   
</body>
</html>