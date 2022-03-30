<?php

include("dbconnect.php");

	if(isset($_POST["sendit"]))
    {
		//SOMETHING WAS POSTED
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$country = $_POST['country'];
        $subject = $_POST['subject'];
		
			//save to database 
			$query = "insert into Story (firstname, lastname, country, subject) values ('$fname', '$lname', '$country', '$subject')";

			$result=mysqli_query($db, $query);

			header("Location: welcome.html");
			die;

		}

?>
