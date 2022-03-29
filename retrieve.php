<?php
include_once 'dbconnect.php';
$result = mysqli_query($conn,"SELECT * FROM story");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
 <style>
     table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
 </style>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>City</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["city_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>