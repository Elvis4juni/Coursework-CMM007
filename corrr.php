<?php

include ("");


//$OK="no";


if(empty($_POST['username']) || empty($_POST['password'])){
    echo"both fields required. ";
}
//else echo $OK;

$username=$_POST["username"];
$password=$_POST["password"];

//$sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password' ";
$sql = "SELECT * FROM User WHERE username ='$username' AND password ='$password' ";

//$result = $conn->query($sql);
$result = mysqli_query($db,$sql);

//if ($result->num_rows > 0) {
if (mysqli_num_rows($result) > 0) {
    header("location: Homepage2.html");
}else {echo "incorrect username and password. ";
}



$db -> close();


?>
