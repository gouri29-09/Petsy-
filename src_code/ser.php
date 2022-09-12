<?php


session_start();

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'petsi');
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		
		
	
		$sql="INSERT INTO testdrive (name,email,phone,subject,address) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[model]','$_POST[address]')";
		
		if(mysqli_query($conn, $sql)){
		
		} else{
			echo "ERROR: Hush! Sorry went Wrong! "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
  ?>
