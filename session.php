<?php
include("dbconnect.php");

session_start();
if($_SESSION['username']){
echo "Welcome User " . $_SESSION["username"];
}



?>