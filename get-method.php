<!DOCTYPE html>
<html>
<head>
	<title>$_GET</title>
</head>
<hr/>
Get the data by usingSuper Variable "$_GET"
<hr/>
<body>
<?php 
		$a= $_GET['msg'];
		$b= $_GET['text'];

	echo "Your Message Is"." ".$a;
	echo "<br/>";
	echo "Last text is"." ".$b;


 ?>
</body>
</html>