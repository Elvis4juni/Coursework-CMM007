<?php

  session_start();


?>




<!DOCTYPE html>
<html>
	
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	/* Bordered form */
form {
  border: 3px solid #f1f1f1;
  background-color: darkolivegreen;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: plum;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: pink;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}



/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  padding: auto;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: paleturquoise;
}




.body{
	
	background-image: url(.)
}
</style>
<body>
  <div class="container">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  <div class="imgcontainer">
    <img src="images/art sketch 2.jpeg" style="width:500px;height:200px">
  </div>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="container">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>
</body>
</html>

<?php

$_SESSION['username'] = "#";
echo $_SESSION['username'];
?>
