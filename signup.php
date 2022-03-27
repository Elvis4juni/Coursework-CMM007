<?php

include("dbconnect.php");

	if(isset($_POST["register"]))
    {
		//SOMETHING WAS POSTED
		$name = $_POST['fname'];
		$username = $_POST['username'];
		$password = $_POST['psw'];
		
		if(!empty($name) && !empty($password) && !empty($password))
		{
			//save to database 
			$query = "insert into User (name, username, password) values ('$name', '$username', '$password')";

			$result=mysqli_query($db, $query);

			header("Location: indexa.php");
			die;

		}else
		{
			echo "please enter some valid information";
		}
	}

?>
<html>
  <style>
    .body{
      background-image: url(images/arttttt.jpeg);
    }
    
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  background-color: burlywood;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  background-color: #04AA6D;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>
<body>
 <form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="fname" required>

    <label for="psw"><b>username</b></label>
    <input type="password" placeholder="Enter Password" name="username" required>

    <label for="psw-repeat"><b>password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw" required>
  
    <input type="submit" name="register" value="Sign Up">
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label> -->

    <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblußße">Terms & Privacy</a>.</p> -->

    <!-- <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button> -->
      <!-- <button type="submit" class="signupbtn">Sign Up</button> -->
    
    <!-- </div> -->
  </div>
</form>
</body>
</html>