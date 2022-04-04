<?php

include ("dbconnect.php");


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


$row=mysqli_fetch_array($result);

  if($row["usertype"]=="user");
{
  header("location:Homepage2.php");
}

if($row["usertype"]=="admin")
{
   header("location:Admin.html");
}



?>
