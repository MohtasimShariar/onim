<?php
	session_start();
	$username="";
	$email="" ;
	$errors= array();
	
	$db = mysqli_connect("localhost", 'root', '', 'hr');




	

	//if the registration button clicked
	if(isset($_POST['register'])) {
		$gender= mysqli_real_escape_string($db,$_POST['gender']);
		$fname= mysqli_real_escape_string($db,$_POST['fname']);
		$mname= mysqli_real_escape_string($db,$_POST['mname']);
		$lname= mysqli_real_escape_string($db,$_POST['lname']);
		$email= mysqli_real_escape_string($db,$_POST['email']);
		$student_id= mysqli_real_escape_string($db,$_POST['student_id']);
		$selects= mysqli_real_escape_string($db,$_POST['selects']);
		
		
		
		
		if(count($errors)==0){
			$sql= "INSERT INTO users(gender,fname,mname,lname, email,student_id,selects)
				VALUES ('$gender','$fname','$mname','$lname', '$email', '$student_id','$selects')";

			mysqli_query($db, $sql);
		}

	}
	
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Insert from database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    </head>
    <body>
	<div class="headeruser">
		<h2>Class Registration</h2>
		<h3>Fill out r from carefully of registration</h3>
	</div>
	

    <form action="index.php" method="post" class="content2">
		<div class="input-group">
			<label>Gender</label>
			<select input  name="gender">
			<option value="">Please select</option>
			<option>Mail</option>
			<option>FeMail</option>
			<option>Others</option>
			</select>
		</div>
		<div class="input-group">
			<label>Student name</label>
			<input type="text" name="fname" value="">
		</div>
		<div class="input-group">
			<input type="text" name="mname" value=" ">
		</div>
		<div class="input-group">
			<input type="text" name="lname" value=" ">
		</div>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label>Student ID</label>
			<input type="number" name="student_id" value=" ">
		</div>
		
		<div class="input-group">
			<label>List of Classes</label>
			<select input  name="selects">
			<option value="">Please Select</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			</select>
		</div>
		
		<div class="input-group">
		<a href="fes.php">fetch</a> 
			<button type="submit" class="btn" name="register">Register</button>

		</div>
		
	</form>

		
    </body>
</html>