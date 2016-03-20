<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>

<body>

<hr/>
PHP FORM VALIDATION
<hr/>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
		
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td>Father's Name: </td>
					<td><input type="text" name="fname"/></td>
				</tr>
				<tr>
					<td>Mother's Name: </td>
					<td><input type="text" name="mname"/></td>
				</tr>
				<tr>
					<td>About You: </td>
					<td><textarea name="comment" rows="5" cols="30"></textarea></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" value="male" />Male
					<input type="radio" name="gender" value="female" />Female</td>
				</tr>
				<tr>
				     <td></td>
					<td><input type="submit" name="submit" value="Submit" /></td>
				</tr>
			</table>

	</form>
    <br/>
	<hr/>
	Printed Data
	<hr/>


<?php 

						   // PRINTING THE FORM VALUE //

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$name    = validate($_POST["name"]);
		$fname   = validate($_POST["fname"]);
		$mname   = validate($_POST["mname"]);
		$comment = validate($_POST["comment"]);
		$gender  = validate($_POST["gender"]);

		echo "Name: ".$name. '</br>';
		echo "Father's Name: ".$fname. '</br>';
		echo "Mother's Name: ".$mname. '</br>';
		echo "About You: ".$comment. '</br>';
		echo "Gender: ".$gender;


	}

	function validate($data){
		$data= trim($data);
		$data= stripcslashes($data);
		$data= htmlspecialchars($data);

	    return $data;
	}



 ?>

</body>
</html>