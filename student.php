<?php
error_reporting(0);
session_start();
 if(!isset($_SESSION['name']))
  {
    echo "<script type='text/javascript'>alert('please login first');";
        echo "window.location='login.php'";
        echo "</script>";
  }
?>
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
       $flag=0;
       $flag1=0;
       $flag2=0;
       $name=$_SESSION['name'];
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
          if($stat==0)
          {
          $flag=1;
          $flag1=0;
          $flag2=0;
          }
          else if($stat==1)
          {
            $flag=1;
            $flag1=1;
           $flag2=0;
          }
        else
        {
          $flag=1;
          $flag1=1;
          $flag2=1;
        }
       }
       else if($course=='html')
       {
          
          $flag=1;
       }
       else if($course=='css')
       {
          if($stat==0)
          {
            $flag=1;  
          }
          else
          {
            $flag=1;
            $flag1=1;
          }

       }
       else if($course=='ocss')
       {
        if($stat==0)
        {
            echo "<script>";
            echo "alert('YOU NEED TO GIVE HTML TEST FIRST');";
            echo "window.location='time.php'";
            echo "</script>";
        }
        else
        {
          $flag1=1;
        }
       }
       else if($course=='js')
       {
        if($stat==0)
        {
          echo '<script language="javascript">';
            echo 'alert("YOU WILL FIRST NEED TO GIVE TEST FOR HTML");';
            echo "window.location='time.php'";
            echo '</script>';
        }
        else if($stat==1)
        {
          echo '<script language="javascript">';
            echo 'alert("YOU WILL FIRST NEED TO GIVE TEST FOR CSS");';
            echo "window.location='test2.php'";
            echo '</script>';
        }
        else
        {
          $flag=1;
          $flag1=1;
          $flag2=1;
        }
       }

  } 

       


 ?>
  	





  	<div class="leftmenuinner" style="overflow:scroll;height:520px">
    <div <?php if($flag==0){?>style="display:none"<?php } ?>>
    <h3>HTML</h3>
    <ul class="sidenavbar">
     <li><a href="studhtmlint.php">HTML Introduction</a></li>
    <li class="menu1"><a href="studhedit.php">HTML Editors</a></li>
    <li class="menu1"><a href="studhbasic.php">HTML Basic</a></li>
    <li class="menu1"><a href="studhelemnt.php">HTML Elements</a></li>
    <li class="menu1"><a href="studhatt.php">HTML Attributes</a></li>
    <li class="menu1"><a href="studhhead.php">HTML Headings</a></li>
    <li class="menu1"><a href="studhstyle.php">HTML Styles</a></li>
    <li class="menu1"><a href="htables.php">HTML Tables</a></li>
    <li class="menu1"><a href="studhlist.php">HTML List</a></li>   
    </ul>
  </div>
    <div <?php if($flag1==0){?>style="display:none"<?php } ?>>
    <h3 style="margin-top:15px;">CSS</h3>
    <ul class="sidenavbar">
        <li class="menu1"><a href="studcintro.php">CSS Introduction</a></li>
        <li class="menu1"><a href="studcsyntax.php">CSS Syntax</a></li>
        <li class="menu1"><a href="studchowto.php">CSS How to</a></li>
        <li class="menu1"><a href="studcback.php">CSS Background</a></li> 
        <li class="menu1"><a href="studcmargin.php">CSS Margin</a></li>
        <li class="menu1"><a href="studcbox.php">CSS Box Model</a></li>
        <li class="menu1"><a href="studctext.php">CSS Text</a></li>
        <li class="menu1"><a href="studcfont.php">CSS Fonts</a></li>
        <li class="menu1"><a href="studcselector.php">CSS Selectors</a></li>
      </ul>
    </div>
    <div <?php if($flag2==0){?>style="display:none"<?php } ?>>
      <h3 style="margin-top:15px;">JAVASCRIPT</h3>
    <ul class="sidenavbar">
      <li class="menu1"><a href="studjintro.php">JS Introduction</a></li>
        <li class="menu1"><a href="studjwhere.php">JS Where To</a></li>
        <li class="menu1"><a href="studjsyntax.php">JS Syntax</a></li>
        <li class="menu1"><a href="studjvar.php">JS Variables</a></li> 
        <li class="menu1"><a href="studjdata.php">JS Datatypes</a></li>
        <li class="menu1"><a href="studjfun.php">JS Functions</a></li>
        <li class="menu1"><a href="studjevent.php">JS Events</a></li>
        <li class="menu1"><a href="studjstring.php">JS Strings</a></li>
        <li class="menu1"><a href="studjjson.php">JS Json</a></li>
      </ul>
    </div>
  </div>