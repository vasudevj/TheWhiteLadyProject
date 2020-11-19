<?php
include_once 'database.php';

if(isset($_POST['contactus']))
{	 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//Enter message into the table
	$sql = "INSERT INTO contact(name, email, message)
	VALUES ('$name','$email','$message')";

	if (mysqli_query($conn, $sql)) {
     	header('Location: ../index.php?status=sent');
	} 
	else {
		header('Location: ../index.php?status=fail');
		echo "Error: " . $sql . "
		" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>