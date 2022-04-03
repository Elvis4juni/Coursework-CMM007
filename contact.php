<?php

include("dbconnect.php");

	if(isset($_POST["sendto"]))
    {
		//SOMETHING WAS POSTED
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$country = $_POST['country'];
        $subject = $_POST['subject'];
		
			//save to database 
			$query = "insert into contact (firstname, lastname, country, subject) values ('$fname', '$lname', '$country', '$subject')";

			$result=mysqli_query($db, $query);

			header("Location: welcome.php");
			die;

		}

?>
