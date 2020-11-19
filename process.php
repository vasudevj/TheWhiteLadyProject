<?php
include_once 'database.php';

if(isset($_POST['save']))
{	 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$seats = $_POST['seats'];
	$event = $_POST['event'];
	$bdate = $_POST['bdate'];
	$meal = $_POST['meal'];

	//Check Booking
	$sql1 = "SELECT phone FROM bookings WHERE bdate='$bdate' AND meal='$meal'";
	$result = mysqli_query($conn, $sql1);
	if ((mysqli_num_rows($result)) == '3') {
		$sql2 = "INSERT INTO bookings(fname, lname, email, phone, seats, event, bdate, meal)
		VALUES ('$fname','$lname','$email','$phone','$seats','$event','$bdate','$meal')";

		if (mysqli_query($conn, $sql2)) {
			header("Location: success.php");
		} 
		else {
			echo "Error: " . $sql . "
			" . mysqli_error($conn);
		}
	}
	else{
		header("Location: unsuccess.php");
	}

	
	mysqli_close($conn);
}
?>