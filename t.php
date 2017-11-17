<?php
$count=0;
$ans=array("2","3","3","1");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$i=1;
	$j=0;
	$k=0;
	while($j<4)
	{
 	$user=$_POST[$i];
 	if($user==$ans[$k])
 	{
 	$count++;
 	}
 	$i++;
 	$k++;
 	$j++;
}

}

?>
<head>
	<script src="bootstrap.min.js"></script>
	<style>
	xmp
	{
		display:inline;

	}
	.quiz
	{
		font-size: 25px;
	}
	</style>
</head>
<body>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<h1 align="center" style="color:green">HTML QUIZ</h1>
	<br/>
	<hr>
	<div class="quiz">
	1. What does HTML stand for?
<br>
 	<input type="radio" name="1" value="1">	Hyperlinks and Text Markup Language<br/>
    <input type="radio" name="1" value="2">	 Hyper Text Markup Language><br/>
 	<input type="radio" name="1" value="3">	Home Tool Markup Language<br/>
	<hr>
	2. Who is making the Web standards?
<br>
 <input type="radio" name="2" value="1">Microsoft<br/>
 <input type="radio" name="2" value="2">Mozilla<br/>
 <input type="radio" name="2" value="3">The World Wide Web Consortium<br/>
 <input type="radio" name="2" value="4">Google<br/>
	<hr>
	3. Choose the correct HTML element for the largest heading:
<br>
 <input type="radio" name="3" value="1"><xmp><h6></xmp><br/>
 <input type="radio" name="3" value="2"><xmp><heading></xmp><br/>
 <input type="radio" name="3" value="3"><xmp><h1></xmp><br/>
 <input type="radio" name="3" value="4"><xmp><head></xmp><br/>
 <hr>
 4. What is the correct HTML element for inserting a line break?
<br>
 <input type="radio" name="4" value="1"><xmp><br></xmp><br/>
 <input type="radio" name="4" value="2"><xmp><break></xmp><br/>
 <input type="radio" name="4" value="3"><xmp><lb></xmp><br/>
 <hr>

	<p>YOU ANSWERS<span> <?php echo $count ?></span>/4 CORRECTLY
	<input type="submit">submit</input>
</div>
</form>
</body>