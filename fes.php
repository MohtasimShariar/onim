<?php
	session_start();
	$username="";
	$email="" ;
	$errors= array();
	
	$db = mysqli_connect("localhost", 'root', '', 'hr');



?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <h3><a href="index.php">fetch</a></h3> 
 <table action="fes.php" method="post" border="5px">
		
		<tr>
		    <td><b>Gender</b></td>
			<td><b>First Name</b></td>
			<td><b>Middle Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Email</b></td>
			<td><b>student_id</b></td>
			<td><b>Selects</b></td>
			
			
		</tr>
		<?php
	
		
		$sql = "SELECT*FROM users";
         $result = mysqli_query($db,$sql);

        if($result==true){

           while($row = mysqli_fetch_array($result)){
			?>
	
	     <tr>
		     <td><?php echo $row["gender"];?></td>
			 <td><?php echo $row["fname"];?></td>
			 <td><?php echo $row["mname"];?></td>
			 <td><?php echo $row["lname"];?></td>
		    <td><?php echo $row["email"];?></td>
			<td><?php echo $row["student_id"];?></td>
			<td><?php echo $row["selects"];?></td>
	
		</tr>
	       
	
	    <?php   }} ?>
	
		</table> 

 </body>
 </html>          
        