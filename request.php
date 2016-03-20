<!DOCTYPE html>
<html>
<head>
	<title>$_REQUEST</title>
</head>
<body>
<hr/>
PHP SUPER VARIABLE $_REQUEST and $_POST -
<hr/>
<form action="" method="post"> 

		Username:<input type="text" name="username" /><br>	
		Submit: <input type="submit" name="submit" /><br>


</form>

<div class="form" style="color: white; border-radius: 10px; background-color: gray; width: 15%; height: 30%">

<?php 
   
   if($_SERVER['REQUEST_METHOD'] == "POST"){
   	   $name= $_REQUEST['username'];
   	   if(empty($name)){
   	   	echo "<span style='color:red'>Please insert your name</span>";

   	   }
   	   else {
		echo "Your name is"." ".$name;   	   		
     	}	

   }

 ?>

 </div>

 <a href="get-method.php?msg=Helloworld&text=newMessage"> Sent Your Data</a>



</body>
</html>