
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
include ("dbconnect.php");

$sql = "SELECT id, firstname, lastname, country, subject FROM story";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. $row["country"]. $row["subject"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$db->close();
?>

</body>
</html>
